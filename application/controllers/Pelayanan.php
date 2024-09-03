<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends CI_Controller
{

	public function unggulan()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= 'active';
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

		$data['location']		= 'unggulan';

		$title					= 'LAYANAN UNGGULAN';
		$data['title']			= $title;

		$this->db->where('judul', $title);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan', $data);
	}
	public function igd()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= 'active';
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

		$data['location']		= 'igd';
		$title					= 'INSTALASI GAWAT DARURAT';
		$data['title']			= $title;

		$this->db->where('status', '1');
		$this->db->where('judul', $title);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan', $data);
	}

	public function rawat_jalan()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= 'active';
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

		$data['location']		= 'rajal';

		$title					= 'INSTALASI RAWAT JALAN';
		$data['title']			= $title;

		$this->db->where('judul', $title);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan_rawatjalan', $data);
	}
	public function rawat_inap()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= 'active';
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

		$data['location']		= 'ranap';

		$title					= 'INSTALASI RAWAT INAP';
		$data['title']			= $title;

		$this->db->where('status', '1');
		$this->db->where('judul', $title);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan_rawatinap', $data);
	}

	public function detail_rawatjalan($tipe)
	{
		$n_tipe = strtoupper(str_replace('_', ' ', $tipe));
		$data['tipe'] = $n_tipe;
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= 'active';
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

		$data['location']		= 'rawatjalan';

		$title					= 'INSTALASI RAWAT JALAN ';
		$data['title']			= $title;

		$this->db->where('status', '1');
		$this->db->where('judul', $title);
		$this->db->where('sub_judul', $n_tipe);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan', $data);
	}

	public function detail_rawatinap($tipe)
	{
		$n_tipe = strtoupper(str_replace('_', ' ', $tipe));
		$data['tipe'] = $n_tipe;
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= 'active';
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

		$data['location']		= 'rawatinap';

		$title					= 'INSTALASI RAWAT INAP ';
		$data['title']			= $title;

		$this->db->where('status', '1');
		$this->db->where('judul', $title);
		$this->db->where('sub_judul', $n_tipe);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan', $data);
	}

	public function rawat_jalan1()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= 'active';
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

		$data['location']		= 'rajal';

		$title					= 'INSTALASI RAWAT JALAN';
		$data['title']			= $title;

		$this->db->where('judul', $title);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan', $data);
	}
	public function rawat_inap1()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= 'active';
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

		$data['location']		= 'ranap';

		$title					= 'INSTALASI RAWAT INAP';
		$data['title']			= $title;

		$this->db->where('status', '1');
		$this->db->where('judul', $title);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan', $data);
	}
	public function penunjang()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= '';
		$data['s_penunjang']	= 'active';
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

		$this->load->view('portal/pelayanan_penunjang', $data);
	}

	public function medis($tipe)
	{
		$n_tipe = strtoupper(str_replace('_', ' ', $tipe));
		$data['tipe'] = $n_tipe;
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= '';
		$data['s_penunjang']	= 'active';
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

		$data['location']		= 'medis';

		$title					= 'PENUNJANG MEDIS ';
		$data['title']			= $title;

		$this->db->where('status', '1');
		$this->db->where('judul', $title);
		$this->db->where('sub_judul', $n_tipe);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan', $data);
	}

	public function nonmedis($tipe)
	{
		$n_tipe = strtoupper(str_replace('_', ' ', $tipe));
		$data['tipe'] = $n_tipe;
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= '';
		$data['s_penunjang']	= 'active';
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

		$data['location']		= 'medis';

		$title					= 'PENUNJANG NON MEDIS ';
		$data['title']			= $title;

		$this->db->where('status', '1');
		$this->db->where('judul', $title);
		$this->db->where('sub_judul', $n_tipe);
		$data['unggulan'] = $this->db->get('t_pelayanan');

		$this->load->view('portal/pelayanan', $data);
	}

	public function tarif($kategori)
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= '';
		$data['s_penunjang']	= '';
		$data['s_tarif'] 		= 'active';
		$data['s_alur'] 		= '';
		$data['s_jadwal'] 		= '';
		$data['s_perpustakaan'] = '';
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$categories = str_replace('_', ' ', $kategori);

		if ($kategori == "rawat_intensif") {
			$data['kategori'] = $categories;

			$data['query'] = $this->db->query('
				SELECT
					DISTINCT t_tarif.inisial
				FROM
					t_tarif
				WHERE
					t_tarif.nama = "' . $categories . '"
			')->result();

			$data['jns_pelayanan'] = $this->db->query('
				SELECT
					DISTINCT t_tarif.jenis_pelayanan
				FROM
					t_tarif
				WHERE
					t_tarif.nama = "' . $categories . '"
			')->result();

			$data['catatan'] = '<p>Catatan: <br><b>TARIF DIATAS BELUM TERMASUK TINDAKAN MEDIS, PENUNJANG DAN OBAT</b></p>';

			$this->load->view('portal/tarif_intensif', $data);
		} else {

			if ($kategori == 'rawat_jalan') {
				$data['row_tabel'] = array("Jenis Pelayanan", "Tarif Rawat Jalan");
				$select = 't_tarif.tarif_rajal';
				$data['catatan'] = '<p>Catatan: <br><b>TARIF DIATAS BELUM TERMASUK TINDAKAN MEDIS, PENUNJANG DAN OBAT</b></p>';
			} elseif ($kategori == 'rawat_inap') {
				$data['row_tabel'] = array("Jenis Pelayanan", "Kelas 1", "Kelas 2", "Kelas 3", "Kelas Utama", "Kelas VVIP");
				$select = 't_tarif.kelas1, t_tarif.kelas2, t_tarif.kelas3, t_tarif.kelas_utama, t_tarif.kelas_vvip';
				$data['catatan'] = '<p>Catatan: <br><b>TARIF DIATAS BELUM TERMASUK TINDAKAN MEDIS, PENUNJANG DAN OBAT</b></p>';
			} elseif ($kategori == 'instalasi_gawat_darurat') {
				$data['row_tabel'] = array("Jenis Pelayanan", "Tarif IGD");
				$data['catatan'] = '<p>Catatan: <br><b>TARIF DIATAS BELUM TERMASUK TINDAKAN MEDIS, PENUNJANG DAN OBAT</b></p>';
				$select = 't_tarif.tarif';
			} elseif ($kategori == 'laboratorium_pk') {
				$data['row_tabel'] = array("Jenis Pelayanan", "Tarif Laboratorium");
				$select = 't_tarif.tarif';
				$data['catatan'] = "";
			} elseif ($kategori == 'bank_darah') {
				$data['row_tabel'] = array("Jenis Pelayanan", "Tarif Bank Darah");
				$select = 't_tarif.tarif';
				$data['catatan'] = "";
			} elseif ($kategori == 'laboratorium_pa') {
				$data['row_tabel'] = array("Jenis Pelayanan", "Tarif Laboratorium");
				$select = 't_tarif.tarif';
				$data['catatan'] = "";
			} elseif ($kategori == 'laboratorium_mk') {
				$data['row_tabel'] = array("Jenis Pelayanan", "Tarif Laboratorium");
				$select = 't_tarif.tarif';
				$data['catatan'] = "";
			} elseif ($kategori == 'radiologi') {
				$data['row_tabel'] = array("Jenis Pelayanan", "Tarif Radiologi");
				$select = 't_tarif.tarif';
				$data['catatan'] = "";
			}


			$data['kategori'] = $categories;

			$data['query'] = $this->db->query('
			SELECT
				t_tarif.nama, 
				t_tarif.id, 
				t_tarif.jenis_pelayanan,
				' . $select . '
			FROM
				t_tarif
			WHERE
				t_tarif.nama = "' . $categories . '"
			');


			// print_r($data['query']->result());

			$this->load->view('portal/tarif', $data);
		}
	}
	public function alur()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= '';
		$data['s_penunjang']	= '';
		$data['s_tarif'] 		= '';
		$data['s_alur'] 		= 'active';
		$data['s_jadwal'] 		= '';
		$data['s_perpustakaan'] = '';
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->where('status', '1');
		$this->db->group_by('alur');
		$data['alur'] = $this->db->get('t_alur');

		$this->db->where('status', '1');
		$data['t_alur'] = $this->db->get('t_alur');

		$this->load->view('portal/alur', $data);
	}
	public function jadwal_dokter()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= '';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= '';
		$data['s_pelayanan']	= 'active';
		$data['s_unggulan'] 	= '';
		$data['s_igd'] 			= '';
		$data['s_rajal'] 		= '';
		$data['s_ranap'] 		= '';
		$data['s_penunjang']	= '';
		$data['s_tarif'] 		= '';
		$data['s_alur'] 		= '';
		$data['s_jadwal'] 		= 'active';
		$data['s_perpustakaan'] = '';
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$data['jadwal'] = $this->db->get('t_jadwal_dokter');
		$this->load->view('portal/jadwal_dokter', $data);
	}
}
