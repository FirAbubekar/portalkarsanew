<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
			$this->data['a_inovasi']		= '';
			$this->data['a_kegiatan']		= '';
			$this->data['a_penelitian']		= '';
			$this->data['a_akun']			= '';
			$this->data['a_admin']		= '';
		}
	}

	public function sejarah()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";

        $datas['username'] = $this->session->userdata('username');

		$this->data['a_profil'] 		= 'active';
		$this->data['a_sejarah'] 		= 'active';

		$this->db->order_by('tahun','asc');
		$this->data['sejarah'] = $this->db->get('t_sejarah');

		$this->load->view('admin/sejarah/tabel_sejarah',$this->data);
	}

	public function save_sejarah(){
		$tahun 		= $this->input->post('tahun');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

		$config['upload_path']          = 'file/sejarah';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|jpeg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;
			
		$gambar = substr($_FILES['gambar']['name'],-4);
		if($gambar=="JPEG"||$gambar=="jpeg"){
		    $gambar = substr($_FILES['gambar']['name'],-5);
		}
		$gambar = strtolower(str_replace(' ','_',$tahun."".$gambar));
		$config['file_name'] 			= strtolower($tahun);
			
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' => $this->upload->data());
		}

		$data = array('tahun'		=> $tahun,
					  'deskripsi'	=> $deskripsi,
					  'gambar'		=> $gambar,
					  'status'		=> $status);
		$this->db->insert('t_sejarah',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu Sejarah, Pada Tahun = <b>".$tahun."</b>...");

		redirect('admin/profil/sejarah');
	}

	public function edit_sejarah($id){
		
		$this->db->where('id',$id);
		$dbsejarah = $this->db->get('t_sejarah')->row();

		$tahun 		= $this->input->post('tahun');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

		$config['upload_path']          = 'file/sejarah';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|jpeg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;
			
		if($_FILES['gambar']['name']==null){
			if($dbsejarah->gambar!=null){
				$gambar = $dbsejarah->gambar;
			}
		}
		else{
			unlink('file/sejarah/'.$dbsejarah->gambar);
			$gambar = substr($_FILES['gambar']['name'],-4);
			if($gambar=="JPEG"||$gambar=="jpeg"){
				$gambar = substr($_FILES['gambar']['name'],-5);
			}
			$gambar = strtolower(str_replace(' ','_',$tahun."".$gambar));
			$config['file_name'] 			= strtolower($tahun);
			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$data = array('upload_data' => $this->upload->data());
			}
		}

		$data = array('tahun'		=> $tahun,
					  'deskripsi'	=> $deskripsi,
					  'gambar'		=> $gambar,
					  'status'		=> $status);

		$this->db->where('id',$id);
		$this->db->update('t_sejarah',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu Sejarah, Pada Tahun  = <b>".$tahun."</b>...");

		redirect('admin/profil/sejarah');
	}

	public function delete_sejarah($id){

		$this->db->where('id',$id);
		$dbsejarah = $this->db->get('t_sejarah')->row();

		if($dbsejarah->gambar!=null){
			unlink('file/sejarah/'.$dbsejarah->gambar);
		}
		
		$this->db->where('id',$id);
		$this->db->delete('t_sejarah');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Sejarah ");

		redirect('admin/profil/sejarah');
	}

	public function visimisi()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";

        $datas['username'] = $this->session->userdata('username');
		
		$this->data['a_profil'] 		= 'active';
		$this->data['a_visi'] 		= 'active';

		$this->db->order_by('');
		$this->data['profil'] = $this->db->get('t_profil');

		$this->load->view('admin/visimisi/tabel_visimisi',$this->data);
	}

	public function save_visimisi(){
		$judul 		= $this->input->post('judul');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

		$data = array('judul'		=> $judul,
					  'deskripsi'	=> $deskripsi,
					  'status'		=> $status);
		$this->db->insert('t_profil',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu Visi Misi, Dengan Judul = <b>".$judul."</b>...");

		redirect('admin/profil/visimisi');
	}

	public function edit_visimisi($id){
		$judul 		= $this->input->post('judul');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

		$data = array('judul'		=> $judul,
					  'deskripsi'	=> $deskripsi,
					  'status'		=> $status);
		$this->db->where('id',$id);
		$this->db->update('t_profil',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu Visi Misi, Dengan Judul  = <b>".$judul."</b>...");

		redirect('admin/profil/visimisi');
	}

	public function delete_visimisi($id){
		
		$this->db->where('id',$id);
		$this->db->delete('t_profil');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Visi Misi ");

		redirect('admin/profil/visimisi');
	}
	
		public function tugasfungsi()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";

        $datas['username'] = $this->session->userdata('username');
		
		$this->data['a_dashboard']	= '';
		$this->data['a_profil'] 		= 'active';
		$this->data['a_tugasfungsi'] 		= 'active';
		

		$this->db->order_by('');
		$this->data['tugasfungsi'] = $this->db->get('t_tugasfungsi');

		$this->load->view('admin/tugasfungsi/tabel_tugasfungsi',$this->data);
	}

	public function save_tugasfungsi(){
		date_default_timezone_set("Asia/Jakarta");
		$id	= "TF" . date('YmdHis');
		$judul 		= $this->input->post('judul');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

		$data = array('id_tugasfungsi'=> $id,
					  'subjudul'	=> $judul,
					  'deskripsi'	=> $deskripsi,
					  'status'		=> $status);
		$this->db->insert('t_tugasfungsi',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu Visi Misi, Dengan Judul = <b>".$judul."</b>...");

		redirect('admin/profil/tugasfungsi');
	}

	public function edit_tugasfungsi($id){
		$judul 		= $this->input->post('judul');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

		$data = array('subjudul'		=> $judul,
					  'deskripsi'	=> $deskripsi,
					  'status'		=> $status);
		$this->db->where('id_tugasfungsi',$id);
		$this->db->update('t_tugasfungsi',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu Visi Misi, Dengan Judul  = <b>".$judul."</b>...");

		redirect('admin/profil/tugasfungsi');
	}

	public function delete_tugasfungsi($id){
		
		$this->db->where('id_tugasfungsi',$id);
		$this->db->delete('t_tugasfungsi');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Visi Misi ");

		redirect('admin/profil/tugasfungsi');
	}

	public function sdm()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";

        $datas['username'] = $this->session->userdata('username');

		$this->data['a_profil'] 		= 'active';
		$this->data['a_sdm'] 			= 'active';

		$this->data['sdm'] = $this->db->get('t_sdm');

		$this->load->view('admin/sdm/tabel_sdm',$this->data);
	}

		public function save_sdm(){
		$jenis 		= $this->input->post('jenis');
		$jumlah 	= $this->input->post('jumlah');
		$status 	= $this->input->post('status');
		$pns 	 	= $this->input->post('pns');
		$blud	 	= $this->input->post('blud');
		$mou	 	= $this->input->post('mou');
		$kontrak 	= $this->input->post('kontrak');
		$s2 		= $this->input->post('s2');
		$s1		 	= $this->input->post('s1');
		$d4		 	= $this->input->post('d4');
		$d3		 	= $this->input->post('d3');
		$d2		 	= $this->input->post('d2');
		$d1		 	= $this->input->post('d1');
		$sma	 	= $this->input->post('sma');

		$data = array('jenis'		=> $jenis,
					  'jumlah'		=> $jumlah,
					  'pns'			=> $pns,
					  'blud'		=> $blud,
					  'mou'			=> $mou,
					  'kontrak'		=> $kontrak,
					  's2'			=> $s2,
					  's1'			=> $s1,
					  'd4'			=> $d4,
					  'd3'			=> $d3,
					  'd2'			=> $d2,
					  'd1'			=> $d1,
					  'sma'			=> $sma,
					  'status'		=> $status);
		$this->db->insert('t_sdm',$data);

		redirect('admin/profil/sdm');
	}

	public function edit_sdm($id){
		$jenis 		= $this->input->post('jenis');
		$jumlah 	= $this->input->post('jumlah');
		$status 	= $this->input->post('status');
		$pns 	 	= $this->input->post('pns');
		$blud	 	= $this->input->post('blud');
		$mou	 	= $this->input->post('mou');
		$kontrak 	= $this->input->post('kontrak');
		$s2 		= $this->input->post('s2');
		$s1		 	= $this->input->post('s1');
		$d4		 	= $this->input->post('d4');
		$d3		 	= $this->input->post('d3');
		$d2		 	= $this->input->post('d2');
		$d1		 	= $this->input->post('d1');
		$sma	 	= $this->input->post('sma');

		$data = array('jenis'		=> $jenis,
					  'jumlah'		=> $jumlah,
					  'pns'			=> $pns,
					  'blud'		=> $blud,
					  'mou'			=> $mou,
					  'kontrak'		=> $kontrak,
					  's2'			=> $s2,
					  's1'			=> $s1,
					  'd4'			=> $d4,
					  'd3'			=> $d3,
					  'd2'			=> $d2,
					  'd1'			=> $d1,
					  'sma'			=> $sma,
					  'status'		=> $status);
		$this->db->where('id',$id);
		$this->db->update('t_sdm',$data);

		redirect('admin/profil/sdm');
	}

	public function delete_sdm($id){
		
		$this->db->where('id',$id);
		$this->db->delete('t_sdm');

		redirect('admin/profil/sdm');
	}
	
	public function struktur()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";
		
        $datas['username'] = $this->session->userdata('username');

		$this->data['a_profil'] 		= 'active';
		$this->data['a_organisasi'] 	= 'active';

		$this->db->order_by('urutan','asc');
		$this->data['struktur'] = $this->db->get('detail_struktur');

		$this->load->view('admin/struktur/tabel_struktur',$this->data);
    }

    public function save_struktur(){
		$nama 		= $this->input->post('nama');
		$jabatan 	= $this->input->post('jabatan');
		$urutan 	= $this->input->post('urutan');
		$status 	= $this->input->post('status');

		$config['upload_path']          = 'file/struktur';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|jpeg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;
			
		$gambar = substr($_FILES['gambar']['name'],-4);
		if($gambar=="JPEG"||$gambar=="jpeg"){
			$gambar = substr($_FILES['gambar']['name'],-5);
		}
		$namas = str_replace('.', '_', $nama);
		$gambar = strtolower(str_replace(' ','_',$namas	."".$gambar));
		$config['file_name'] 			= strtolower($namas);
			
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' => $this->upload->data());
		}

		$data = array('nama'	=> $nama,
					  'jabatan'	=> $jabatan,
					  'urutan'	=> $urutan,
					  'gambar'	=> $gambar,
					  'status'	=> $status);
		$this->db->insert('detail_struktur',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu Struktur, Dengan Nama = <b>".$nama."</b>...");

		redirect('admin/profil/struktur');
	}

	public function edit_struktur($id){

		$this->db->where('id',$id);
		$dbstruktur = $this->db->get('detail_struktur')->row();

		$nama 		= $this->input->post('nama');
		$jabatan 	= $this->input->post('jabatan');
		$urutan 	= $this->input->post('urutan');
		$status 	= $this->input->post('status');

		$config['upload_path']          = 'file/struktur';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|jpeg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10000;
		$config['max_height']           = 10000;
			
		if($_FILES['gambar']['name']==null){
			if($dbstruktur->gambar!=null){
				$gambar = $dbstruktur->gambar;
			}
		}
		else{
			unlink('file/struktur/'.$dbstruktur->gambar);
			$gambar = substr($_FILES['gambar']['name'],-4);
			if($gambar=="JPEG"||$gambar=="jpeg"){
				$gambar = substr($_FILES['gambar']['name'],-5);
			}
			$namas = str_replace('.', '_', $nama);
			$gambar = strtolower(str_replace(' ','_',$namas."".$gambar));
			$config['file_name'] 			= strtolower($namas);
			$this->load->library('upload', $config);

			if ( !$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$data = array('upload_data' => $this->upload->data());
			}
		}

		$data = array('nama'	=> $nama,
					  'jabatan'	=> $jabatan,
					  'urutan'	=> $urutan,
					  'gambar'	=> $gambar,
					  'status'	=> $status);
		$this->db->where('id',$id);
		$this->db->update('detail_struktur',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu Struktur, Dengan Nama  = <b>".$nama."</b>...");

		redirect('admin/profil/struktur');
	}

	public function delete_struktur($id){

		$this->db->where('id',$id);
		$dbstruktur = $this->db->get('detail_struktur')->row();

		if($dbstruktur->gambar!=null){
			unlink('file/struktur/'.$dbstruktur->gambar);
		}
		
		$this->db->where('id',$id);
		$this->db->delete('detail_struktur');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Struktur ");

		redirect('admin/profil/struktur');
	}
    
}
