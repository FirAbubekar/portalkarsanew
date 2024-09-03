<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url','download'));
		// cek session login
		// if($this->session->userdata('username_peserta') == ""){
		// 	redirect(base_url("peserta/login"));
		// }

	}

	public function berita()
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
		$data['s_informasi']	= 'active';
		$data['s_berita']		= 'active';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->order_by('tanggal','desc');
		$this->db->where('posting','1');
		$data['berita'] = $this->db->get('t_berita');
		$this->load->view('portal/berita',$data);
	}

 function fetch()
 {
  $output = '';
  // $this->load->model('scroll_pagination_model');
  $this->db->limit($this->input->post('limit'),$this->input->post('start'));
  $this->db->where('posting','1');
  $this->db->order_by('tanggal','desc');
  $data = $this->db->get('t_berita');
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
       $icon = "";
       if($row->kategori=="video"){
           $icon='<center><img class="gmbr" src="https://www.powtoon.com/blog/wp-content/uploads/2020/03/videoyoutubeicon-1320192294490006733.png" alt=""></center>';
           
       }else{
           $icon='<center><img class="gmbr" src="'.base_url("file/berita/".$row->image).'" alt=""></center>';
       }
    $output .= '<div class="files col-sm-12 col-md-12 col-lg-12">
						<div class="icon col-sm-3 col-md-12 col-lg-3">
							'.$icon.'
						</div>
						<div class="filename col-sm-9 col-md-12 col-lg-9">
							<div class="newstitle">'.$row->judul.'</div>
							<div class="newsdate">'.$row->penulis.','.$row->tanggal.'</div>
							<div class="newsdesc">'.substr($row->deskripsi, 0,200).'</div>
							<div class="newsreadmore"><a style="color: #FF8B00;" href="'.base_url("informasi/readmore/".$row->id).'">Lihat Selengkapnya</a></div>
						</div>
					</div>
    ';
   }
  }
  echo $output;
 }
	
    public function readmore($id)
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
		$data['s_informasi']	= 'active';
		$data['s_berita']		= 'active';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';


		$this->db->where('id',$id);
		$data['read'] = $this->db->get('t_berita')->row();

		$this->db->limit(4);
		$this->db->where('posting','1');
		$data['recent'] = $this->db->get('t_berita');

		$this->load->view('portal/readmore',$data);
	}
	public function pengumuman()
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
		$data['s_informasi']	= 'active';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->where('status','1');
		$data['ikm'] = $this->db->get('t_ikm');

		$this->load->view('portal/pengumuman',$data);
    }
	public function ikm()
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
		$data['s_informasi']	= 'active';
		$data['s_berita']		= '';
		$data['s_ikm']			= 'active';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		$this->db->where('status','1');
		$data['ikm'] = $this->db->get('t_ikm');

		$this->load->view('portal/indeks_kepuasan',$data);
    }
    public function mutu()
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
		$data['s_informasi']	= 'active';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= 'active';
		$data['s_sakip']		= '';

		$this->db->where('type','Mutu Semester');
		$data['semester'] = $this->db->get('t_mutu');

		$this->db->where('type','Mutu Kunci');
		$data['kunci'] = $this->db->get('t_mutu');

		$this->load->view('portal/mutu',$data);
	}
	public function sakip($tahun)
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
		$data['s_informasi']	= 'active';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= 'active';

		$this->db->where('status','1');
		$this->db->where('tahun',$tahun);
		$data['sakip'] = $this->db->get('t_sakip');

		$this->load->view('portal/sakip',$data);
	}

	public function download($id){
		$this->db->where('id',$id);
		$dbsakip = $this->db->get('t_sakip')->row();
		
		force_download('file/sakip/'.$dbsakip->file,null);
	}

	public function downloadmutu($id){
		$this->db->where('id',$id);
		$dbsakip = $this->db->get('t_mutu')->row();
		
		force_download('file/mutu/'.$dbsakip->gambar,null);
	}

	public function inovasi()
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
		$data['s_informasi']	= 'active';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		// $this->db->order_by('tanggal','desc');
		// $this->db->where('posting','1');
		$data['inovasi'] = $this->db->get('t_inovasipublik');
		$this->load->view('portal/inovasi_publik',$data);
	}

	public function detail_inovasi($id)
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
		$data['s_informasi']	= 'active';
		$data['s_berita']		= '';
		$data['s_ikm']			= '';
		$data['s_mutu']			= '';
		$data['s_sakip']		= '';

		// $this->db->order_by('tanggal','desc');
		$this->db->where('id',$id);
		$data['inovasi'] = $this->db->get('t_inovasipublik')->row();

		$this->db->where('id_inovasi',$id);
		$data['detail'] = $this->db->get('t_detail_inovasipublik');
		$this->load->view('portal/detail_inovasi_publik',$data);
	}
}
