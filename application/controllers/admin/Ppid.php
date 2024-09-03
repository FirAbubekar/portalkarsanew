<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PPID extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// cek session login
		if ($this->session->userdata('username') == "") {
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

		$this->data['a_ppid'] 		= 'active';

		$akun = $this->db->get('t_ppid2');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status', 'Aktif');
		$akun = $this->db->get('t_ppid2');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status', 'Tidak Aktif');
		$akun = $this->db->get('t_ppid2');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['ppid'] = $this->db->get('t_ppid2');

		$this->load->view('admin/ppid/tabel_ppid', $this->data);
	}

	public function save_regulasi()
	{
		date_default_timezone_set("Asia/Jakarta");
		$id_ppid	= "PPID" . date('YmdHis');
		$kategori 	= $this->input->post('kategori_regulasi');
		$judul   	= $this->input->post('judul_regulasi');
		$deskripsi 	= $this->input->post('deskripsi_regulasi');
		$status 	= $this->input->post('status_regulasi');

		$config['upload_path']          = 'file/ppid/regulasi/';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;

		$gambar = substr($_FILES['gambar_regulasi']['name'], -4);
		$gambar = str_replace(' ', '_', $id_ppid . "" . $gambar);
		$config['file_name'] 			= $id_ppid;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar_regulasi')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = array('upload_data' => $this->upload->data());
		}

		$data		= array(
			'id_ppid'		=> $id_ppid,
			'kategori'		=> "Regulasi",
			'subkategori'	=> $kategori,
			'judul'			=> $judul,
			'deskripsi'		=> $deskripsi,
			'file'			=> $gambar,
			'status'		=> $status
		);

		$this->db->insert('t_ppid2', $data);

		redirect('admin/ppid');
	}

	public function save_profil()
	{
		date_default_timezone_set("Asia/Jakarta");
		$id_ppid	= "PPID" . date('YmdHis');
		$kategori 	= $this->input->post('kategori_profil');
		$judul   	= $this->input->post('judul_profil');
		$deskripsi 	= $this->input->post('deskripsi_profil');
		$status 	= $this->input->post('status_profil');

		$config['upload_path']          = 'file/ppid/profil/';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;

		$gambar = substr($_FILES['gambar_profil']['name'], -4);
		$gambar = str_replace(' ', '_', $id_ppid . "" . $gambar);
		$config['file_name'] 			= $id_ppid;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar_profil')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = array('upload_data' => $this->upload->data());
		}

		$data		= array(
			'id_ppid'		=> $id_ppid,
			'kategori'		=> "Profil",
			'subkategori'	=> $kategori,
			'judul'			=> $judul,
			'deskripsi'		=> $deskripsi,
			'file'			=> $gambar,
			'status'		=> $status
		);

		$this->db->insert('t_ppid2', $data);

		redirect('admin/ppid');
	}

	public function save_pelinfo()
	{
		date_default_timezone_set("Asia/Jakarta");
		$id_ppid	= "PPID" . date('YmdHis');
		$kategori 	= $this->input->post('kategori_pelinfo');
		$judul   	= $this->input->post('judul_pelinfo');
		$deskripsi 	= $this->input->post('deskripsi_pelinfo');
		$status 	= $this->input->post('status_pelinfo');

		$config['upload_path']          = 'file/ppid/pelayananinformasi/';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;

		$gambar = substr($_FILES['gambar_pelinfo']['name'], -4);
		$gambar = str_replace(' ', '_', $id_ppid . "" . $gambar);
		$config['file_name'] 			= $id_ppid;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar_pelinfo')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = array('upload_data' => $this->upload->data());
		}

		$data		= array(
			'id_ppid'		=> $id_ppid,
			'kategori'		=> "Pelayanan_Informasi",
			'subkategori'	=> $kategori,
			'judul'			=> $judul,
			'deskripsi'		=> $deskripsi,
			'file'			=> $gambar,
			'status'		=> $status
		);

		$this->db->insert('t_ppid2', $data);

		redirect('admin/ppid');
	}

	public function save_infopub()
	{
		date_default_timezone_set("Asia/Jakarta");
		$id_ppid	= "PPID" . date('YmdHis');
		$kategori 	= $this->input->post('kategori_infopub');
		$judul   	= $this->input->post('judul_infopub');
		$deskripsi 	= $this->input->post('deskripsi_infopub');
		$status 	= $this->input->post('status_infopub');

		$config['upload_path']          = 'file/ppid/informasipublik/';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;

		$gambar = substr($_FILES['gambar_infopub']['name'], -4);
		$gambar = str_replace(' ', '_', $id_ppid . "" . $gambar);
		$config['file_name'] 			= $id_ppid;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar_infopub')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = array('upload_data' => $this->upload->data());
		}

		$data		= array(
			'id_ppid'		=> $id_ppid,
			'kategori'		=> "Informasi_Publik",
			'subkategori'	=> $kategori,
			'judul'			=> $judul,
			'deskripsi'		=> $deskripsi,
			'file'			=> $gambar,
			'status'		=> $status
		);

		$this->db->insert('t_ppid2', $data);

		redirect('admin/ppid');
	}

	public function save_galeri()
	{
		date_default_timezone_set("Asia/Jakarta");
		$id_ppid	= "PPID" . date('YmdHis');
		$kategori 	= $this->input->post('kategori_ppid');
		$judul   	= $this->input->post('judul_ppid');
		$deskripsi 	= $this->input->post('deskripsi_ppid');
		$status 	= $this->input->post('status_ppid');

		$config['upload_path']          = 'file/ppid/galeri/';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|jpeg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;
		$this->load->library('upload', $config);

		$jumlah_berkas = count($_FILES['gambar_ppid']['name']);
		if($jumlah_berkas==0){

		}else{
		for($i = 0; $i < $jumlah_berkas;$i++)
		{
			
            if(!empty($_FILES['gambar_ppid']['name'][$i])){
 
				$_FILES['file']['name'] = $_FILES['gambar_ppid']['name'][$i];
				$_FILES['file']['type'] = $_FILES['gambar_ppid']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['gambar_ppid']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['gambar_ppid']['error'][$i];
				$_FILES['file']['size'] = $_FILES['gambar_ppid']['size'][$i];
	   
				$this->load->library('upload', $config);
				$rest = substr($_FILES['gambar_ppid']['name'][$i], -4);
				if($rest=="jpeg"||$rest=="JPEG"){
				$rest = substr($_FILES['gambar_ppid']['name'][$i], -5);    
				}
				
				$filenew = $id_ppid."-".($i+1)."".$rest;
				$_FILES['file']['name'] =  $filenew;

				if (!$this->upload->do_upload('file')) {
					// echo "ini";
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				} else {
					$uploadData = $this->upload->data();
				}
			}

			$datagaleri = array(
				'id_ppid'=>$id_ppid,
				'gambar'=>$filenew
			);
			
			$this->db->insert('detail_ppid',$datagaleri);
		}
	}
		
		$data		= array(
			'id_ppid'		=> $id_ppid,
			'kategori'		=> "Galeri",
			'subkategori'	=> $kategori,
			'judul'			=> $judul,
			'deskripsi'		=> $deskripsi,
			'file'			=> '',
			'status'		=> $status
		);

		$this->db->insert('t_ppid2', $data);
		
		
		redirect('admin/ppid');
	}


	public function update_ppid($id){
		$this->db->where('id_ppid',$id);
		$dbppid = $this->db->get('t_ppid2')->row();

			date_default_timezone_set("Asia/Jakarta");
			
			$kategori 	= $this->input->post('kategori');
			$kategori = strtolower(str_replace('_','',$kategori));
			$subkategori= $this->input->post('subkategori');
			$judul   	= $this->input->post('judul');
			$deskripsi 	= $this->input->post('deskripsi');
			$status 	= $this->input->post('status');	
			
			if($_FILES['gambar_edit']['name']==""){
				if($dbppid->file!=null){
					$gambar = $dbppid->file;
				}
			}
			else{
			$config['upload_path']          = 'file/ppid/'.$kategori;
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;
			if($dbppid->file!=""){
				unlink('file/ppid/'.$kategori.'/'.$dbppid->file);    
				}
				$gambar = substr($_FILES['gambar_edit']['name'], -4);
				$gambar = str_replace(' ', '_', $id . "" . $gambar);
				$config['file_name'] 			= $id;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload('gambar_edit')) {
					$error = array('error' => $this->upload->display_errors());
				} else {
					$data = array('upload_data' => $this->upload->data());
				}
			}
