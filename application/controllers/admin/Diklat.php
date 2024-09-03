<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diklat extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// cek session login
		$this->username = $this->session->userdata('username');
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

	public function pendidikan()
	{
		$this->data['title'] = "Admin | RSUD Karsa Husada";

		$datas['username'] = $this->session->userdata('username');

		$this->data['a_diklat']		= 'active';

		$this->data['total'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PENDIDIKAN' 
		")->num_rows();
		// $this->data['total'] = $akun->num_rows();

		$this->data['aktif'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PENDIDIKAN' AND
				t_kontendiklat.status = 'AKTIF' 
		")->num_rows();

		$this->data['nonaktif'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PENDIDIKAN' AND
				t_kontendiklat.status = 'TIDAK AKTIF' 
		")->num_rows();

		$this->data['hasil'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten,
				t_kontendiklat.judul,
				t_kontendiklat.sub_judul,
				t_kontendiklat.deskripsi,
				t_kontendiklat.file_pendukung,
				t_kontendiklat.google_drive,
				t_kontendiklat.`status`,
				t_kontendiklat.createdDate,
				t_kontendiklat.userCreated,
				t_kontendiklat.menu,
				t_kontendiklat.sub_menu 
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PENDIDIKAN' 
			ORDER BY
				t_kontendiklat.tanggal DESC
		")->result();

		$this->load->view('admin/diklat/tabel_pendidikan', $this->data);
	}

    public function pelatihan()
	{
		$this->data['title'] = "Admin | RSUD Karsa Husada";

		$datas['username'] = $this->session->userdata('username');

		$this->data['a_diklat']		= 'active';


		$this->data['total'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PELATIHAN' 
		")->num_rows();
		// $this->data['total'] = $akun->num_rows();

		$this->data['aktif'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PELATIHAN' AND
				t_kontendiklat.status = 'AKTIF' 
		")->num_rows();

		$this->data['nonaktif'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PELATIHAN' AND
				t_kontendiklat.status = 'TIDAK AKTIF' 
		")->num_rows();

		$this->data['hasil'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten,
				t_kontendiklat.judul,
				t_kontendiklat.sub_judul,
				t_kontendiklat.deskripsi,
				t_kontendiklat.file_pendukung,
				t_kontendiklat.google_drive,
				t_kontendiklat.`status`,
				t_kontendiklat.createdDate,
				t_kontendiklat.userCreated,
				t_kontendiklat.menu,
				t_kontendiklat.sub_menu 
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PELATIHAN' 
			ORDER BY
				t_kontendiklat.tanggal DESC
		")->result();

		$this->load->view('admin/diklat/tabel_pelatihan', $this->data);
	}

    public function penelitian()
	{
		$this->data['title'] = "Admin | RSUD Karsa Husada";

		$datas['username'] = $this->session->userdata('username');

		$this->data['a_admin']		= 'active';

		$this->data['total'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PENELITIAN' 
		")->num_rows();
		// $this->data['total'] = $akun->num_rows();

		$this->data['aktif'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PENELITIAN' AND
				t_kontendiklat.status = 'AKTIF' 
		")->num_rows();

		$this->data['nonaktif'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PENELITIAN' AND
				t_kontendiklat.status = 'TIDAK AKTIF' 
		")->num_rows();

		$this->data['hasil'] = $this->db->query("
			SELECT
				t_kontendiklat.id_konten,
				t_kontendiklat.judul,
				t_kontendiklat.sub_judul,
				t_kontendiklat.deskripsi,
				t_kontendiklat.file_pendukung,
				t_kontendiklat.google_drive,
				t_kontendiklat.`status`,
				t_kontendiklat.createdDate,
				t_kontendiklat.userCreated,
				t_kontendiklat.menu,
				t_kontendiklat.sub_menu 
			FROM
				t_kontendiklat 
			WHERE
				t_kontendiklat.menu = 'PENELITIAN' 
			ORDER BY
				t_kontendiklat.tanggal DESC
		")->result();


		$this->data['ppid'] = $this->db->get('t_ppid2');

		$this->load->view('admin/diklat/tabel_penelitian', $this->data);
	}

    public function save()
	{
		$this->load->library('upload');
		date_default_timezone_set("Asia/Jakarta");
		$id_diklat	= "DIKLAT" .date('YmdHis');
		$kategori 	= $this->input->post('kategori');

        if($kategori==null){
            $kategori 	= $this->input->post('tambahkategori');
        }

		$menu   	= $this->input->post('menu');
		$kategori   = $this->input->post('kategori');
		$judul   	= $this->input->post('judul');
        $subjudul   = $this->input->post('subjudul');
		$tanggal   	= $this->input->post('tanggal');
		$deskripsi 	= $this->input->post('deskripsi');
        $googledrive= $this->input->post('googledrive');
		$status 	= $this->input->post('status');
		
		$menus = strtolower($menu);
		$uploadPath = mkdir('file/diklat/'.$menus.'/'.$id_diklat);
		$number_of_files = count($_FILES['gambar']['name']); 


		// $config['upload_path']          = 'file/diklat/'.$menu.'/';
		// $config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 20000;
		// $config['max_height']           = 20000;

		for ($i=0; $i < $number_of_files; $i++) { 

			$imageData = $this->upload->data();
			$gambar = substr($_FILES['gambar']['name'][$i],-4);
			if($gambar=="jpeg"){
				$gambar = substr($_FILES['gambar']['name'][$i],-5);
			}
			$gambar = strtolower(str_replace(' ','_',$id_diklat."".$i."".$gambar));
				
			$_FILES['file']['name']       = $gambar;
			
            $_FILES['file']['type']       = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['gambar']['error'][$i];
			$_FILES['file']['size']       = $_FILES['gambar']['size'][$i];
			
            $config['upload_path'] = 'file/diklat/'.$menus.'/'.$id_diklat;
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|docx';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){
				
				$imageData['file_name'][$i] = strtolower($id_diklat);
                $uploadImgData[$i]['gambar'] = $imageData['file_name'][$i];

            }

			$data		= array(
				'id_diklat'	=> $id_diklat,
				'file'		=> $gambar,
				'status'	=> "aktif"
			);

			$this->db->insert('t_detaildiklat', $data);
		}

		$data		= array(
			'id_konten'		=> $id_diklat,
			'judul'		    => $judul,
			'sub_judul'	    => $subjudul,
			'deskripsi'		=> $deskripsi,
			'tanggal'		=> $tanggal,
			'file_pendukung'=> $gambar,
            'google_drive'	=> $googledrive,
            'createdDate'	=> date('Y-m-d H:i:s'),
            'userCreated'	=> $this->username,
			'sub_menu'		=> $kategori,
            'menu'			=> $menu,
			'status'		=> $status
		);

		$this->db->insert('t_kontendiklat', $data);

		redirect('admin/diklat/pendidikan');
	}

	public function delete_konten(){
		$id_konten = $this->input->post('id_konten');

		$this->db->where('id_konten',$id_konten);
		$delete = $this->db->delete('t_kontendiklat');
	}

}
