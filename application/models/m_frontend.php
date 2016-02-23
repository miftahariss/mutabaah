<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_frontend extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function cek_mutabaah($id,$tanggal){
		$this->db->select('*');
	    $this->db->from('hamasah_mutabaah_mutabaah');
	    $this->db->where('status', 1);
	    $this->db->where('id_user', $id);
	    $this->db->where('date', strtotime($tanggal));
	    $query = $this->db->get();

	    if ($query->num_rows() > 0) {
	        return $query->result();
	    }
	    return false;
	}

	public function get_chart($id_user){
		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-01-01')));
		$this->db->where('date <=', strtotime(date('Y-01-31')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['januari'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-02-01')));
		$this->db->where('date <=', strtotime(date('Y-02-29')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['februari'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-03-01')));
		$this->db->where('date <=', strtotime(date('Y-03-31')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['maret'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-04-01')));
		$this->db->where('date <=', strtotime(date('Y-04-30')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['april'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-05-01')));
		$this->db->where('date <=', strtotime(date('Y-05-31')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['mei'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-06-01')));
		$this->db->where('date <=', strtotime(date('Y-06-30')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['juni'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-07-01')));
		$this->db->where('date <=', strtotime(date('Y-07-31')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['juli'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-08-01')));
		$this->db->where('date <=', strtotime(date('Y-08-31')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['agustus'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-09-01')));
		$this->db->where('date <=', strtotime(date('Y-09-30')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['september'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-10-01')));
		$this->db->where('date <=', strtotime(date('Y-10-31')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['oktober'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-11-01')));
		$this->db->where('date <=', strtotime(date('Y-11-30')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['november'] = $query->result();

		$this->db->select('SUM(sholat_jamaah) AS total_sholat_jamaah, SUM(shubuh_jamaah) AS total_shubuh_jamaah');
		$this->db->select('SUM(sholat_dhuha) AS total_sholat_dhuha, SUM(tilawah) AS total_tilawah');
		$this->db->select('SUM(shodaqoh) AS total_shodaqoh, SUM(qiyamulail) AS total_qiyamulail');
		$this->db->select('SUM(berita_islam) AS total_berita_islam, SUM(muhasabah) AS total_muhasabah');
		$this->db->select('SUM(hafalan_harian) AS total_hafalan_harian, SUM(olahraga_harian) AS total_olahraga_harian');
		$this->db->select('SUM(istigfar_100) AS total_istigfar_100, SUM(almasurat) AS total_almasurat');
		$this->db->where('id_user', $id_user);
		$this->db->where('date >=', strtotime(date('Y-12-01')));
		$this->db->where('date <=', strtotime(date('Y-12-31')));
		$query = $this->db->get('hamasah_mutabaah_mutabaah');
		$results['desember'] = $query->result();

		return $results;
	}
}