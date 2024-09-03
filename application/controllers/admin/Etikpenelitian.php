<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etikpenelitian extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek session login
		if($this->session->userdata('username') == ""){
			redirect(base_url("admin/login"));
		}else{
			$this->data['a_dashboard']	= '';
			$this->data['a_profil'] 	= '';
			$this->data['a_visi'] 		= '';
			$this->data['a_sejarah'] 	= '';
			$this->data['a_tugasfungsi']= '';
			$this->data['a_sdm'] 		= '';
			$this->data['a_organisasi'] = '';
			$this->data['a_pelayanan']	= '';
			$this->data['a_unggulan'] 	= '';
			$this->data['a_igd'] 		= '';
			$this->data['a_rajal'] 		= '';
			$this->data['a_ranap'] 		= '';
			$this->data['a_medis']	    = '';
			$this->data['a_nonmedis']	= '';
			$this->data['a_tarif'] 		= '';
			$this->data['a_alur'] 		= '';
			$this->data['a_jadwal'] 	= '';
			$this->data['a_perpustakaan'] = '';
			$this->data['a_ppid'] 		= '';
			$this->data['a_diklat']	= '';
			$this->data['a_informasi']	= '';
			$this->data['a_berita']		= '';
			$this->data['a_ikm']			= '';
			$this->data['a_mutu']			= '';
			$this->data['a_sakip']		= '';
			$this->data['a_inovasi']		= '';
			$this->data['a_kegiatan']		= '';
			$this->data['a_penelitian']		= '';
			$this->data['a_akun']			= '';
			$this->data['a_admin']		= '';
		}
	}

	public function index()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";
		
		$datas['username'] = $this->session->userdata('username');
		
		$this->data['a_penelitian']		= 'active';

		$akun = $this->db->get('t_etikpenelitian');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status','1');
		$akun = $this->db->get('t_etikpenelitian');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status','0');
		$akun = $this->db->get('t_etikpenelitian');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['etikpenelitian'] = $this->db->get('t_etikpenelitian');

		$this->load->view('admin/etik/tabel_etikpenelitian',$this->data);
	}

	public function save(){
		
		$username = $this->session->userdata('username') ;
		$kdDokumen 	= "EP".date('YmdHis');
		$judul   	= $this->input->post('judul');
		$tanggal 	= $this->input->post('tanggal');
		$link 		= $this->input->post('link');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

		$data		= array(
							'kdDokumen'=>$kdDokumen,
							'judulDokumen'=>$judul,
							'deskripsiDokumen'=>$deskripsi,
							'linkDownload'=>$link,
							'tanggalUpload'=>$tanggal,
							'createdDate'=>date('Y-m-d H:i:s'),
							'userCreated'=>$username,
							'status'=>$status);

		$this->db->insert('t_etikpenelitian',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu Etik Penelitian, Dengan Nama File  = <b>".$judul."</b>...");

		redirect('admin/etikpenelitian');
   	}

   	public function edit($id){

		$this->db->where('id',$id);
		$dbppid		= $this->db->get('t_ppid')->row();

		$judul   	= $this->input->post('judul');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

		$config['upload_path']          = 'file/ppid';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 4000;
		$config['max_height']           = 4000;

		if($_FILES['gambar']['name']==null){
			if($dbppid->gambar!=null){
				$gambar = $dbppid->gambar;
			}
		}
		else{
		unlink('file/ppid/'.$dbppid->gambar);
		$gambar = substr($_FILES['gambar']['name'],-4);
		$gambar = strtolower(str_replace(' ','_',$judul."".$gambar));
		$config['file_name'] 			= strtolower($judul);
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			
			$data = array('upload_data' => $this->upload->data());
		}
		}
	
		$data		= array('judul'			=>$judul,
							'deskripsi'		=>$deskripsi,
							'gambar'		=>$gambar,
							'status'		=>$status);
	

		$this->db->where('id',$id);
		$this->db->update('t_ppid',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu Perpustakaan, Dengan Nama File  = <b>".$nama_file."</b>...");

		redirect('admin/ppid');
	}

	public function form(){
		$this->data['title'] = "Admin | RSU Karsa Husada";
		
		$datas['username'] = $this->session->userdata('username');
		
		$this->data['a_penelitian']		= 'active';

		$akun = $this->db->get('t_permohonanppid');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status','1');
		$akun = $this->db->get('t_permohonanppid');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status','0');
		$akun = $this->db->get('t_permohonanppid');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['ppid'] = $this->db->get('t_permohonanppid');
		$this->load->view('admin/ppid/tabel_formppid',$this->data);
	}

	public function getdetail(){
		$kdpermohonan = $this->input->post('kdpermohonan');

		$this->db->where('kdPermohonan',$kdpermohonan);
		$getdetail = $this->db->get('t_permohonanppid')->row();

		echo json_encode($getdetail);
	}

  	public function delete($id){
		$this->db->where('kdDokumen',$id);
		$this->db->delete('t_etikpenelitian');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Perpustakaan");

		redirect('admin/etikpenelitian');
   	}
    
}
