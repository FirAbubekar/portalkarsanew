<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

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

		$this->data['a_kegiatan']		= 'active';

        $this->db->order_by('tgl_mulai','asc');
		$this->data['kegiatan'] = $this->db->get('t_kegiatan');

		$this->load->view('admin/kegiatan/tabel_kegiatan',$this->data);
	}

	public function save_kegiatan(){
        date_default_timezone_set("Asia/Jakarta");
		$id 		    = "KGTN".date('YmdHis');
		$nama_kegiatan 	= $this->input->post('nama_kegiatan');
        $deskripsi 	    = $this->input->post('deskripsi');
        $tgl_mulai   	= $this->input->post('tgl_mulai');
        $tgl_akhir 	    = $this->input->post('tgl_akhir');
        $lokasi 	    = $this->input->post('lokasi');
		$status 	    = $this->input->post('status');

		$data = array('id'		      => $id,
                      'nama_kegiatan' => $nama_kegiatan,
					  'deskripsi'	  => $deskripsi,
					  'tgl_mulai'	  => $tgl_mulai,
                      'tgl_akhir'	  => $tgl_akhir,
                      'lokasi'  	  => $lokasi,
					  'status'		  => $status);
		$this->db->insert('t_kegiatan',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu Sejarah, Pada Tahun = <b>".$nama_kegiatan."</b>...");

		redirect('admin/kegiatan');
	}

	public function edit_kegiatan($id){
		
		$nama_kegiatan 	= $this->input->post('nama_kegiatan');
        $deskripsi 	    = $this->input->post('deskripsi');
        $tgl_mulai   	= $this->input->post('tgl_mulai');
        $tgl_akhir 	    = $this->input->post('tgl_akhir');
        $lokasi 	    = $this->input->post('lokasi');
		$status 	    = $this->input->post('status');

		$data = array(
                      'nama_kegiatan' => $nama_kegiatan,
					  'deskripsi'	  => $deskripsi,
					  'tgl_mulai'	  => $tgl_mulai,
                      'tgl_akhir'	  => $tgl_akhir,
                      'lokasi'  	  => $lokasi,
					  'status'		  => $status);

        
        $this->db->where("id",$id);
		$this->db->update('t_kegiatan',$data);

		$this->session->set_flashdata("success","<b>UPDATE</b>.. Menambahkan Data Pada Menu Kegiatan, Pada Tahun = <b>".$tahun."</b>...");

		redirect('admin/kegiatan');
	}

	public function delete_kegiatan($id){

		$this->db->where('id',$id);
		$this->db->delete('t_kegiatan');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Berhasil Menghapus Data Kegiatan ");

		redirect('admin/kegiatan');
	}
    
}
