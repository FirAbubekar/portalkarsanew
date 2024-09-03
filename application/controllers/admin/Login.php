<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        if($this->session->userdata('username') != ""){
            redirect(base_url("admin/home"));
        }
        else{
            $data['title'] = "Admin | RSU Karsa Husada";
            $this->load->view('admin/view_login',$data);
        }
		
    }
    
    public function validasi (){
        if ($this->input->post("submit")) {
            $username = $this->input->post("username");
            $password = $this->input->post("password");

            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $this->db->where('status','1');
            $cek1 = $this->db->get('t_akun_admin')->row();
            $cek = $this->db->get('t_akun_admin');
            $total = $cek->num_rows();
            
            // var_dump($cek1);
            
            if($cek1!="NULL"){
                $data_session = array(
                    'username' => $cek1->username,
                    'level'     => $cek1->level,
                );
                $this->session->set_userdata($data_session);
                $this->session->set_flashdata("success","Login Berhasil, Selamat Datang");
                redirect('admin/home');
            }
            else{
                redirect('admin/login');
            }
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('admin/login');
    }
}
