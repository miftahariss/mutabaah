<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Frontend extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_frontend');
    }

    function index(){
    	$data['base'] = 'Home';

    	if (!$this->session->userdata('email') && !$this->session->userdata('password')) {
            redirect('login');
        }

    	$data['mainpage'] = 'frontend/home';
    	$this->load->view('frontend/templates', $data);
    }

    function mutabaah(){
        if (!$this->session->userdata('email') && !$this->session->userdata('password')) {
            redirect('/');
        }
        $data['base'] = 'Mutabaah';

        if ($this->input->post('submit')) {
            $cek = $this->m_frontend->cek_mutabaah($this->session->userdata('id'));
            if ($cek == TRUE) {
                //var_dump('bis');exit;
                $this->session->set_flashdata('danger', 'danger');
                $this->session->set_flashdata('msg', 'Akhi sudah entry hari ini, mulai entry lagi besok yaa.');
                redirect('mutabaah');
                exit;
            }

            $publishdate = time();
            $entry_date = date('Y-m-d H:i:s', $publishdate);
            $sholat_jamaah = $this->input->post('sholat_jamaah');

            $jumlah_sholat_jamaah = $sholat_jamaah[0]+$sholat_jamaah[1]+$sholat_jamaah[2]+$sholat_jamaah[3]+$sholat_jamaah[4]+$sholat_jamaah[5];
            $shubuh_jamaah = $this->input->post('shubuh_jamaah');
            $sholat_dhuha = $this->input->post('sholat_dhuha');
            $tilawah = $this->input->post('tilawah');
            $shodaqoh = $this->input->post('shodaqoh');
            $qiyamulail = $this->input->post('qiyamulail');
            $berita_islam = $this->input->post('berita_islam');
            $muhasabah = $this->input->post('muhasabah');
            $hafalan_harian = $this->input->post('hafalan_harian');
            $olahraga_harian = $this->input->post('olahraga_harian');
            $istigfar_100 = $this->input->post('istigfar_100');
            $almasurat = $this->input->post('almasurat');

            $total = $jumlah_sholat_jamaah+$shubuh_jamaah+$sholat_dhuha+$tilawah+$shodaqoh+$qiyamulail+$berita_islam+$muhasabah+$hafalan_harian+$olahraga_harian+$istigfar_100+$almasurat;

            $insert = array(
                'id_user' => $this->session->userdata('id'),
                'date' => strtotime(date('Y-m-d')),
                'sholat_jamaah' => $jumlah_sholat_jamaah,
                'shubuh_jamaah' => $shubuh_jamaah,
                'sholat_dhuha' => $sholat_dhuha,
                'tilawah' => $tilawah,
                'shodaqoh' => $shodaqoh,
                'qiyamulail' => $qiyamulail,
                'berita_islam' => $berita_islam,
                'muhasabah' => $muhasabah,
                'hafalan_harian' => $hafalan_harian,
                'olahraga_harian' => $olahraga_harian,
                'istigfar_100' => $istigfar_100,
                'almasurat' => $almasurat,
                'total' => $total,
                'status' => 1
            );

            $proses = $this->db->insert('hamasah_mutabaah_mutabaah', $insert);

            if($proses){
                $this->session->set_flashdata('msg', 'Terima Kasih Akhi, Mutabaah berhasil di entry');
                //$data['error'] = "Terima Kasih Akhi, Mutaba'ah berhasil di entry";
                redirect('mutabaah');
            }
        }

        $data['mainpage'] = 'frontend/mutabaah';
        $this->load->view('frontend/templates', $data);
    }

    function login(){
    	$data['base'] = 'Login';

    	if ($this->input->post('submit')) {
            if (($this->input->post('email') == "Admin") && ($this->input->post('password') == "gr4m3d14")) {
                $userdata = array(
                    'id' => '0',
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'status' => '99',
                    'nama' => 'Admin HAMASAH Mutabaah',
                    'alamat' => '',
                    'kota' => '',
                    'provinsi' => '',
                    'gender' => 'Laki-laki',
                    'tanggal_lahir' => '',
                    'telp' => ''
                );
                $this->session->set_userdata($userdata);
            } else {
                $userdata = array();
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                $this->db->where('email', $email);
                $this->db->where('password', $password);
                $this->db->where_in('status', array('1', '99'));
                $queryuser = $this->db->get('hamasah_mutabaah_user');

                if ($queryuser->num_rows() > 0) {
                    $userdata = $queryuser->row_array();
                    $this->session->set_userdata($userdata);
                    redirect('/');
                    //exit();
                } else {
                	$data['error'] = "Username atau password salah";
                }
            }
        }

    	//$data['mainpage'] = 'frontend/login';
    	$this->load->view('frontend/login', $data);
    }

    function signup(){
    	if ($this->session->userdata('email') && $this->session->userdata('password')) {
            redirect('login');
        }
    	$data['base'] = 'Signup';

    	if ($this->input->post('submit')) {
    		$this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('telp', 'No. HP', 'required|numeric');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('kota', 'Kota', 'required');
            $this->form_validation->set_rules('provinsi', 'Propinsi', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required');

            if ($this->form_validation->run() == false) {
                
            } else {
            	$publishdate = time();
                $entry_date = date('Y-m-d H:i:s', $publishdate);
                $nama = $this->input->post('nama');
                $email = $this->input->post('email');
                $pass1 = $this->input->post('password');
                $pass2 = $this->input->post('confirmpassword');
                $tgl_lahir = $this->input->post('tgl_lahir');

                $jk = $this->input->post('jk');
                $alamat = $this->input->post('alamat');
                $kota = $this->input->post('kota');
                $provinsi = $this->input->post('provinsi');
                $telp = $this->input->post('telp');

                $idkey = date("YmdHis") . $this->generateString(5);
                $token = $this->generateString(12);

                $this->db->where('email', $email);
                $cekemail = $this->db->get('hamasah_mutabaah_user');

                if ($cekemail->num_rows() > 0) {
                    $data['error'] = '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Email yang Anda masukkan telah terdaftar.
                            </div>';
                } else {
                    if ($pass1 == $pass2) {
                        $insert_user = array(
                            'date' => $publishdate,
                            'email' => $email,
                            'password' => md5($pass1),
                            'status' => '2',
                            'nama' => $nama,
                            'alamat' => $alamat,
                            'kota' => $kota,
                            'propinsi' => $provinsi,
                            'gender' => $jk,
                            'tanggal_lahir' => $tgl_lahir,
                            'telp' => $telp
                        );

                        $insert_log = array(
                            'idkey' => $idkey,
                            'date' => $publishdate,
                            'nama' => $nama,
                            'email' => $email,
                            'token' => $token,
                            'status' => '1'
                        );

                        $this->db->insert('hamasah_mutabaah_user', $insert_user);
                        $this->db->insert('hamasah_mutabaah_log', $insert_log);

                        // Send Registration Email Validation
                        $config = array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'smtp.mandrillapp.com',
                            'smtp_port' => 587,
                            'smtp_user' => 'ezgramedia@gmail.com',
                            'smtp_pass' => 'zbYQKloaZJmpc4JrCTUBAg',
                            'mailtype' => 'text',
                            'charset' => 'utf-8',
                            'wordwrap' => true
                        );

                        $this->load->library('email', $config);
                        $this->email->set_newline("\r\n");

                        $this->email->from('webmaster@hamasah.com', 'HAMASAH - Mutabaah');
                        $this->email->to($email);

                        $this->email->subject('Validasi Pendaftaran HAMASAH - Mutabaah');
                        $this->email->message('Klik link berikut atau copy link dan paste ke browser Anda untuk validasi pendaftaran HAMASAH Mutabaah 
						' . site_url('registervalidator/' . $token));

                        if ($this->email->send()) {
                            redirect('registersukses');
                        }
                    } else {
                        $data['error'] = "<strong>Password di Confirm Password tidak sama.</strong>";
                    }
                }
            }
    	}

    	$this->load->view('frontend/signup', $data);
    }

    public function registersukses() {
        //$data['error'] = $this->_login();
        $data['base'] = 'Home';

        //$data['mainpage'] = 'frontend/registersukses';
        $this->load->view('frontend/registersukses', $data);
    }

    public function registervalidator() {
        //$data['error'] = $this->_login();
        $data['base'] = 'Home';

        $data['status'] = '';
        $data['mess'] = '';

        if ($this->uri->segment(2)) {
            $this->db->where('token', $this->uri->segment(2));
            $this->db->where('status', '1');
            $querylog = $this->db->get('hamasah_mutabaah_log');

            if ($querylog->num_rows() > 0) {
                $datalog = $querylog->row_array();

                $this->db->where('email', $datalog['email']);
                $queryuser = $this->db->get('hamasah_mutabaah_user');

                if ($queryuser->num_rows() > 0) {
                    $datauser = $queryuser->row_array();

                    if ($datauser['status'] == '2') {
                        $updateuser = array(
                            'status' => '1'
                        );
                        $updatelog = array(
                            'status' => '0'
                        );

                        $this->db->where('email', $datalog['email']);
                        $this->db->update('hamasah_mutabaah_user', $updateuser);

                        $this->db->where('id', $datalog['id']);
                        $this->db->update('hamasah_mutabaah_log', $updatelog);

                        //$data['status'] = "1";
                        //$data['mess'] = "Akun anda berhasil divalidasi, silahkan Login dengan Email yang pernah Anda daftarkan";
                        $this->session->set_flashdata('registrasi', 'Akun anda berhasil divalidasi, silahkan Login dengan Email yang pernah Anda daftarkan');
                        redirect('login');
                    } elseif ($datauser['status'] == '1') {
                        $data['status'] = "0";
                        $data['mess'] = "Akun anda sudah tervalidasi, silahkan Login dengan Email yang pernah Anda daftarkan";
                    } else {
                        $data['status'] = "0";
                        $data['mess'] = "Akun anda suda di non aktifkan oleh Administrator!";
                    }
                } else {
                    $data['status'] = "0";
                    $data['mess'] = "Link yang Anda gunakan tidak valid!";
                }
            } else {
                $data['status'] = "0";
                $data['mess'] = "Link yang Anda gunakan tidak valid!";
            }
        } else {
            $data['status'] = "0";
            $data['mess'] = "Link yang Anda gunakan tidak valid!";
        }
        /*
          $this->db->where('token', $token);
          $this->db->where('status', '1');
          $query = $this->db->get('duniasoccer_championsgame_log');
         */
        //$data['mainpage'] = 'frontend/registervalidator';
        $this->load->view('frontend/registervalidator', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function forgotpassword() {
        $data['base'] = 'Home';
        $data['status'] = "";

        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() == false) {
                
            } else {
                $this->db->where('email', $this->input->post('email'));
                $this->db->where('status', '1');
                $queryemail = $this->db->get('hamasah_mutabaah_user');

                if ($queryemail->num_rows() > 0) {
                    $dataemail = $queryemail->row_array();

                    $tanggal = date('Y-m-d H:i:s');
                    $idkey = date("YmdHis") . $this->generateString(5);
                    $token = $this->generateString(12);

                    $insert_log = array(
                        'idkey' => $idkey,
                        'date' => $tanggal,
                        'nama' => $dataemail['nama'],
                        'email' => $dataemail['email'],
                        'token' => $token,
                        'status' => '1'
                    );

                    $this->db->insert('hamasah_mutabaah_log', $insert_log);

                    // Send Registration Email Validation
                    $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'smtp.mandrillapp.com',
                        'smtp_port' => 587,
                        'smtp_user' => 'ezgramedia@gmail.com',
                        'smtp_pass' => 'zbYQKloaZJmpc4JrCTUBAg',
                        'mailtype' => 'text',
                        'charset' => 'utf-8',
                        'wordwrap' => true
                    );

                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");

                    $this->email->from('webmaster@hamasah.com', 'HAMASAH - Mutabaah');
                    $this->email->to($dataemail['email']);
                    //$this->email->cc('deka@somemail.com');
                    //$this->email->bcc('them@their-example.com');
                    $this->email->subject('Lupa Password HAMASAH - Mutabaah');
                    $this->email->message('Klik link berikut atau copy link dan paste ke browser Anda untuk mengganti password akun HAMASAH - Mutabaah
					' . site_url('passwordreset/' . $token));

                    if ($this->email->send()) {
                        $data['status'] = "Silahkan cek email Anda untuk mengubah password.";
                    } else {
                        $data['status'] = "Server gagal mengirim email. Silahkan coba beberapa saat lagi.";
                    }
                } else {
                    $data['status'] = "Email yang Anda masukkan tidak terdaftar atau belum tervalidasi";
                }
            }
        }

        //$data['mainpage'] = 'frontend/forgotpassword';
        $this->load->view('frontend/forgotpassword', $data);
    }

    public function passwordreset() {
        $data['base'] = 'Home';
        $data['status'] = "1";
        $data['mess'] = "";

        if ($this->uri->segment(2)) {
            $this->db->where('token', $this->uri->segment(2));
            $this->db->where('status', '1');
            $querylog = $this->db->get('hamasah_mutabaah_log');

            if ($querylog->num_rows() > 0) {
                $datalog = $querylog->row_array();

                $this->db->where('email', $datalog['email']);
                $this->db->where('status', '1');
                $queryuser = $this->db->get('hamasah_mutabaah_user');
                if ($queryuser->num_rows() > 0) {

                    if ($this->input->post('submit')) {
                        $this->form_validation->set_rules('password', 'Password', 'required');
                        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required');

                        if ($this->form_validation->run() == false) {
                            
                        } else {
                            $pass1 = $this->input->post('password');
                            $pass2 = $this->input->post('confirmpassword');

                            if ($pass1 == $pass2) {
                                $datauser = $queryuser->row_array();

                                $updateuser = array(
                                    'password' => md5($pass1)
                                );

                                $this->db->where('id', $datauser['id']);
                                $this->db->update('hamasah_mutabaah_user', $updateuser);

                                $updatelog = array(
                                    'status' => '0'
                                );

                                $this->db->where('id', $datalog['id']);
                                $this->db->update('hamasah_mutabaah_log', $updatelog);

                                //$data['status'] = "0";
                                //$data['mess'] = "Password Anda berhasil diubah, silahkan Login dengan password baru Anda";

                                $this->session->set_flashdata('registrasi', '<strong><font color=red>Password Anda berhasil diubah, silahkan Login dengan password baru Anda</font></strong>');
                                redirect('login');
                            } else {
                                $data['error'] = "<strong>Password di Confirm Password tidak sama.</strong>";
                            }
                        }
                    }
                } else {
                    $data['status'] = "0";
                    $data['mess'] = "Link yang Anda gunakan tidak valid!";
                }
            } else {
                $data['status'] = "0";
                $data['mess'] = "Link yang Anda gunakan tidak valid!";
            }
        } else {
            $data['status'] = "0";
            $data['mess'] = "Link yang Anda gunakan tidak valid!";
        }

        //$data['mainpage'] = 'frontend/passwordreset';
        $this->load->view('frontend/passwordreset', $data);
    }

    public function generateString($length) {
        // mulai dengan string kosong
        $v_string = "";

        // definisikan karakter-karakter yang diperbolehkan
        $possible = "0123456789bcdfghjkmnpqrstvwxyz";

        // set up sebuah counter
        $i = 0;

        // tambahkan karakter acak ke $v_string sampai $length tercapai
        while ($i < $length) {
            // ambil sebuah karakter acak dari beberapa
            // kemungkinan yang sudah ditentukan tadi
            $char = substr($possible, mt_rand(0, strlen($possible) - 1), 1);

            // kami tidak ingin karakter ini jika sudah ada pada string
            if (!strstr($v_string, $char)) {
                $v_string .= $char;
                $i++;
            }
        }
        return $v_string;
    }

}