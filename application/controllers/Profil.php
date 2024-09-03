<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

	public function sejarah()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= 'active';
		$data['s_sejarah'] 		= 'active';
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
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->order_by('tahun', 'asc');
		$data['sejarah'] = $this->db->get('t_sejarah');

		$this->load->view('portal/sejarah', $data);
	}
	public function visimisi()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= 'active';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= 'active';
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
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$data['visimisi'] = $this->db->get('t_profil');
		$this->load->view('portal/visimisi', $data);
	}
	public function tugasfungsi()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= 'active';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = 'active';
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
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$data['tugasfungsi'] = $this->db->get('t_tugasfungsi');
		$this->load->view('portal/tugasfungsi', $data);
	}
	public function sdm()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= 'active';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= 'active';
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
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->order_by('jumlah', 'desc');
		$this->db->where('status', '1');
		$data['sdm'] = $this->db->get('t_sdm');

		$data['subsdm'] = $this->db->query('
		SELECT
			SUM(t_sdm.jumlah) as jumlah,
			SUM(t_sdm.pns) as pns,
			SUM(t_sdm.blud) as blud,
			SUM(t_sdm.mou) as mou,
			SUM(t_sdm.kontrak) as kontrak
		FROM
			t_sdm
		WHERE
			t_sdm.`status`="1"
		')->row();

		$data['pendidikansdm'] = $this->db->query('
		SELECT
			SUM(t_sdm.jumlah) as jumlah,
			SUM(t_sdm.s2) as s2,
			SUM(t_sdm.s1) as s1,
			SUM(t_sdm.d4) as d4,
			SUM(t_sdm.d3) as d3,
			SUM(t_sdm.d2) as d2,
			SUM(t_sdm.d1) as d1,
			SUM(t_sdm.sma) as sma
		FROM
			t_sdm
		WHERE
			t_sdm.`status`="1"
		')->row();


		$this->load->view('portal/sdm', $data);
	}
	public function struktur()
	{
		$data['s_beranda']		= '';
		$data['s_profil'] 		= 'active';
		$data['s_sejarah'] 		= '';
		$data['s_visi'] 		= '';
		$data['s_tugas_fungsi'] = '';
		$data['s_sdm'] 			= '';
		$data['s_struktur'] 	= 'active';
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
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->where('status', '1');
		$this->db->order_by('urutan', 'asc');
		$data['struktur'] = $this->db->get('detail_struktur');
		$this->load->view('portal/struktur', $data);
	}
}
