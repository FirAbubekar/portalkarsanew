<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diklat extends CI_Controller
{

	public function pendidikan($submenu)
	{
        $menu = 'PENDIDIKAN';
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
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

        $data['menu']		    = $menu;

		// $this->db->where('status', '1');
		$data['diklat'] = $this->db->query('
            SELECT
                t_kontendiklat.id_konten,
                t_kontendiklat.judul,
                t_kontendiklat.sub_judul,
                t_kontendiklat.deskripsi,
                t_kontendiklat.file_pendukung,
                t_kontendiklat.google_drive,
                t_kontendiklat.`status`,
                t_kontendiklat.tanggal,
                t_kontendiklat.createdDate,
                t_kontendiklat.userCreated,
                t_kontendiklat.menu,
                t_kontendiklat.sub_menu 
            FROM
                t_kontendiklat 
            WHERE
                t_kontendiklat.menu = "'.$menu.'" 
                AND t_kontendiklat.sub_menu = "'.$submenu.'" 
                AND t_kontendiklat.`status` = "Aktif"
        ')->result();

		$this->load->view('portal/detail_diklat', $data);
	}

	public function penelitian($submenu)
	{
        $menu = 'PENELITIAN';
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
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

        $data['menu']		    = $menu;

		$data['diklat'] 	= $this->db->query('
            SELECT
                t_kontendiklat.id_konten,
                t_kontendiklat.judul,
                t_kontendiklat.sub_judul,
                t_kontendiklat.deskripsi,
                t_kontendiklat.file_pendukung,
                t_kontendiklat.google_drive,
                t_kontendiklat.`status`,
                t_kontendiklat.tanggal,
                t_kontendiklat.createdDate,
                t_kontendiklat.userCreated,
                t_kontendiklat.menu,
                t_kontendiklat.sub_menu 
            FROM
                t_kontendiklat 
            WHERE
                t_kontendiklat.menu = "'.$menu.'" 
                AND t_kontendiklat.sub_menu = "'.$submenu.'" 
                AND t_kontendiklat.`status` = "Aktif"
        ')->result();

		$this->load->view('portal/detail_diklat', $data);
	}

	public function pelatihan($submenu)
	{
        $menu = 'PELATIHAN';
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
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

        $data['menu']		    = $menu;

		$data['diklat'] = $this->db->query('
            SELECT
                t_kontendiklat.id_konten,
                t_kontendiklat.judul,
                t_kontendiklat.sub_judul,
                t_kontendiklat.deskripsi,
                t_kontendiklat.file_pendukung,
                t_kontendiklat.google_drive,
                t_kontendiklat.`status`,
                t_kontendiklat.tanggal,
                t_kontendiklat.createdDate,
                t_kontendiklat.userCreated,
                t_kontendiklat.menu,
                t_kontendiklat.sub_menu 
            FROM
                t_kontendiklat 
            WHERE
                t_kontendiklat.menu = "'.$menu.'" 
                AND t_kontendiklat.sub_menu = "'.$submenu.'" 
                AND t_kontendiklat.`status` = "Aktif"
        ')->result();

		$this->load->view('portal/detail_diklat', $data);
	}

}