// echo $gambar;
			$dataupdate		= array(
				'subkategori'	=> $subkategori,
				'judul'			=> $judul,
				'deskripsi'		=> $deskripsi,
				'file'			=> $gambar,
				'status'		=> $status
			);

			$this->db->where('id_ppid',$id);
			$this->db->update('t_ppid2',$dataupdate);

			$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu Berita, Dengan Judul  = <b>".$judul."</b>...");

			redirect('admin/ppid');
		}

	public function save()
	{
		$this->load->library('upload');
		$judul   	= $this->input->post('judul');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');
		$menu 		= $this->input->post('menu');
		$submenu 	= $this->input->post('submenu');

		$file = $judul;

		$uploadPath = mkdir('file/ppid/' . strtolower(str_replace(' ', '_', $file)));
		$number_of_files = count($_FILES['gambar']['name']);

		$layanan = strtolower(str_replace(' ', '-', $file));

		$this->db->limit('1');
		$this->db->order_by('id', 'desc');
		$dbppid = $this->db->get('t_ppid')->row();

		// for ($i=0; $i < $number_of_files; $i++) { 

		// 	$imageData = $this->upload->data();
		// 	$gambar = substr($_FILES['gambar']['name'][$i],-4);
		// 	$gambar = strtolower(str_replace(' ','_',$file."".$i."".$gambar));	

		// 	$_FILES['file']['name']       = $gambar;
		//     $_FILES['file']['type']       = $_FILES['gambar']['type'][$i];
		//     $_FILES['file']['tmp_name']   = $_FILES['gambar']['tmp_name'][$i];
		//     $_FILES['file']['error']      = $_FILES['gambar']['error'][$i];
		// 	$_FILES['file']['size']       = $_FILES['gambar']['size'][$i];

		//     $config['upload_path'] = 'file/ppid/'.strtolower(str_replace(' ','_',$file));
		//     $config['allowed_types'] = 'jpg|jpeg|png|gif';

		//     $this->load->library('upload', $config);
		//     $this->upload->initialize($config);

		//     if($this->upload->do_upload('file')){

		// 		$imageData['file_name'][$i] = strtolower($file);
		//         $uploadImgData[$i]['gambar'] = $imageData['file_name'][$i];

		//     }

		// $data1 = array('id_ppid'	=> $dbppid->id,
		// 			   'gambar'			=> $gambar		
		// 			 );
		// $this->db->insert('detail_pelayanan',$data1);
		// }

		// $config['upload_path']          = 'file/ppid';
		// $config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 4000;
		// $config['max_height']           = 4000;

		// $gambar = substr($_FILES['gambar']['name'],-4);
		// $gambar = strtolower(str_replace(' ','_',$judul."".$gambar));
		// $config['file_name'] 			= strtolower($judul);
		// $this->load->library('upload', $config);

		// if ( !$this->upload->do_upload('gambar')){
		// 	$error = array('error' => $this->upload->display_errors());
		// }else{
		// 	$data = array('upload_data' => $this->upload->data());
		// }

		$data		= array(
			'judul'			=> $judul,
			'deskripsi'		=> $deskripsi,
			'menu'			=> $menu,
			'submenu'		=> $submenu,
			'status'		=> $status
		);

		$this->db->insert('t_ppid', $data);

		$this->session->set_flashdata("success", "<b>SAVE</b>.. Menambahkan Data Pada Menu Perpustakaan, Dengan Nama File  = <b>" . $judul . "</b>...");

		redirect('admin/ppid');
	}

	public function edit_ppid($id){
		$this->data['title'] = "Admin | RSU Karsa Husada";

		$datas['username'] = $this->session->userdata('username');

		$this->data['a_ppid'] 		= 'active';

		$this->db->where('id_ppid',$id);
		$this->data['ppid'] = $this->db->get('t_ppid2')->row();

		$this->load->view('admin/ppid/edit_ppid', $this->data);
	}

	public function edit($id)
	{

		$this->db->where('id', $id);
		$dbppid		= $this->db->get('t_ppid')->row();

		$judul   	= $this->input->post('judul');
		$deskripsi 	= $this->input->post('deskripsi');
		$status 	= $this->input->post('status');

		$config['upload_path']          = 'file/ppid';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 4000;
		$config['max_height']           = 4000;

		if ($_FILES['gambar']['name'] == null) {
			if ($dbppid->gambar != null) {
				$gambar = $dbppid->gambar;
			}
		} else {
			unlink('file/ppid/' . $dbppid->gambar);
			$gambar = substr($_FILES['gambar']['name'], -4);
			$gambar = strtolower(str_replace(' ', '_', $judul . "" . $gambar));
			$config['file_name'] 			= strtolower($judul);
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$error = array('error' => $this->upload->display_errors());
			} else {

				$data = array('upload_data' => $this->upload->data());
			}
		}

		$data		= array(
			'judul'			=> $judul,
			'deskripsi'		=> $deskripsi,
			'gambar'		=> $gambar,
			'status'		=> $status
		);


		$this->db->where('id', $id);
		$this->db->update('t_ppid', $data);

		$this->session->set_flashdata("update", "<b>UPDATE</b>.. Merubah Data Pada Menu Perpustakaan, Dengan Nama File  = <b>" . $nama_file . "</b>...");

		redirect('admin/ppid');
	}

	public function form()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";

		$datas['username'] = $this->session->userdata('username');

		$this->data['a_ppid'] 		= 'active';

		$akun = $this->db->get('t_pengaduanppid');

		$this->data['ppid'] = $this->db->get('t_pengaduanppid');
		$this->load->view('admin/ppid/tabel_formppid', $this->data);
	}

	public function getdetail()
	{
		$id_pengaduan = $this->input->post('id_pengaduan');

		$this->db->where('id_pengaduan', $id_pengaduan);
		$getdetail = $this->db->get('t_pengaduanppid')->row();

		echo json_encode($getdetail);
	}

	public function delete($id, $kategori)
	{
		$this->db->where('id_ppid', $id);
		$dbberita = $this->db->get('t_ppid2')->row();
		if ($dbberita->file != "") {
			$subfile = "";
			if ($kategori == "Regulasi") {
				$subfile = "regulasi";
			} elseif ($kategori == "Profil") {
				$subfile = "profil";
			} elseif ($kategori == "Pelayanan_Informasi") {
				$subfile = "pelayananinformasi";
			} elseif ($kategori == "Informasi_Publik") {
				$subfile = "informasipublik";
			}
			unlink('file/ppid/' . $subfile . '/' . $dbberita->file);
		}

		$this->db->where('id_ppid', $id);
		$this->db->delete('t_ppid2');

		$this->session->set_flashdata("delete", "<b>DELETE</b>.. Menghapus Data Pada Menu Perpustakaan");

		redirect('admin/ppid');
	}

	public function delete_galeri($id)
	{
		$this->db->where('id_ppid', $id);
		$getgambar = $this->db->get('detail_ppid')->result();
		$no=1;
		foreach ($getgambar as $key) {
			unlink('file/ppid/galeri/' . $key->gambar);
		}

		$this->db->where('id_ppid', $id);
		$this->db->delete('t_ppid2');

		$this->db->like('id_ppid', $id);
		$this->db->delete('detail_ppid');

		$this->session->set_flashdata("delete", "<b>DELETE</b>.. Menghapus Data Pada Menu Perpustakaan");

		redirect('admin/ppid');
	}

	public function Permohonan_informasi(){
		$this->data['title'] = "Admin | RSU Karsa Husada";

		$datas['username'] = $this->session->userdata('username');

		$this->data['a_ppid'] 		= 'active';

		$akun = $this->db->get('t_pengaduanppid');

		$this->data['ppid'] = $this->db->get('t_permohonanppid');
		$this->load->view('admin/ppid/tabel_permohonan_informasi', $this->data);
	}

	public function getdetail_permohonan_informasi(){
		$kdPermohonan = $this->input->post('kdPermohonan');

		$this->db->where('kdPermohonan', $kdPermohonan);
		$getdetail = $this->db->get('t_permohonanppid')->row();

		echo json_encode($getdetail);
	}

	public function pengajuan_keberatan(){
		$this->data['title'] = "Admin | RSU Karsa Husada";

		$datas['username'] = $this->session->userdata('username');

		$this->data['a_ppid'] 		= 'active';

		$akun = $this->db->get('t_pengaduanppid');

		$this->data['ppid'] = $this->db->get('t_pengajuanppid');
		$this->load->view('admin/ppid/tabel_pengajuan_keberatan', $this->data);
	}

	public function getdetail_pengajuan_keberatan(){
		$kdPengajuan = $this->input->post('kdPengajuan');

		$this->db->where('kdPengajuan', $kdPengajuan);
		$getdetail = $this->db->get('t_pengajuanppid')->row();

		echo json_encode($getdetail);
	}
}
