<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

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

	public function karyawan()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";
        $datas['username'] = $this->session->userdata('username');

		$this->data['a_akun']	= 'active';

		$akun = $this->db->get('t_akun_karyawan');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status','1');
		$akun = $this->db->get('t_akun_karyawan');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status','0');
		$akun = $this->db->get('t_akun_karyawan');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['akun'] = $this->db->get('t_akun_karyawan');

		$this->load->view('admin/akun_karyawan/tabel_akun_karyawan',$this->data);
	}

	public function save_akun(){
		if($this->input->post('submit')){
			$nip 		= $this->input->post('nip');
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');
			$status 	= $this->input->post('status');

			$data = array('nip'			=> $nip,
						  'username'	=> $username,
						  'password'	=> $password,
						  'status'		=> $status
			);

			$this->db->insert('t_akun_karyawan',$data);

			$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Akun Karyawan, Dengan Username  = <b>".$username."</b>...");

			redirect('admin/akun/karyawan');
		}
	}

	public function edit_akun($id){
		if($this->input->post('submit')){
			$nip 		= $this->input->post('nip');
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');
			$status 	= $this->input->post('status');

			$data = array('nip'			=> $nip,
						  'username'	=> $username,
						  'password'	=> $password,
						  'status'		=> $status
			);

			$this->db->where('id',$id);
			$this->db->update('t_akun_karyawan',$data);

			$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Akun Karyawan, Dengan Username  = <b>".$username."</b>...");

			redirect('admin/akun/karyawan');
		}
	}

	public function delete_akun($id){
		$this->db->where('id',$id);
		$this->db->delete('t_akun_karyawan');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Akun Karyawan");

		redirect('admin/akun/karyawan');
	}
	public function admin()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";
		$datas['username'] = $this->session->userdata('username');
		
		$this->data['a_akun']	= 'active';

		$akun = $this->db->get('t_akun_admin');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status','1');
		$akun = $this->db->get('t_akun_admin');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status','0');
		$akun = $this->db->get('t_akun_admin');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['akun'] = $this->db->get('t_akun_admin');

		$this->load->view('admin/akun_admin/tabel_akun_admin',$this->data);
	}

	public function save_akun_admin(){
		if($this->input->post('submit')){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$status = $this->input->post('status');

			$data = array('username'	=> $username,
						  'password'	=> $password,
						  'status'		=> $status
			);

			$this->db->insert('t_akun_admin',$data);

			$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Akun Admin, Dengan Username  = <b>".$username."</b>...");

			redirect('admin/akun/admin');
		}
	}

	public function edit_akun_admin($id){
		if($this->input->post('submit')){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$status = $this->input->post('status');

			$data = array('username'	=> $username,
						  'password'	=> $password,
						  'status'		=> $status
			);

			$this->db->where('id',$id);
			$this->db->update('t_akun_admin',$data);

			$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Akun Admin, Dengan Username  = <b>".$username."</b>...");

			redirect('admin/akun/admin');
		}
	}

	public function delete_akun_admin($id){
		
		$this->db->where('id',$id);
		$d_username = $this->db->get('t_akun_admin')->row();
		
		$this->db->where('id',$id);
		$this->db->delete('t_akun_admin');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Akun Admin");

		redirect('admin/akun/admin');
	}
}
