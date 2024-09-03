<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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

	public function index()
	{
		$datas['username'] = $this->session->userdata('username');

		$this->data['title'] = "Admin | RSU Karsa Husada";

		$this->data['a_dashboard']	= 'active';

		$this->db->order_by('last_login', 'desc');
		$this->db->limit(10);
		$this->data['login'] = $this->db->get('t_akun_karyawan');

		$this->db->order_by('publikasi', 'desc');
		$this->db->limit(4);
		$this->data['berita'] = $this->db->get('t_berita');

		$this->db->order_by('id', 'desc');
		$this->db->limit(10);
		$this->data['visit'] = $this->db->get('t_visitor');

		$t_akun = $this->db->get('t_akun_karyawan');
		$this->data['akun'] = $t_akun->num_rows();

		$t_berita = $this->db->get('t_berita');
		$this->data['berita1'] = $t_berita->num_rows();

		$t_perpustakaan = $this->db->get('t_perpustakaan');
		$this->data['perpustakaan'] = $t_perpustakaan->num_rows();

		$t_pelayanan = $this->db->get('t_pelayanan');
		$this->data['pelayanan'] = $t_pelayanan->num_rows();

		$this->db->where('browser', 'Chrome');
		$t_chrome = $this->db->get('t_visitor');
		$this->data['chrome'] = $t_chrome->num_rows();

		$this->db->where('browser', 'Firefox');
		$t_firefox = $this->db->get('t_visitor');
		$this->data['firefox'] = $t_firefox->num_rows();

		$this->db->where('browser', 'Opera');
		$t_opera = $this->db->get('t_visitor');
		$this->data['opera'] = $t_opera->num_rows();

		$this->db->where('browser', 'Edge');
		$t_edge = $this->db->get('t_visitor');
		$this->data['edge'] = $t_edge->num_rows();

		$this->db->where('browser!=', 'Chrome');
		$this->db->where('browser!=', 'Opera');
		$this->db->where('browser!=', 'Firefox');
		$this->db->where('browser!=', 'Edge');
		$t_other = $this->db->get('t_visitor');
		$this->data['other'] = $t_other->num_rows();

		$t_browser = $this->db->get('t_visitor');
		$this->data['total'] = $t_browser->num_rows();

		$this->db->like('sistem_operasi', 'Windows');
		$t_windows = $this->db->get('t_visitor');
		$this->data['windows'] = $t_windows->num_rows();

		$this->db->like('sistem_operasi', 'Android');
		$t_android = $this->db->get('t_visitor');
		$this->data['android'] = $t_android->num_rows();

		$this->db->like('sistem_operasi', 'Linux');
		$t_linux = $this->db->get('t_visitor');
		$this->data['linux'] = $t_linux->num_rows();

		$this->db->like('sistem_operasi', 'Mac');
		$t_mac = $this->db->get('t_visitor');
		$this->data['mac'] = $t_mac->num_rows();

		// 		$this->db->where('sistem_operasi!=','Windows');
		// 		$this->db->where('sistem_operasi!=','Android');
		// 		$this->db->where('sistem_operasi!=','Linux');
		// 		$this->db->where('sistem_operasi!=','Mac');
		// 		$t_other = $this->db->get('t_visitor');
		$this->data['other'] = "";

		$this->db->like('judul', 'LAYANAN UNGGULAN');
		$t_unggulan = $this->db->get('t_pelayanan');
		$this->data['unggulan'] = $t_unggulan->num_rows();

		$this->db->like('judul', 'INSTALASI RAWAT JALAN');
		$t_rajal = $this->db->get('t_pelayanan');
		$this->data['rajal'] = $t_rajal->num_rows();

		$this->db->like('judul', 'INSTALASI RAWAT INAP');
		$t_ranap = $this->db->get('t_pelayanan');
		$this->data['ranap'] = $t_ranap->num_rows();

		$this->db->like('judul', 'INSTALASI GAWAT DARURAT');
		$t_igd = $this->db->get('t_pelayanan');
		$this->data['igd'] = $t_igd->num_rows();

		$this->db->like('judul', 'PENUNJANG MEDIS');
		$t_medis = $this->db->get('t_pelayanan');
		$this->data['medis'] = $t_medis->num_rows();

		$this->db->like('judul', 'PENUNJANG NON MEDIS');
		$t_non = $this->db->get('t_pelayanan');
		$this->data['non'] = $t_non->num_rows();

		$this->load->view('admin/view_home', $this->data);
	}
}
