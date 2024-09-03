<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perpustakaan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url', 'download'));
    // cek session login
    // if($this->session->userdata('username_peserta') == ""){
    // 	redirect(base_url("peserta/login"));
    // }

  }

  public function index()
  {
    $data['s_beranda']    = '';
    $data['s_profil']     = '';
    $data['s_sejarah']     = '';
    $data['s_visi']     = '';
    $data['s_tugas_fungsi'] = '';
    $data['tugasfungsi']   = '';
    $data['s_sdm']       = '';
    $data['s_struktur']   = '';
    $data['s_pelayanan']  = '';
    $data['s_unggulan']   = '';
    $data['s_igd']       = '';
    $data['s_rajal']     = '';
    $data['s_ranap']     = '';
    $data['s_penunjang']  = '';
    $data['s_tarif']     = '';
    $data['s_alur']     = '';
    $data['s_jadwal']     = '';
    $data['s_perpustakaan'] = 'active';
    $data['s_ppid']     = '';
    $data['s_informasi']  = '';
    $data['s_berita']    = '';
    $data['s_ikm']      = '';
    $data['s_mutu']      = '';
    $data['s_sakip']    = '';

    $this->db->order_by('kategori', 'desc');
    $data['perpustakaan'] = $this->db->get('t_perpustakaan');

    $data['kategori'] = $this->db->query('
		SELECT DISTINCT
        t_perpustakaan.kategori
        FROM
        t_perpustakaan
        WHERE
        t_perpustakaan.`status` = "1"
        ORDER BY
        t_perpustakaan.kategori ASC

		')->result();

    $this->load->view('portal/perpustakaan', $data);
  }
  public function download($id)
  {
    $this->db->where('id', $id);
    $dbdownload = $this->db->get('t_perpustakaan')->row();

    force_download('file/perpustakaan/' . $dbdownload->file, null);
  }

  function fetch()
  {
    $output = '';
    $query = '';
    $kategori = "";

    //$this->load->model('ajaxsearch_model');
    if ($this->input->post('query') != "") {
      $query = $this->input->post('query');
      $this->db->like('nama_file', $query);
    }
    if ($this->input->post('kategori') != "") {
      $kategori = $this->input->post('kategori');
      $this->db->where('kategori', $kategori);
    }

    $data = $this->db->get('t_perpustakaan');

    $output .= '';
    if ($data->num_rows() > 0) {
      $output .= '          
          <table style="width:100%;overflow-x: scroll;">
            <thead>
              <th>Judul</th>
              <th>Kategori</th>
              <th>Tahun Terbit</th>
            </thead>';
      foreach ($data->result() as $row) {
        // $output .= '
        //           <div class="l_file col-sm-12 col-md-12 col-lg-6">
        //           <a target="blank" href="' . $row->file . '">
        //             <div class="files col-xs-12 col-sm-12 col-md-12 col-lg-12">
        //               <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
        //                 <img class="gmbr" src="' . base_url("assets_portal/img/icon/pdf.png") . '" alt="">
        //               </div>
        //               <div class="filename col-xs-8 col-sm-9 col-md-9 col-lg-9">
        //                 <h4>' . substr($row->nama_file, 0, 30) . '...</h4>
        //                 <small>Kategori : ' . $row->kategori . '</small><br>
        //                 <small>Tanggal : ' . $row->tanggal_upload . '</small>
        //               </div>
        //             </div>
        //           </a>
        //           </div>
        //             ';
        $output .= '
                    <tr>
                      <td style="padding:1rem 0">
                        <a target="blank" href="' . $row->file . '">
                          <img src="' . base_url("assets_portal/img/icon/pdf.png") . '" alt="" style="width: 50px;">
                          <span>' . substr($row->nama_file, 0, 50) . '</span>
                        </a>
                      </td>
                      <td>
                        <b>' . $row->kategori . '</b>
                      </td>
                      <td>
                        <p>' . $row->tanggal_upload . '</p>
                      </td>
                    </tr>
                    ';
      }
    } else {
      $output .=    '
   <h3> No Data Found </h3>
   ';
    }
    $output .= '</table>';
    echo $output;
  }
}
