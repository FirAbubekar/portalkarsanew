<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vaksinasi extends CI_Controller {
    function __construct(){
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");  		
	}

	public function index()
	{
        $setdata['notif'] = "";
        $this->load->view('portal/daftar_vaksin',$setdata);
	}
    public function search()
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
        $data['tanggal']		= date('Y-m-d');
        $data['getjadwal']		= array();

		$this->load->view('portal/search_jadwal',$data);
	}
    public function daftar_jadwal(){
        $setdata['notif'] = "";
        $tgldaftar      = date('Y-m-d H:i:s');
        $tgldilayani    = $this->input->post('tanggal');
        $tgldilayani    = date('Y-m-d', strtotime($tgldilayani));

        $gettotal = $this->db->query('
            SELECT
                COUNT(t_daftarvaksin.noktp) AS total
            FROM
                t_daftarvaksin 
            WHERE
                t_daftarvaksin.tgldilayani = "'.$tgldilayani.'"
        ')->row();

        $stat_vaksin = $this->db->get('status_vaksin')->row();

        if($gettotal->total<$stat_vaksin->jumlah){
            
            $noktp  = $this->input->post('no_ktp');
            
            $getstatus = $this->db->query('
            SELECT
                t_daftarvaksin.noktp
            FROM
                t_daftarvaksin 
            WHERE
                t_daftarvaksin.tgldilayani = "'.$tgldilayani.'" AND
                t_daftarvaksin.noktp = "'.$noktp.'"
            ')->row();
            if($noktp!=null){

            if($getstatus==null){
                if($gettotal->total>=0 && $gettotal->total<=63){
                    $waktudilayani  = "08:00 - 09:00 WIB";
                }elseif($gettotal->total>63 && $gettotal->total<=125){
                    $waktudilayani  = "09:00 - 10:00 WIB";
                }elseif($gettotal->total>125 && $gettotal->total<=188){
                    $waktudilayani  = "10:00 - 11:00 WIB";
                }elseif($gettotal->total>188 && $gettotal->total<=250){
                    $waktudilayani  = "11:00 - 12:00 WIB";
                }
                
                $this->db->where("aktif","aktif");
                $getvaksin = $this->db->get('status_vaksin')->row();
                $syarat = $this->input->post('syarat');
                $nama   = $this->input->post('nama');
                $jk     = $this->input->post('gender');
                $pekerjaan  = $this->input->post('pekerjaan');  
                $deskripsi  = $this->input->post('deskripsi');
                $tanggal= $this->input->post('tgllahir');
                $alamat = $this->input->post('alamat');
                $rt     = $this->input->post('rt');
                $rw     = $this->input->post('rw');
                $kelurahan = $this->input->post('kelurahan');
                $dusun  = $this->input->post('dusun');
                $kota   = $this->input->post('kota');
                $nohp   = $this->input->post('nohp');

                $noDaftarVaksin = "VCN".date('YmdHis')."-".$noktp;
                
                $status         = "DAFTAR";

                $data   = array(
                    "noDaftarVaksin"    => $noDaftarVaksin,
                    "syarat"            => $syarat,
                    "noktp"             => $noktp,
                    "nama"              => $nama,
                    "jk"                => $jk,
                    "pekerjaan"         => $pekerjaan,
                    "tgllahir"          => $tanggal,
                    "deskripsi"         => $deskripsi,
                    "alamat"            => $alamat,
                    "rt"                => $rt,
                    "rw"                => $rw,
                    "kelurahan"         => $kelurahan,
                    "dusun"             => $dusun,
                    "kota"              => $kota,
                    "tgldaftar"         => $tgldaftar,
                    "tgldilayani"       => $tgldilayani,
                    "waktudilayani"     => $waktudilayani,
                    "nohp"              => $nohp,
                    "status"            => $status,
                    "vaksin"            => $getvaksin->vaksin
                );

                $this->db->insert('t_daftarvaksin',$data);
            }else{
                $setdata['notif'] = "Anda Telah Terdaftar Untuk Vaksinasi Covid-19 untuk Tanggal  ".date('d-m-Y', strtotime($tgldilayani))."";
            }
        }
            
        }else{
            $setdata['notif'] = "Kuota Untuk Tanggal ".date('d-m-Y', strtotime($tgldilayani))." Sudah Penuh";
        }
            $setdata['total'] = $gettotal->total;
        redirect('vaksinasi/result_search/'.$noktp);
    }

    public function result(){
        $noktp = $this->input->post('noktp');

        $this->db->where('noktp',$noktp);
        $this->db->order_by('tgldaftar','desc');
        $data['getjadwal'] = $this->db->get('t_daftarvaksin')->result();

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
        $data['tanggal']		= date('Y-m-d');

		$this->load->view('portal/search_jadwal',$data);
    }

    public function result_search($noktp){

        $this->db->where('noktp',$noktp);
        $this->db->order_by('tgldaftar','desc');
        $data['getjadwal'] = $this->db->get('t_daftarvaksin')->result();

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
        $data['tanggal']		= date('Y-m-d');

		$this->load->view('portal/search_jadwal',$data);
    }

    public function rekap(){
        $noktp = $this->input->post('noktp');

        $data['rekap'] = array();

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
        $data['tanggal']		= date('Y-m-d');

		$this->load->view('portal/rekap_vaksin',$data);
    }

    public function rekap_vaksin(){
        $tglvaksin = $this->input->post('tglvaksin');

        $this->db->where('tgldilayani',$tglvaksin);
        $this->db->order_by('nama','desc');
        $data['rekap'] = $this->db->get('t_daftarvaksin')->result();

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
        $data['tanggal']		= $tglvaksin;

		$this->load->view('portal/rekap_vaksin',$data);
    }

    public function export(){

        $tglvaksin = $this->input->post('tglvaksindownload');

        $this->db->where('tgldilayani',$tglvaksin);
        $this->db->order_by('nama','desc');
        $data['rekap'] = $this->db->get('t_daftarvaksin')->result();

        $data['tgl'] = $tglvaksin;
        $this->load->view('portal/csvrekap',$data);
    }
}
