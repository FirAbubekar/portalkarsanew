<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// cek session login
		if ($this->session->userdata('username') == "") {
			redirect(base_url("admin/login"));
		} else {
			$this->data['a_dashboard']	= '';
			$this->data['a_profil'] 		= '';
			$this->data['a_visi'] 		= '';
			$this->data['a_sejarah'] 		= '';
			$this->data['a_tugasfungsi'] 		= '';
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
			$this->data['a_diklat']	= '';
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

	public function berita()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";
		$datas['username'] = $this->session->userdata('username');

		$this->data['a_informasi']	= 'active';
		$this->data['a_berita']		= 'active';

		$akun = $this->db->get('t_berita');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('posting', '1');
		$akun = $this->db->get('t_berita');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('posting', '0');
		$akun = $this->db->get('t_berita');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->db->order_by('tanggal', 'asc');
		$this->data['berita'] = $this->db->get('t_berita');

		$this->load->view('admin/berita/tabel_berita', $this->data);
	}

	public function add_berita()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";

		$this->data['a_informasi']	= 'active';
		$this->data['a_berita']		= 'active';

		if ($this->input->post('submit')) {
			date_default_timezone_set("Asia/Jakarta");

			$id			= "BRT" . date('YmdHis');
			$kategori 	= $this->input->post('kategori');
			if (strtolower($kategori) == 'video') {
				$kategori = "video";
			}
			$judul 		= $this->input->post('judul');
			$deskripsi 	= $this->input->post('deskripsi');
			$tanggal 	= $this->input->post('tanggal');
			$link 		= $this->input->post('link');
			$penulis 	= $this->input->post('penulis');
			$status 	= $this->input->post('status');

			$config['upload_path']          = 'file/berita';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|jpeg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			$gambar = substr($_FILES['gambar']['name'], -4);
			if ($gambar == "JPEG" || $gambar == "jpeg") {
				$gambar = substr($_FILES['gambar']['name'], -5);
			}
			$gambar = $id . "" . $gambar;
			$config['file_name'] 			= $id;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}

			$data = array(
				'id'			=> $id,
				'kategori' 	=> $kategori,
				'judul'		=> $judul,
				'tanggal'		=> date('Y-m-d', strtotime($tanggal)),
				'deskripsi'	=> $deskripsi,
				'image'		=> $gambar,
				'link'		=> $link,
				'penulis'		=> $penulis,
				'publikasi'	=> date('Y-m-d H:i:s'),
				'posting'		=> $status
			);

			$this->db->insert('t_berita', $data);

			$this->session->set_flashdata("success", "<b>SAVE</b>.. Menambahkan Data Pada Menu Berita, Dengan Judul  = <b>" . $judul . "</b>...");

			redirect('admin/informasi/berita');
		} else {
			$this->load->view('admin/berita/form_tambah_berita', $this->data);
		}
	}

	public function edit_berita($id)
	{

		$this->data['a_informasi']	= 'active';
		$this->data['a_berita']		= 'active';

		$this->data['title'] = "Admin | RSU Karsa Husada";

		if ($this->input->post('submit')) {

			$this->db->where('id', $id);
			$dbberita = $this->db->get('t_berita')->row();

			date_default_timezone_set("Asia/Jakarta");

			$kategori = $this->input->post('kategori');
			$judul = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');
			$tanggal = $this->input->post('tanggal');
			$penulis = $this->input->post('penulis');
			$status = $this->input->post('status');
			$link = $this->input->post('link');
			$gambar1	= $this->input->post('gambar1');

			if ($_FILES['gambar']['name'] == "") {
				if ($dbberita->image != null) {
					$gambar = $dbberita->image;
				}
			} else {
				$config['upload_path']          = 'file/berita';
				$config['allowed_types']        = 'pdf|docx|excel|jpg|jpeg|png';
				$config['max_size']             = 10000;
				$config['max_width']            = 20000;
				$config['max_height']           = 20000;
				if (unlink('file/berita/' . $dbberita->image) == false) {
				}

				$gambar = substr($_FILES['gambar']['name'], -4);
				if ($gambar == "JPEG" || $gambar == "jpeg") {
					$gambar = substr($_FILES['gambar']['name'], -5);
				}

				$gambar = $id . "" . $gambar;
				$config['file_name'] 			= $id;
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$error = array('error' => $this->upload->display_errors());
				} else {
					$data = array('upload_data' => $this->upload->data());
				}
			}

			$data = array(
				'kategori' 	=> $kategori,
				'judul'		=> $judul,
				'tanggal'		=> date('Y-m-d', strtotime($tanggal)),
				'deskripsi'	=> $deskripsi,
				'image'		=> $gambar,
				'penulis'		=> $penulis,
				'link'		=> $link,
				'publikasi'	=> date('Y-m-d H:i:s'),
				'posting'		=> $status
			);

			$this->db->where('id', $id);
			$this->db->update('t_berita', $data);

			$this->session->set_flashdata("update", "<b>UPDATE</b>.. Merubah Data Pada Menu Berita, Dengan Judul  = <b>" . $judul . "</b>...");

			redirect('admin/informasi/berita');
		} else {

			$this->db->where('id', $id);
			$this->data['berita'] = $this->db->get('t_berita')->row();

			$this->load->view('admin/berita/form_edit_berita', $this->data);
		}
	}

	public function delete_berita($id)
	{

		$this->db->where('id', $id);
		$dbberita = $this->db->get('t_berita')->row();
		if ($dbberita->image != null) {
			unlink('file/berita/' . $dbberita->image);
		}

		$this->db->where('id', $id);
		$this->db->delete('t_berita');

		$this->session->set_flashdata("delete", "<b>DELETE</b>.. Menghapus Data Pada Menu Berita");

		redirect('admin/informasi/berita');
	}

	public function ikm()
	{

		$this->data['title'] = "Admin | RSU Karsa Husada";

		$this->data['a_informasi']	= 'active';
		$this->data['a_ikm']			= 'active';

		$akun = $this->db->get('t_ikm');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status', '1');
		$akun = $this->db->get('t_ikm');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status', '0');
		$akun = $this->db->get('t_ikm');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['ikm'] = $this->db->get('t_ikm');
		$this->load->view('admin/ikm/tabel_ikm', $this->data);
	}

	public function save_ikm()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";

		if ($this->input->post('submit')) {

			$judul = $this->input->post('judul');
			$status = $this->input->post('status');
			//$gambar1	= $this->input->post('gambar1');

			$config['upload_path']          = 'file/ikm';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			$gambar = substr($_FILES['gambar']['name'], -4);
			$gambar = strtolower(str_replace(' ', '_', $judul . "" . $gambar));
			$config['file_name'] 			= strtolower($judul);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}

			$data = array(
				'judul' 		=> $judul,
				'gambar' 		=> $gambar,
				'status'		=> $status
			);

			$this->session->set_flashdata("success", "<b>SAVE</b>.. Menambahkan Data Pada Menu Indeks Kepuasan Mutu, Dengan Judul  = <b>" . $judul . "</b>...");

			$this->db->insert('t_ikm', $data);
			redirect('admin/informasi/ikm');
		}
	}

	public function edit_ikm($id)
	{
		if ($this->input->post('submit')) {

			$this->db->where('id', $id);
			$dbikm = $this->db->get('t_ikm')->row();

			$judul = $this->input->post('judul');
			$status = $this->input->post('status');
			$gambar1	= $this->input->post('gambar1');

			$config['upload_path']          = 'file/ikm';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			if ($_FILES['gambar']['name'] == null) {
				if ($dbalur->gambar != null) {
					$gambar = $dbalur->gambar;
				}
			} else {
				unlink('file/ikm/' . $dbikm->gambar);
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

			$data = array(
				'judul' 		=> $judul,
				'gambar' 		=> $gambar,
				'status'		=> $status
			);

			$this->session->set_flashdata("update", "<b>UPDATE</b>.. Merubah Data Pada Menu Indeks Kepuasan Mutu, Dengan Judul  = <b>" . $judul . "</b>...");

			$this->db->where('id', $id);
			$this->db->update('t_ikm', $data);
			redirect('admin/informasi/ikm');
		}
	}

	public function delete_ikm($id)
	{

		$this->db->where('id', $id);
		$dbikm = $this->db->get('t_ikm')->row();

		if ($dbikm->gambar != null) {
			unlink('file/ikm/' . $dbikm->gambar);
		}

		$this->db->where('id', $id);
		$this->db->delete('t_ikm');

		$this->session->set_flashdata("delete", "<b>DELETE</b>.. Menghapus Data Pada Menu Indeks Kepuasan Mutu");

		redirect('admin/informasi/ikm');
	}

	public function mutu()
	{

		$this->data['title'] = "Admin | RSU Karsa Husada";

		$this->data['a_informasi']	= 'active';
		$this->data['a_mutu']			= 'active';

		$akun = $this->db->get('t_mutu');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status', '1');
		$akun = $this->db->get('t_mutu');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status', '0');
		$akun = $this->db->get('t_mutu');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['mutu'] = $this->db->get('t_mutu');
		$this->load->view('admin/mutu/tabel_mutu', $this->data);
	}

	public function save_mutu()
	{

		if ($this->input->post('submit')) {
			date_default_timezone_set("Asia/Jakarta");

			$type = $this->input->post('type');
			$nama_file = $this->input->post('nama_file');
			$status = $this->input->post('status');

			$config['upload_path']          = 'file/mutu';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			$gambar = substr($_FILES['gambar']['name'], -4);
			$gambar = strtolower(str_replace(' ', '_', $nama_file . "" . $gambar));
			$config['file_name'] 			= strtolower($nama_file);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}


			$data = array(
				'type' 		=> $type,
				'nama_file'	=> $nama_file,
				'gambar'		=> $gambar,
				'status'		=> $status
			);

			$this->db->insert('t_mutu', $data);

			$this->session->set_flashdata("success", "<b>SAVE</b>.. Menambahkan Data Pada Menu Mutu, Dengan Nama File  = <b>" . $nama_file . "</b>...");

			redirect('admin/informasi/mutu');
		}
	}

	public function edit_mutu($id)
	{

		if ($this->input->post('submit')) {
			date_default_timezone_set("Asia/Jakarta");

			$this->db->where('id', $id);
			$dbmutu = $this->db->get('t_mutu')->row();

			$type = $this->input->post('type');
			$nama_file = $this->input->post('nama_file');
			$status = $this->input->post('status');
			$gambar1	= $this->input->post('gambar1');

			$config['upload_path']          = 'file/mutu';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			if ($_FILES['gambar']['name'] == null) {
				if ($dbmutu->gambar != null) {
					$gambar = $dbmutu->gambar;
				}
			} else {
				unlink('file/mutu/' . $dbmutu->gambar);
				$gambar = substr($_FILES['gambar']['name'], -4);
				$gambar = strtolower(str_replace(' ', '_', $nama_file . "" . $gambar));
				$config['file_name'] 			= strtolower($nama_file);
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$error = array('error' => $this->upload->display_errors());
				} else {
					$data = array('upload_data' => $this->upload->data());
				}
			}

			$data = array(
				'type' 		=> $type,
				'nama_file'	=> $nama_file,
				'gambar'		=> $gambar,
				'status'		=> $status
			);

			$this->db->where('id', $id);
			$this->db->update('t_mutu', $data);

			$this->session->set_flashdata("update", "<b>UPDATE</b>.. Merubah Data Pada Menu Mutu, Dengan nama File  = <b>" . $nama_file . "</b>...");

			redirect('admin/informasi/mutu');
		}
	}

	public function delete_mutu($id)
	{

		$this->db->where('id', $id);
		$dbmutu = $this->db->get('t_mutu')->row();

		if ($dbmutu->gambar != null) {
			unlink('file/mutu/' . $dbmutu->gambar);
		}

		$this->db->where('id', $id);
		$this->db->delete('t_mutu');

		$this->session->set_flashdata("delete", "<b>DELETE</b>.. Menghapus Data Pada Menu Mutu");

		redirect('admin/informasi/mutu');
	}

	public function sakip()
	{

		$this->data['title'] = "Admin | RSU Karsa Husada";

		$this->data['a_informasi']	= 'active';
		$this->data['a_sakip']		= 'active';

		$akun = $this->db->get('t_sakip');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status', '1');
		$akun = $this->db->get('t_sakip');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status', '0');
		$akun = $this->db->get('t_sakip');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['sakip'] = $this->db->get('t_sakip');
		$this->load->view('admin/sakip/tabel_sakip', $this->data);
	}

	public function save_sakip()
	{
		if ($this->input->post('submit')) {
			date_default_timezone_set("Asia/Jakarta");

			$nama_file = $this->input->post('nama_file');
			$status = $this->input->post('status');

			$config['upload_path']          = 'file/sakip';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			$gambar = substr($_FILES['gambar']['name'], -4);
			$gambar = strtolower(str_replace(' ', '_', $nama_file . "" . $gambar));
			$config['file_name'] 			= strtolower($nama_file);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}

			$data = array(
				'nama_file'	=> $nama_file,
				'file'		=> $gambar,
				'status'		=> $status
			);

			$this->db->insert('t_sakip', $data);

			$this->session->set_flashdata("success", "<b>SAVE</b>.. Menambahkan Data Pada Menu SAKIP, Dengan Nama File  = <b>" . $nama_file . "</b>...");

			redirect('admin/informasi/sakip');
		}
	}

	public function edit_sakip($id)
	{
		if ($this->input->post('submit')) {
			date_default_timezone_set("Asia/Jakarta");

			$this->db->where('id', $id);
			$dbsakip = $this->db->get('t_sakip')->row();

			$nama_file = $this->input->post('nama_file');
			$status = $this->input->post('status');

			$config['upload_path']          = 'file/sakip';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			if ($_FILES['gambar']['name'] == null) {
				if ($dbsakip->file != null) {
					$gambar = $dbsakip->file;
				}
			} else {
				unlink('file/sakip/' . $dbsakip->file);
				$gambar = substr($_FILES['gambar']['name'], -4);
				$gambar = strtolower(str_replace(' ', '_', $nama_file . "" . $gambar));
				$config['file_name'] 			= strtolower($nama_file);
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$error = array('error' => $this->upload->display_errors());
				} else {
					$data = array('upload_data' => $this->upload->data());
				}
			}

			$data = array(
				'nama_file'	=> $nama_file,
				'file'		=> $gambar,
				'status'		=> $status
			);

			$this->db->where('id', $id);
			$this->db->update('t_sakip', $data);

			$this->session->set_flashdata("update", "<b>UPDATE</b>.. Merubah Data Pada Menu SAKIP, Dengan Nama File  = <b>" . $nama_file . "</b>...");

			redirect('admin/informasi/sakip');
		}
	}

	public function delete_sakip($id)
	{

		$this->db->where('id', $id);
		$dbsakip = $this->db->get('t_sakip')->row();

		if ($dbsakip->file != null) {
			unlink('file/sakip/' . $dbsakip->file);
		}

		$this->db->where('id', $id);
		$this->db->delete('t_sakip');

		$this->session->set_flashdata("delete", "<b>DELETE</b>.. Menghapus Data Pada Menu ");

		redirect('admin/informasi/sakip');
	}

	public function inovasi()
	{

		$this->data['title'] = "Admin | RSU Karsa Husada";

		$this->data['a_informasi']	= 'active';
		$this->data['a_inovasi']	= 'active';

		$akun = $this->db->get('t_inovasipublik');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status', '1');
		$akun = $this->db->get('t_inovasipublik');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status', '0');
		$akun = $this->db->get('t_inovasipublik');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['inovasi'] = $this->db->get('t_inovasipublik');
		$this->load->view('admin/inovasi/tabel_inovasi', $this->data);
	}

	public function save_inovasi()
	{
		if ($this->input->post('submit')) {
			date_default_timezone_set("Asia/Jakarta");

			$judul 		= $this->input->post('judul');
			$deskripsi 	= $this->input->post('deskripsi');
			$status 	= $this->input->post('status');

			$config['upload_path']          = 'file/inovasi';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			$gambar = substr($_FILES['gambar']['name'], -4);
			$gambar = strtolower(str_replace(' ', '_', $judul . "" . $gambar));
			$config['file_name'] 			= strtolower($judul);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}

			$data 	=	array(
				'judul'	=> $judul,
				'deskripsi'	=> $deskripsi,
				'gambar' => $gambar,
				'status' => $status
			);

			$this->db->insert('t_inovasipublik', $data);

			$this->session->set_flashdata("success", "<b>SAVE</b>.. Menambahkan Data Pada Menu SAKIP, Dengan Nama File  = <b>" . $judul . "</b>...");

			redirect('admin/informasi/inovasi');
		}
	}

	public function edit_inovasi($id)
	{
		if ($this->input->post('submit')) {
			date_default_timezone_set("Asia/Jakarta");

			$this->db->where('id', $id);
			$dbinovasi = $this->db->get('t_inovasipublik')->row();

			$judul = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');
			$status = $this->input->post('status');

			$config['upload_path']          = 'file/inovasi';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			if ($_FILES['gambar']['name'] == null) {
				if ($dbinovasi->gambar != null) {
					$gambar = $dbinovasi->gambar;
				}
			} else {
				unlink('file/inovasi/' . $dbinovasi->gambar);
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

			$data 	=	array(
				'judul'	=> $judul,
				'deskripsi'	=> $deskripsi,
				'gambar' => $gambar,
				'status' => $status
			);

			$this->db->where('id', $id);
			$this->db->update('t_inovasipublik', $data);

			$this->session->set_flashdata("update", "<b>UPDATE</b>.. Merubah Data Pada Menu Inovasi Publik, Judul  = <b>" . $judul . "</b>...");

			redirect('admin/informasi/inovasi');
		}
	}

	public function delete_inovasi()
	{

		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$dbinovasi = $this->db->get('t_inovasipublik')->row();

		if ($dbinovasi->gambar != null) {
			unlink('file/inovasi/' . $dbinovasi->gambar);
		}

		$this->db->where('id', $id);
		$this->db->delete('t_inovasipublik');

		$this->session->set_flashdata("delete", "<b>DELETE</b>.. Menghapus Data Pada Menu Inovasi Publik");

		redirect('admin/informasi/inovasi');
	}

	public function save_detail_inovasi()
	{
		if ($this->input->post('submit')) {
			date_default_timezone_set("Asia/Jakarta");

			$id 		= $this->input->post('id_dokumen');
			$judul 		= $this->input->post('judul_dokumen');
			$deskripsi 	= $this->input->post('deskripsi_dokumen');


			$config['upload_path']          = 'file/inovasi/detail';
			$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;

			$gambar = substr($_FILES['gambar']['name'], -4);
			$gambar = strtolower(str_replace(' ', '_', $judul . "" . $gambar));
			$config['file_name'] 			= $id . "" . strtolower($judul);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}

			$data 	=	array(
				'id_inovasi'	=> $id,
				'judul'			=> $judul,
				'deskripsi'		=> $deskripsi,
				'file'			=> $id . "" . $gambar
			);

			$this->db->insert('t_detail_inovasipublik', $data);

			$this->session->set_flashdata("success", "<b>SAVE</b>.. Menambahkan Data Pada Menu Inovasi Publik, Dengan Nama File  = <b>" . $judul . "</b>...");

			redirect('admin/informasi/inovasi');
		}
	}

	public function get_detail_inovasi()
	{
		$id = $this->input->post('id');

		$query = $this->db->query('
			SELECT
				t_detail_inovasipublik.judul, 
				t_detail_inovasipublik.deskripsi, 
				t_detail_inovasipublik.file, 
				t_detail_inovasipublik.id, 
				t_detail_inovasipublik.id_inovasi
			FROM
				t_detail_inovasipublik
			WHERE
				t_detail_inovasipublik.id_inovasi = "' . $id . '"
			ORDER BY
				t_detail_inovasipublik.judul ASC
		')->result();

		echo json_encode($query);
	}

	public function delete_detailinovasi()
	{
		$id = $this->input->post('id');

		$this->db->where('id', $id);
		$dbinovasi = $this->db->get('t_detail_inovasipublik')->row();

		if ($dbinovasi->file != null) {
			unlink('file/inovasi/detail/' . $dbinovasi->file);
		}

		$this->db->where('id', $id);
		$this->db->delete('t_detail_inovasipublik');

		$this->session->set_flashdata("delete", "<b>DELETE</b>.. Menghapus Data Pada Detail Inovasi Publik");

		redirect('admin/informasi/inovasi');
	}
}
