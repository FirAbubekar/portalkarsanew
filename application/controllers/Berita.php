<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://103.80.89.163:8080/ci-restserver-master/index.php/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

	public functio id_peserta(){
		$params = array('id'=>  $this->uri->segment(3));
		$data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/pendaftaran',$params));
	}

	

	public function backup()
	{
// 		$IP  = "192.168.200.2";
// $Key = "1";

// $Connect = fsockopen($IP, "3306", $errno, $errstr, 1);
// if ($Connect) {
//   $soap_request = "<GetAttLog>
//     <ArgComKey xsi:type=\"xsd:integer\">".$Key."</ArgComKey>
//     <Arg><PIN xsi:type=\"xsd:integer\">All</PIN></Arg>
//   </GetAttLog>";

//   $newLine = "\r\n";
//   fputs($Connect, "POST /iWsService HTTP/1.0".$newLine);
//   fputs($Connect, "Content-Type: text/xml".$newLine);
//   fputs($Connect, "Content-Length: ".strlen($soap_request).$newLine.$newLine);
//   fputs($Connect, $soap_request.$newLine);
//   $buffer = "";
//   while($Response = fgets($Connect, 1024)) {
//     $buffer = $buffer.$Response;
//   }
//   echo "ini";
// } else echo "Koneksi Gagal";

// $buffer = Parse_Data($buffer,"<GetAttLogResponse>","</GetAttLogResponse>");
// $buffer = explode("\r\n",$buffer);

// for ($a=0; $a<count($buffer); $a++) {
//   $data=Parse_Data($buffer[$a],"<Row>","</Row>");

//   $export[$a]['pin'] = Parse_Data($data,"<PIN>","</PIN>");
//   $export[$a]['waktu'] = Parse_Data($data,"<DateTime>","</DateTime>");
//   $export[$a]['status'] = Parse_Data($data,"<Status>","</Status>");
// }

// echo '<pre>';
// print_r($export);
		//$this->db->truncate('t_pegawai');

		$datakontak = json_decode($this->curl->simple_get($this->API.'/pendaftaran'));
		print_r($datakontak);
		// foreach ($datakontak as $row) {
		// 	$data = array(
		// 			"NIP"=>$row->NIP,
		// 			"Nama"=>$row->Nama,
		// 			"J_gol"=>$row->J_gol,
		// 			"agama"=>$row->agama,
		// 			"JK"=>$row->JK,
		// 			"menikah"=>$row->menikah,
		// 			"jenjang"=>$row->jenjang,
		// 			"Temp_tgllahir"=>$row->Temp_tgllahir,
		// 			"Jurusan"=>$row->Jurusan,
		// 			"Tgl_Lahir"=>$row->Tgl_Lahir,
		// 			"Alamat"=>$row->Alamat,
		// 			"Telp"=>$row->Telp,
		// 			"email"=>$row->email,
		// 			"nama_sekolah"=>$row->nama_sekolah,
		// 			"tahun_lulus"=>$row->tahun_lulus,
		// 			"jabatan"=>$row->jabatan,
		// 			"BPJSKES"=>$row->BPJSKES,
		// 			"nik"=>$row->nik,
		// 			"tenaga"=>$row->tenaga,
		// 			"gaji"=>$row->gaji,
		// 			"npwp"=>$row->npwp,
		// 			"foto"=>$row->foto,
		// 			"rek_bank"=>$row->rek_bank
		// 	);
		// 	$this->db->insert('t_pegawai',$data);
		// }
		
		//$this->load->view('portal/berita');
	}
	function Parse_Data ($data,$p1,$p2) {
		$data = " ".$data;
		$hasil = "";
		$awal = strpos($data,$p1);
		if ($awal != "") {
		  $akhir = strpos(strstr($data,$p1),$p2);
		  if ($akhir != ""){
			$hasil=substr($data,$awal+strlen($p1),$akhir-strlen($p1));
		  }
		}
		return $hasil;    
	  }
    public function readmore()
	{
	$this->load->view('portal/readmore');
	}
	public function rawat_jalan()
	{
		$this->load->view('portal/pelayanan');
    }
    public function rawat_inap()
	{
		$this->load->view('portal/pelayanan');
	}
	public function penunjang()
	{
		$this->load->view('portal/pelayanan_penunjang');
	}
	public function tarif()
	{
		$this->load->view('portal/tarif');
	}
	public function alur()
	{
		$this->load->view('portal/alur');
	}
	public function jadwal_dokter()
	{
		$this->load->view('portal/jadwal_dokter');
	}
}
