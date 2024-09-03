<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etik_penelitian extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url','download'));
		// cek session login
		// if($this->session->userdata('username_peserta') == ""){
		// 	redirect(base_url("peserta/login"));
		// }

	}

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
		$data['s_ppid'] 		= '';
		$data['s_informasi']	= '';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->order_by('kategori','desc');
		$data['perpustakaan'] = $this->db->get('t_perpustakaan');
		$this->load->view('portal/etik_penelitian',$data);
	}
	public function download($id){
		$this->db->where('id',$id);
		$dbdownload = $this->db->get('t_perpustakaan')->row();
		
		force_download('file/perpustakaan/'.$dbdownload->file,null);
	}

    function getdata()
    {
     $output = '';
     $query = '';
     //$this->load->model('ajaxsearch_model');
     if($this->input->post('query'))
     {
      $query = $this->input->post('query');
     }
     $this->db->like('judulDokumen',$query);
     $data = $this->db->get('t_etikpenelitian');
     $output .= '
     ';
     if($data->num_rows() > 0)
     {
      foreach($data->result() as $row)
      {
       $output .= '
       <div class="l_file col-sm-12 col-md-6 col-lg-3">
       <a target="blank" href="'.$row->linkDownload.'">
           <div class="files col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                   <img class="gmbr" src="'.base_url("assets_portal/img/icon/pdf.png").'" alt="">
               </div>
               <div class="filename col-xs-8 col-sm-9 col-md-9 col-lg-9">
                   <h4>'.substr($row->judulDokumen, 0,30).'...</h4>
                   <small>Tanggal : '.date('d-m-Y',strtotime($row->createdDate)).'</small>
               </div>
           </div>
       </a>
       </div>
       ';
      }
     }
     else
     {
      $output .= '
         <h3> Data Tidak Tersedia... </h3>
         ';
     }
     $output .= '</table>';
     echo $output;
    }
   
}
