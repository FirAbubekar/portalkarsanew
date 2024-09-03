<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_msg extends CI_Controller {

	public function index()
	{
        $ci = get_instance();
        $ci->output->set_status_header(404);
        $ci->load->view('errors/error404_view');
        echo $ci->output->get_output();
        exit(4);
	}
}