<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
		parent::__construct();
		// cek session login
		$this->API="http://103.80.89.163/rest_karsa/index.php/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('karyawan/view_login');
    }
    
    public function validasi (){
        date_default_timezone_set("Asia/Jakarta");
        if ($this->input->post("submit")) {
            $username = $this->input->post("nip");
            $password = $this->input->post("password");
            
            $params = array("username"=>$username,
                            "password"=>$password);

            $login = json_decode($this->curl->simple_get($this->API.'/portal/login',$params));
            print_r($login);
            if($login!=null){
                $data_session = array(
                    'username' => $login[0]->NIP
                );
                $tgl = date('Y-m-d H:i:s');
                
                $d_login = array('nip' => $login[0]->NIP,
                                'last_login'=>$tgl);
                $this->db->insert('t_akun_karyawan',$d_login);

                $this->session->set_userdata($data_session);
                $this->session->set_flashdata("success","Login Berhasil, Selamat Datang");
                redirect('portal/profile');
            }
            else{
                
				redirect('portal/login');
            }
        }
    }
    public function logout(){
        session_destroy();
        redirect('portal/login');
    }
}
