<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpustakaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek session login
		if($this->session->userdata('username') == ""){
			redirect(base_url("admin/login"));
		}else{
			$this->data['a_dashboard']	= '';
			$this->data['a_profil'] 		= '';
			$this->data['a_tugasfungsi'] 		= '';
			$this->data['a_visi'] 		= '';
			$this->data['a_sejarah'] 		= '';
			$this->data['a_sdm'] 			= '';
			$this->data['a_organisasi'] 	= '';
			$this->data['a_pelayanan']	= '';
			$this->data['a_unggulan'] 	= '';
			$this->data['a_igd'] 			= '';
			$this->data['a_rajal'] 		= '';
			$this->data['a_ranap'] 		= '';
			$this->data['a_medis']	    = '';
			$this->data['a_nonmedis']	    = '';
			$this->data['a_tarif'] 		= '';
			$this->data['a_alur'] 		= '';
			$this->data['a_jadwal'] 		= '';
			$this->data['a_perpustakaan'] = '';
			$this->data['a_ppid'] 		= '';
			$this->data['a_diklat'] 		= '';
			$this->data['a_informasi']	= '';
			$this->data['a_berita']		= '';
			$this->data['a_ikm']			= '';
			$this->data['a_mutu']			= '';
			$this->data['a_sakip']		= '';
			$this->data['a_kegiatan']		= '';
			$this->data['a_penelitian']		= '';
			$this->data['a_inovasi']		= '';
			$this->data['a_akun']			= '';
			$this->data['a_admin']		= '';
		}
	}

	public function index()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";
		
		$datas['username'] = $this->session->userdata('username');
		
		$this->data['a_perpustakaan'] = 'active';

		$akun = $this->db->get('t_perpustakaan');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status','1');
		$akun = $this->db->get('t_perpustakaan');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status','0');
		$akun = $this->db->get('t_perpustakaan');
		$this->data['nonaktif'] = $akun->num_rows();
		
        $this->db->order_by('tanggal_upload','asc');
        $this->db->order_by('nama_file','asc');
		$this->data['perpustakaan'] = $this->db->get('t_perpustakaan');

		$this->load->view('admin/perpustakaan/tabel_perpustakaan',$this->data);
	}

	public function save()
	{
		date_default_timezone_set("Asia/Jakarta");
		$nama_file 	= $this->input->post('nama_file');
		$kategori 	= $this->input->post('kategori');
		$file 		= $this->input->post('link');
		$tanggal	= date('Y-m-d');
		$status 	= $this->input->post('status');

		$data		= array('nama_file'			=>$nama_file,
							'kategori'			=>$kategori,
							'tanggal_upload'	=>$tanggal,
							'file'				=>$file,
							'status'			=>$status);

		$this->db->insert('t_perpustakaan',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu Perpustakaan, Dengan Nama File  = <b>".$nama_file."</b>...");

		redirect('admin/perpustakaan');
   }

   	public function edit($id){
	
		date_default_timezone_set("Asia/Jakarta");
		$this->db->where('id',$id);
		$dbperpustakaan = $this->db->get('t_perpustakaan')->row();


		$nama_file 	= $this->input->post('nama_file');
		$kategori 	= $this->input->post('kategori');
		$file 		= $this->input->post('link');
		$tanggal	= date('Y-m-d');
		$status 	= $this->input->post('status');

		$data		= array('nama_file'			=>$nama_file,
							'kategori'			=>$kategori,
							'tanggal_upload'	=>$tanggal,
							'file'				=>$file,
							'status'			=>$status);

		$this->db->where('id',$id);
		$this->db->update('t_perpustakaan',$data);
		
		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu Perpustakaan, Dengan Nama File  = <b>".$nama_file."</b>...");

		redirect('admin/perpustakaan');
   }

   	public function delete($id){

   		$this->db->where('id',$id);
		$dbperpustakaan = $this->db->get('t_perpustakaan')->row();

		if ($dbperpustakaan->file!=null) {
			unlink('file/perpustakaan/'.$dbperpustakaan->file);
		}
		$this->db->where('id',$id);
		$this->db->delete('t_perpustakaan');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Perpustakaan");

		redirect('admin/perpustakaan');
   }
    
}
