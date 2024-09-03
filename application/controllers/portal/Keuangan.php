<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		// cek session login
		if($this->session->userdata('username') == ""){
			redirect(base_url("portal/login"));
		}
		$this->API="http://103.80.89.163:8080/ci-restserver-master/index.php/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');

	}

	public function gaji()
	{
        $nip = $this->session->userdata('username');
        $data['total'] = '';
        $data['aktif'] = '';
        $data['nonaktif'] = '';
		$params = array('nip'=> $nip);
		// echo "asdas".$NO_PASIEN;
		$data['biodata'] = json_decode($this->curl->simple_get($this->API.'/portal/karyawan',$params));

		$this->load->view('karyawan/tabel_gaji',$data);
    }

    public function uang_makan()
	{
        $nip = $this->session->userdata('username');
        $data['total'] = '';
        $data['aktif'] = '';
        $data['nonaktif'] = '';
		$params = array('nip'=> $nip);
		// echo "asdas".$NO_PASIEN;
		$data['biodata'] = json_decode($this->curl->simple_get($this->API.'/portal/karyawan',$params));

		$this->load->view('karyawan/tabel_uangmakan',$data);
    }

    public function bpjs()
	{
        $nip = $this->session->userdata('username');
        $data['total'] = '';
        $data['aktif'] = '';
        $data['nonaktif'] = '';
		$params = array('nip'=> $nip);
		// echo "asdas".$NO_PASIEN;
		$data['biodata'] = json_decode($this->curl->simple_get($this->API.'/portal/karyawan',$params));

		$this->load->view('karyawan/tabel_bpjs',$data);
    }

    public function jpumum()
	{
        $nip = $this->session->userdata('username');
        $data['total'] = '';
        $data['aktif'] = '';
        $data['nonaktif'] = '';
		$params = array('nip'=> $nip);
		// echo "asdas".$NO_PASIEN;
		$data['biodata'] = json_decode($this->curl->simple_get($this->API.'/portal/karyawan',$params));

		$this->load->view('karyawan/tabel_jpumum',$data);
    }

    public function jkn()
	{
        $nip = $this->session->userdata('username');
        $data['total'] = '';
        $data['aktif'] = '';
        $data['nonaktif'] = '';
		$params = array('nip'=> $nip);
		// echo "asdas".$NO_PASIEN;
		$data['biodata'] = json_decode($this->curl->simple_get($this->API.'/portal/karyawan',$params));

		$this->load->view('karyawan/tabel_jkn',$data);
    }
    
}
