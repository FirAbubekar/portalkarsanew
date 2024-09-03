<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		date_default_timezone_set("Asia/Jakarta");
		$this->load->library('user_agent');
  		// $browser = $this->agent->browser();
  		// $os = $this->agent->platform();
  		// $ip_address = $this->input->ip_address();

  		// $this->db->where('ip_address',$ip_address);
  		// $this->db->where('tanggal',date('Y-m-d'));
  		// $visit = $this->db->get('t_visitor');
  		// if($visit->num_rows()>0){

  		// }
  		// else{
  		// $datas = array('ip_address'		=> $ip_address,
  		// 			  'browser'			=> $browser,
  		// 			  'sistem_operasi'	=> $os,
  		// 			  'tanggal'			=> date('Y-m-d'));
  		// $this->db->insert('t_visitor',$datas);
  		// }
  		
	}

	public function index()
	{
		$data['s_beranda']		= 'active';
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

		$this->db->where('posting','1');
		$this->db->order_by('tanggal','desc');
		$this->db->order_by('publikasi','desc');
		$this->db->limit(6);
		$data['berita'] = $this->db->get('t_berita');


		$this->load->view('portal/home',$data);
	}

	public function tes(){
		$this->load->view('portal/calender');
	}

	public function getkegiatan(){
		$this->db->where('status','Aktif');
		$getkegiatan = $this->db->get('t_kegiatan')->result();

		foreach($getkegiatan as $row)
		{
		$data[] = array(
		'id'   => $row->id,
		'title'   => $row->nama_kegiatan,
		'start'   => $row->tgl_mulai,
		'end'   => $row->tgl_akhir
		);
		}

		echo json_encode($data);
	}

	function getdetailkegiatan(){
		$tglkegiatan = $this->input->post('tglkegiatan');
		
		$this->db->where('tgl_mulai',$tglkegiatan);
		$getkegiatan = $this->db->get('t_kegiatan')->result();

		echo json_encode($getkegiatan);
	}
}
