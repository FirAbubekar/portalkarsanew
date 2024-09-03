<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppid extends CI_Controller
{

	public function index()
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
		$data['s_ppid'] 		= 'active';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->where('status', '1');
		$data['ppid'] = $this->db->get('t_ppid');
		$this->load->view('portal/ppid_submenu', $data);
	}

	public function subkategori($subkategori)
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
		$data['s_ppid'] 		= 'active';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->where('status', 'Aktif');
		$this->db->where('subkategori', $subkategori);
		$data['ppid'] = $this->db->get('t_ppid2')->result();
		$this->load->view('portal/ppid_detail', $data);
	}

	public function galeri()
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
		$data['s_ppid'] 		= 'active';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->where('status', 'Aktif');
		$this->db->where('kategori', 'galeri');
		$data['ppid'] = $this->db->get('t_ppid2')->result();
		$this->load->view('portal/ppid_galeri_detail', $data);
	}



	public function menu($menu)
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
		$data['s_ppid'] 		= 'active';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->where('menu', $menu);
		$this->db->where('status', '1');
		$data['ppid'] = $this->db->get('t_ppid');
		$this->load->view('portal/ppid_detail', $data);
	}

	public function pengaduan_ppid()
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
		$data['s_ppid'] 		= 'active';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->load->view('portal/form_pengaduan_ppid', $data);
	}

	public function save_pengaduan()
	{
		date_default_timezone_set("Asia/Jakarta");
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if (isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'IP tidak dikenali';
		$c_user = $this->db->query("
			SELECT
				COUNT(ip_pelapor) as total
			FROM
				t_pengaduanppid
			WHERE
				t_pengaduanppid.ip_pelapor = '" . $ipaddress . "' AND
				DATE(t_pengaduanppid.date_created) = '" . date('Y-m-d') . "'
			")->row();
		if ($c_user->total <= 1) {
		$id_pengaduan 		= "PPID" . date('YmdHis');
		$nama_pelapor		= $this->input->post('nama_pelapor');
		$jk_pelapor			= $this->input->post('jk_pelapor');
		$alamat_pelapor		= $this->input->post('alamat_pelapor');
		$tanda_pelapor		= $this->input->post('tanda_pelapor');
		$no_pelapor			= $this->input->post('no_pelapor');
		$notelp_pelapor		= $this->input->post('notelp_pelapor');
		$fax_pelapor		= $this->input->post('fax_pelapor');
		$email_pelapor		= $this->input->post('email_pelapor');
		$nama_terlapor		= $this->input->post('nama_terlapor');
		$instansi_terlapor	= $this->input->post('instansi_terlapor');
		$alamat_terlapor	= $this->input->post('alamat_terlapor');
		$notelp_terlapor	= $this->input->post('notelp_terlapor');
		$fax_terlapor		= $this->input->post('fax_terlapor');
		$email_terlapor		= $this->input->post('email_terlapor');
		$kronologis_terlapor= $this->input->post('kronologis_terlapor');

		

		$data = array(
			"id_pengaduan"		=>$id_pengaduan,
			"nama_pelapor"		=>$nama_pelapor,
			"jk_pelapor"		=>$jk_pelapor,
			"alamat_pelapor"	=>$alamat_pelapor,
			"tanda_pelapor"		=>$tanda_pelapor,
			"no_pelapor"		=>$no_pelapor,
			"notelp_pelapor"	=>$notelp_pelapor,
			"fax_pelapor"		=>$fax_pelapor,
			"email_pelapor"		=>$email_pelapor,
			"nama_terlapor"		=>$nama_terlapor,
			"instansi_terlapor"	=>$instansi_terlapor,
			"alamat_terlapor"	=>$alamat_terlapor,
			"notelp_terlapor"	=>$notelp_terlapor,
			"fax_terlapor"		=>$fax_terlapor,
			"email_terlapor"	=>$email_terlapor,
			"kronologis_terlapor"=>$kronologis_terlapor,
			"date_created"		=>date('Y-m-d H:i:s'),
			"ip_pelapor"		=>$ipaddress
		);

		$this->db->insert('t_pengaduanppid',$data);

		$this->session->set_flashdata("success", "Pengaduan Anda <b>Berhasil</b> Dikirimkan...");
		}else{
			$this->session->set_flashdata("error", "Pengaduan Anda <b>Gagal</b> Dikirimkan...");
		}

		redirect('ppid/pengaduan_ppid');
	}

	public function klasifikasi($submenu)
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
		$data['s_ppid'] 		= 'active';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$data['ppid'] = $this->db->query('
		SELECT
		t_ppid.menu,
		t_ppid.submenu,
		t_ppid.id,
		t_ppid.judul,
		t_ppid.deskripsi,
		t_ppid.gambar,
		t_ppid.`status`
		FROM
		t_ppid
		WHERE
		t_ppid.menu = "klasifikasi" AND
		t_ppid.submenu = "' . $submenu . '"
		');
		$this->load->view('portal/ppid_submenu', $data);
	}

	public function simpan()
	{
		date_default_timezone_set("Asia/Jakarta");

		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if (isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if (isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'IP tidak dikenali';

		$c_user = $this->db->query("
			SELECT
				COUNT(ipPemohon) as total
			FROM
				t_permohonanppid
			WHERE
				t_permohonanppid.ipPemohon = '" . $ipaddress . "' AND
				DATE(t_permohonanppid.tglPermohonan) = '" . date('Y-m-d') . "'
		")->row();
		if ($c_user->total <= 1) {
			$kdpermohonan = $this->input->post('kdpermohonan');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$notelp = $this->input->post('notelp');
			$rincian = $this->input->post('rincian');
			$alasan = $this->input->post('alasan');
			$oleh = $this->input->post('oleh');
			$arr_dapat = $this->input->post('dapat');
			$dapat = "";

			for ($i = 0; $i < count($arr_dapat); $i++) {
				$dapat = $arr_dapat[$i] . "," . $dapat;
			}

			$arr_form = array(
				"kdPermohonan" => $kdpermohonan,
				"noSurat" => "070/     /102.6/2021",
				"tglPermohonan" => date('Y-m-d H:i:s'),
				'namaPemohon' => $nama,
				'alamatPemohon' => $alamat,
				'notelpPemohon' => $notelp,
				'rincianPemohon' => $rincian,
				'alasanPemohon' => $alasan,
				'dapatInformasi' => $oleh,
				'salinanInformasi' => $dapat,
				'ipPemohon' => $ipaddress,
				'status' => '1'
			);

			$this->session->set_flashdata("success", "Permohonan Informasi Anda <b>Berhasil</b> Ditambahkan...");
			$this->db->insert('t_permohonanppid', $arr_form);

			redirect();
		} else {
			$this->session->set_flashdata("error", "Permohonan Informasi Anda <b>Gagal</b> Ditambahkan...");
		}
	}
}
