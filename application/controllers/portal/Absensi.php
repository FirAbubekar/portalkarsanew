<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		// cek session login
		if($this->session->userdata('username') == ""){
			redirect(base_url("portal/login"));
		}
		$this->API="http://103.80.89.163/rest_karsa/index.php/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');

	}

	public function index()
	{
		$nip = $this->session->userdata('username');
		
		$data['a_profil']    = '';
		$data['a_bpjs']      = '';
		$data['a_str']       = '';
		$data['hadir']       = 'active';
		$data['a_absensi']   = 'active';
		$data['a_umum']      = '';
		$data['a_pelatihan'] = '';
		$data['a_kehadiran'] = '';
		$data['a_bulan']     = '';
		$data['a_dinas']     = '';
		$data['dinas1']       = '';
		$data['mutasi']      = '';
		$data['a_cuti']      = '';
		$data['keuangan']    = '';
		$data['a_pangkat']   = '';
		$data['a_gaji']      = '';
		$data['a_pgaji']     = '';
		$data['a_makan']     = '';
		$data['a_mutasi']    = '';

		$params = array('nip'=> $nip);
		// echo "asdas".$NO_PASIEN;
		$data['biodata'] = json_decode($this->curl->simple_get($this->API.'/portal/karyawan',$params));

		$bio = json_decode($this->curl->simple_get($this->API.'/portal/karyawan',$params));
		
		$params1 = array('pin'=> $bio[0]->id_finger);
		$data['finger'] = json_decode($this->curl->simple_get($this->API.'/portal/absensi',$params1));

		
		
		$this->load->view('karyawan/tabel_absensi',$data);
    }
    
}
