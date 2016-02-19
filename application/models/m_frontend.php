<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_frontend extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function cek_mutabaah($id){
		$this->db->select('*');
	    $this->db->from('hamasah_mutabaah_mutabaah');
	    $this->db->where('status', 1);
	    $this->db->where('id_user', $id);
	    $this->db->where('date', strtotime(date('Y-m-d')));
	    $query = $this->db->get();

	    if ($query->num_rows() > 0) {
	        return $query->result();
	    }
	    return false;
	}
}