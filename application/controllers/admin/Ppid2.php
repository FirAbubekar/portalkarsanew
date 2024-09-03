<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PPID extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek session login
		if($this->session->userdata('username') == ""){
			redirect(base_url("admin/login"));
		}
	}

	public function index()
	{
		$data['title'] = "Admin | RSU Karsa Husada";
		
		$datas['username'] = $this->session->userdata('username');
		
		$data['a_dashboard']	= '';
		$data['a_profil'] 		= '';
		$data['a_visi'] 		= '';
		$data['a_sejarah'] 		= '';
		$data['a_sdm'] 			= '';
		$data['a_organisasi'] 	= '';
		$data['a_pelayanan']	= '';
		$data['a_unggulan'] 	= '';
		$data['a_igd'] 			= '';
		$data['a_rajal'] 		= '';
		$data['a_ranap'] 		= '';
		$data['a_medis']	    = '';
		$data['a_nonmedis']	    = '';
		$data['a_tarif'] 		= '';
		$data['a_alur'] 		= '';
		$data['a_jadwal'] 		= '';
		$data['a_perpustakaan'] = '';
		$data['a_ppid'] 		= 'active';
		$data['a_informasi']	= '';
		$data['a_berita']		= '';
		$data['a_ikm']			= '';
		$data['a_mutu']			= '';
		$data['a_sakip']		= '';
		$data['a_akun']			= '';
		$data['a_admin']		= '';

		$akun = $this->db->get('t_ppid');
		$data['total'] = $akun->num_rows();

		$this->db->where('status','1');
		$akun = $this->db->get('t_ppid');
		$data['aktif'] = $akun->num_rows();

		$this->db->where('status','0');
		$akun = $this->db->get('t_ppid');
		$data['nonaktif'] = $akun->num_rows();

		$data['ppid'] = $this->db->get('t_ppid');

		$this->load->view('admin/ppid/tabel_ppid',$data);
	}

	public function save(){
		$this->load->library('upload');
		$judul   	= $this->input->post('judul');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');
		$menu 		= $this->input->post('menu');
		$submenu 	= $this->input->post('submenu');

		$this->db->limit('1');
		$this->db->order_by('id','desc');
		$dbppid = $this->db->get('t_ppid')->row();

		$data		= array('judul'			=>$judul,
							'deskripsi'		=>$deskripsi,
							'menu'			=>$menu,
							'submenu'		=>$submenu,
							'status'		=>$status);

		$this->db->insert('t_ppid',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu Perpustakaan, Dengan Nama File  = <b>".$judul."</b>...");

		redirect('admin/ppid');
   	}

   	public function edit($id){

		$this->db->where('id',$id);
		$dbppid		= $this->db->get('t_ppid')->row();

		$judul   	= $this->input->post('judul');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

	
		$data		= array('judul'			=>$judul,
							'deskripsi'		=>$deskripsi,
							'status'		=>$status);
	

		$this->db->where('id',$id);
		$this->db->update('t_ppid',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu Perpustakaan, Dengan Nama File  = <b>".$judul."</b>...");

		redirect('admin/ppid');
	}

	public function permohonaninformasi(){
		$data['title'] = "Admin | RSU Karsa Husada";
		
		$datas['username'] = $this->session->userdata('username');
		
		$data['a_dashboard']	= '';
		$data['a_profil'] 		= '';
		$data['a_visi'] 		= '';
		$data['a_sejarah'] 		= '';
		$data['a_sdm'] 			= '';
		$data['a_organisasi'] 	= '';
		$data['a_pelayanan']	= '';
		$data['a_unggulan'] 	= '';
		$data['a_igd'] 			= '';
		$data['a_rajal'] 		= '';
		$data['a_ranap'] 		= '';
		$data['a_medis']	    = '';
		$data['a_nonmedis']	    = '';
		$data['a_tarif'] 		= '';
		$data['a_alur'] 		= '';
		$data['a_jadwal'] 		= '';
		$data['a_perpustakaan'] = '';
		$data['a_ppid'] 		= 'active';
		$data['a_informasi']	= '';
		$data['a_berita']		= '';
		$data['a_ikm']			= '';
		$data['a_mutu']			= '';
		$data['a_sakip']		= '';
		$data['a_akun']			= '';
		$data['a_admin']		= '';

		$akun = $this->db->get('t_permohonanppid');
		$data['total'] = $akun->num_rows();

		$this->db->where('status','1');
		$akun = $this->db->get('t_permohonanppid');
		$data['aktif'] = $akun->num_rows();

		$this->db->where('status','0');
		$akun = $this->db->get('t_permohonanppid');
		$data['nonaktif'] = $akun->num_rows();

		$data['ppid'] = $this->db->get('t_permohonanppid');
		$this->load->view('admin/ppid/tabel_formppid',$data);
	}

	public function getdetail(){
		$kdpermohonan = $this->input->post('kdpermohonan');

		$this->db->where('kdPermohonan',$kdpermohonan);
		$getdetail = $this->db->get('t_permohonanppid')->row();

		echo json_encode($getdetail);
	}

  	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('t_ppid');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Perpustakaan");

		redirect('admin/ppid');
   	}
    
}
