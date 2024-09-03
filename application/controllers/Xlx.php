<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xlx extends CI_Controller {
    function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");  		
	}

	public function index()
	{
        $setdata['getvaksin']  = $this->db->get('status_vaksin')->row();
        $setdata['notif']   = "";
        $this->load->view('portal/status_vaksin',$setdata);
	}
    public function search()
	{

        $data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= '';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= '';
		$data['s_penunjang']	= '';
		$data['s_tarif'] 		= '';
		$data['s_alur'] 		= '';
		$data['s_jadwal'] 		= '';
		$data['s_perpustakaan'] = '';
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';
        $data['tanggal']		= date('Y-m-d');
        $data['getjadwal']		= array();

		$this->load->view('portal/status_vaksin',$data);
	}
    public function save_status(){
        
        $id = $this->input->post('id');
        $vaksin = $this->input->post('jenis');
        $jumlah = $this->input->post('jumlah');
        $tanggal= $this->input->post('tanggal');
        $status = $this->input->post('status');
        $usia   = $this->input->post('usia');

        $data   = array(
            "vaksin"    => $vaksin,
            "jumlah"    => $jumlah,
            "tanggal"   => $tanggal,
            "min_usia"  => $usia,
            "aktif"     => $status
        );

        $this->db->where('id',$id);
        $this->db->update('status_vaksin',$data);

        redirect('xlx');
    }

    
}
