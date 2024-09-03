<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelatihan extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		// cek session login
		if($this->session->userdata('username') == ""){
			redirect(base_url("portal/login"));
		}
		$this->API="http://103.80.89.163:8080/rest_karsa/index.php/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');

	}

	public function index()
	{
        $nip = $this->session->userdata('username');
        $data['total'] = '';
        $data['aktif'] = '';
        $data['nonaktif'] = '';
		$params = array('nip'=> $nip);
		// echo "asdas".$NO_PASIEN;
		$data['biodata'] = json_decode($this->curl->simple_get($this->API.'/portal/karyawan',$params));

		$this->load->view('karyawan/tabel_pelatihan',$data);
    }

}
