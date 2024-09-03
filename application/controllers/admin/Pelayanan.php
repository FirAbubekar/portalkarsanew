<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {

	function __construct(){
		parent::__construct();
		// cek session login
		if($this->session->userdata('username') == ""){
			redirect(base_url("admin/login"));
		}else{
			$this->data['a_dashboard']	= '';
			$this->data['a_profil'] 		= '';
			$this->data['a_tugasfungsi'] 		= '';
			$this->data['a_visi'] 		= '';
			$this->data['a_sejarah'] 		= '';
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
			$this->data['a_kegiatan']		= '';
			$this->data['a_penelitian']		= '';
			$this->data['a_inovasi']		= '';
			$this->data['a_akun']			= '';
			$this->data['a_admin']		= '';
		}
	}

	public function layanan($layanan)
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";
        $layanan = strtoupper(str_replace('-',' ', $layanan));
		$datas['username'] = $this->session->userdata('username');
		
		$this->data['a_pelayanan']	= 'active';
		$this->data['a_unggulan'] 	= 'active';

		$this->db->where('judul',$layanan);
		$akun = $this->db->get('t_pelayanan');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('judul',$layanan);
		$this->db->where('status','1');
		$akun = $this->db->get('t_pelayanan');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('judul',$layanan);
		$this->db->where('status','0');
		$akun = $this->db->get('t_pelayanan');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['layanan']		= $layanan;

        $this->db->order_by('');
        $this->db->where('judul',$layanan);
		$this->data['pelayanan'] = $this->db->get('t_pelayanan');

		$this->load->view('admin/pelayanan/tabel_pelayanan',$this->data);
	}

	public function save_pelayanan(){
		$this->load->library('upload');

		$pelayanan 		= $this->input->post('pelayanan');
		$sub_title 		= $this->input->post('sub_title');
		$jam 			= $this->input->post('jam');
		$keterangan		= $this->input->post('keterangan');
		$status 		= $this->input->post('status');
		if($sub_title==null){
			$file = $pelayanan;
		}
		else{
			$file = $sub_title;	
		}
		$file = preg_replace("/[^a-zA-Z]/","_",$file);
		$uploadPath = mkdir('file/pelayanan/'.strtolower(str_replace(' ','_',$file)));
		$number_of_files = count($_FILES['gambar']['name']); 


		$data = array('judul'			=> $pelayanan,
					  'sub_judul'		=> $sub_title,
					  'waktu_pelayanan'	=> $jam,
					  'keterangan'		=> $keterangan,
					  'status'			=> $status);
		$this->db->insert('t_pelayanan',$data);
		$layanan = strtolower(str_replace(' ','-', $pelayanan));

		$this->db->limit('1');
		$this->db->order_by('id','desc');
		$dbpel = $this->db->get('t_pelayanan')->row();

		for ($i=0; $i < $number_of_files; $i++) { 

			$imageData = $this->upload->data();
				$gambar = substr($_FILES['gambar']['name'][$i],-4);
				if($gambar=="jpeg"){
				$gambar = substr($_FILES['gambar']['name'][$i],-5);
				}
				$gambar = strtolower(str_replace(' ','_',$file."".$i."".$gambar));
				
		
			$_FILES['file']['name']       = $gambar;
            $_FILES['file']['type']       = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['gambar']['error'][$i];
			$_FILES['file']['size']       = $_FILES['gambar']['size'][$i];
			
            $config['upload_path'] = 'file/pelayanan/'.strtolower(str_replace(' ','_',$file));
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){
				
				$imageData['file_name'][$i] = strtolower($file);
                $uploadImgData[$i]['gambar'] = $imageData['file_name'][$i];

            }

		$data1 = array('id_pelayanan'	=> $dbpel->id,
					   'gambar'			=> $gambar		
					 );
		$this->db->insert('detail_pelayanan',$data1);
		}

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu <b>$pelayanan</b>, Dengan Sub-Judul  = <b>".$sub_title."</b>...");

		redirect('admin/pelayanan/layanan/'.$layanan);
	}

	public function edit_pelayanan($id){
		$this->load->library('upload');
		$pelayanan 		= $this->input->post('pelayanan');
		$sub_title 		= $this->input->post('sub_title');
		$jam 			= $this->input->post('jam');
		$keterangan		= $this->input->post('keterangan');
		$status 		= $this->input->post('status');

		if($sub_title==null){
			$file = $pelayanan;
		}
		else{
			$file = $sub_title;	
		}
		$file = strtolower($file);
		$file = preg_replace("/[^a-zA-Z]/","_",$file);
		if(!file_exists('file/pelayanan/'.$file)){
			$uploadPath = mkdir('file/pelayanan/'.strtolower(str_replace(' ','_',$file)));
		}else{
			
		}

		$number_of_files = count($_FILES['gambar']['name']); 
		// echo $number_of_files;
		$data = array('judul'			=> $pelayanan,
					  'sub_judul'		=> $sub_title,
					  'waktu_pelayanan'	=> $jam,
					  'keterangan'		=> $keterangan,
					  'status'			=> $status);
		$layanan = strtolower(str_replace(' ','-', $pelayanan));
		$this->db->where('id',$id);
		$this->db->update('t_pelayanan',$data);

		$this->db->where('id_pelayanan',$id);
		$getidgambar = $this->db->get('detail_pelayanan')->num_rows();
		$jumlahlanjut = $getidgambar;
		for ($i=0; $i < $number_of_files; $i++) { 

			$imageData = $this->upload->data();
			$gambar = substr($_FILES['gambar']['name'][$i],-4);
			
			if($gambar=="jpeg"){
				$gambar = substr($_FILES['gambar']['name'][$i],-5);
			}

			$gambar = strtolower(str_replace(' ','_',$file."".$jumlahlanjut."".$gambar));		
		
			$_FILES['file']['name']       = $gambar;
            $_FILES['file']['type']       = $_FILES['gambar']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['gambar']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['gambar']['error'][$i];
			$_FILES['file']['size']       = $_FILES['gambar']['size'][$i];
			
            $config['upload_path'] = 'file/pelayanan/'.strtolower(str_replace(' ','_',$file));
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){
				
				$imageData['file_name'][$i] = strtolower($file);
                $uploadImgData[$i]['gambar'] = $imageData['file_name'][$i];

            }

		$data1 = array('id_pelayanan'	=> $id,
					   'gambar'			=> $gambar		
					 );
		$this->db->insert('detail_pelayanan',$data1);
		$jumlahlanjut++;
		}

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu <b>$pelayanan</b>, Dengan Sub-Judul  = <b>".$sub_title."</b>...");

		redirect('admin/pelayanan/layanan/'.$layanan);
	}

    public function delete_pelayanan($id,$layanan){
		$this->db->where('id',$id);
		$dbpelayanan = $this->db->get('t_pelayanan')->row();

		if($dbpelayanan->sub_judul==null){
			$file = $dbpelayanan->judul;
		}else{
			$file = $dbpelayanan->sub_judul;
		}

		

		$file = strtolower(str_replace(' ', '_', $file));
		
		$this->db->where('id_pelayanan',$id);
		$dbpel = $this->db->get('detail_pelayanan');

		foreach ($dbpel->result() as $row) {
		unlink('file/pelayanan/'.$file.'/'.$row->gambar);
			
		$this->db->where('id_pelayanan',$id);
		$this->db->delete('detail_pelayanan');

		}
		rmdir('file/pelayanan/'.$file);

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Alur ");
		$this->db->where('id',$id);
		$this->db->delete('t_pelayanan');
		redirect('admin/pelayanan/layanan/'.$layanan);
	}
	public function tarif()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";

        $datas['username'] = $this->session->userdata('username');

		$this->data['a_pelayanan']	= 'active';
		$this->data['a_tarif'] 			= 'active';
		
		$this->db->select('id, nama,jenis_pelayanan,tarif');
		$this->db->where('nama','Instalasi Gawat Darurat');
		$this->data['igd'] = $this->db->get('t_tarif');

		$this->db->select('id, nama,jenis_pelayanan, tarif_rajal, executive');
		$this->db->where('nama','Rawat Jalan');
		$this->data['rajal'] = $this->db->get('t_tarif');

		$this->db->select('id, nama,jenis_pelayanan, kelas1, kelas2, kelas3, kelas_utama');
		$this->db->where('nama','Rawat Inap');
		$this->data['ranap'] = $this->db->get('t_tarif');

		$this->load->view('admin/tarif/tabel_tarif',$this->data);
	}

	public function save_tarif_igd(){
		$nama 		= "Instalasi Gawat Darurat";
		$jenis	 	= $this->input->post('jenis');
		$tarif	 	= $this->input->post('tarif');
		
		$data = array('nama'			=> $nama,
					  'jenis_pelayanan'	=> $jenis,
					  'tarif'			=> $tarif,
					  );
		$this->db->insert('t_tarif',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Tarif Pada Ruangan  = <b>".$nama."</b>...");

		redirect('admin/pelayanan/tarif');
	}

	public function save_tarif_rajal(){
		$nama 			= "Rawat Jalan";
		$jenis	 		= $this->input->post('jenis');
		$tarif_rajal	= $this->input->post('tarif_rajal');
		$tarif_executive= $this->input->post('tarif_executive');
		
		$data = array('nama'			=> $nama,
					  'jenis_pelayanan'	=> $jenis,
					  'tarif_rajal'		=> $tarif_rajal,
					  'executive'		=> $tarif_executive
					  );
		$this->db->insert('t_tarif',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Tarif Pada Ruangan  = <b>".$nama."</b>...");
		redirect('admin/pelayanan/tarif');
	}
	
	public function save_tarif_ranap(){
		$nama 	= "Rawat Inap";
		$jenis	= $this->input->post('jenis');
		$kelas1	= $this->input->post('tarif_kelas1');
		$kelas2	= $this->input->post('tarif_kelas2');
		$kelas3	= $this->input->post('tarif_kelas3');
		$kelasu	= $this->input->post('tarif_kelas_u');
		
		$data = array('nama'			=> $nama,
					  'jenis_pelayanan'	=> $jenis,
					  'kelas1'		=> $kelas1,
					  'kelas2'		=> $kelas2,
					  "kelas3"		=> $kelas3,
					  "kelas_utama"	=> $kelasu
					  );
		$this->db->insert('t_tarif',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Tarif Pada Ruangan  = <b>".$nama."</b>...");
		redirect('admin/pelayanan/tarif');
	}

	public function edit_tarif_igd($id){
		$nama 		= "Instalasi Gawat Darurat";
		$jenis	 	= $this->input->post('jenis');
		$tarif	 	= $this->input->post('tarif');
		
		$data = array('nama'			=> $nama,
					  'jenis_pelayanan'	=> $jenis,
					  'tarif'			=> $tarif,
					  );
		
		$this->db->where('id',$id);			  
		$this->db->update('t_tarif',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Menu Tarif Pada Ruangan = <b>".$nama."</b>...");
		redirect('admin/pelayanan/tarif');
	}

	public function edit_tarif_rajal($id){
		$nama 			= "Rawat Jalan";
		$jenis	 		= $this->input->post('jenis');
		$tarif_rajal	= $this->input->post('tarif_rajal');
		$tarif_executive= $this->input->post('tarif_executive');
		
		$data = array('nama'			=> $nama,
					  'jenis_pelayanan'	=> $jenis,
					  'tarif_rajal'		=> $tarif_rajal,
					  'executive'		=> $tarif_executive
					  );
		$this->db->where('id',$id);			  
		$this->db->update('t_tarif',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Menu Tarif Pada Ruangan = <b>".$nama."</b>...");
		redirect('admin/pelayanan/tarif');
	}

	public function edit_tarif_ranap($id){
		$nama 	= "Rawat Inap";
		$jenis	= $this->input->post('jenis');
		$kelas1	= $this->input->post('tarif_kelas1');
		$kelas2	= $this->input->post('tarif_kelas2');
		$kelas3	= $this->input->post('tarif_kelas3');
		$kelasu	= $this->input->post('tarif_kelas_u');
		
		$data = array('nama'			=> $nama,
					  'jenis_pelayanan'	=> $jenis,
					  'kelas1'		=> $kelas1,
					  'kelas2'		=> $kelas2,
					  "kelas3"		=> $kelas3,
					  "kelas_utama"	=> $kelasu
					  );
		
		$this->db->where('id',$id);
		$this->db->update('t_tarif',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Menu Tarif Pada Ruangan = <b>".$nama."</b>...");
		redirect('admin/pelayanan/tarif');
	}

	public function delete_tarif_igd($id){
		
		$this->db->where('id',$id);
		$this->db->delete('t_tarif');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Tarif ");

		redirect('admin/pelayanan/tarif');
	}
	 public function delete_tarif_ranap($id){
		
		$this->db->where('id',$id);
		$this->db->delete('t_tarif');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Tarif ");

		redirect('admin/pelayanan/tarif');
	}

	public function delete_tarif_rajal($id){
		
		$this->db->where('id',$id);
		$this->db->delete('t_tarif');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Tarif ");

		redirect('admin/pelayanan/tarif');
	}

	public function alur()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";

		$datas['username'] = $this->session->userdata('username');
		
		$this->data['a_pelayanan']	= 'active';
		$this->data['a_alur'] 		= 'active';

		$akun = $this->db->get('t_alur');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status','1');
		$akun = $this->db->get('t_alur');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status','0');
		$akun = $this->db->get('t_alur');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->data['alur'] = $this->db->get('t_alur');

		$this->load->view('admin/alur/tabel_alur',$this->data);
	}

	public function save_alur(){
		$alur 		= strtoupper($this->input->post('alur'));
		$status	 	= $this->input->post('status');

		$config['upload_path']          = 'file/alur';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;
		
		$gambar = substr($_FILES['gambar']['name'],-4);
		$gambar = strtolower(str_replace(' ','_',$alur."".$gambar));
		$config['file_name'] 			= strtolower($alur);
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' => $this->upload->data());
		}
		
		$data = array('alur'			=> $alur,
					  'gambar'			=> $gambar,
					  'status'			=> $status,
					  );
		$this->db->insert('t_alur',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Alur, Dengan Judul  = <b>".$alur."</b>...");

		redirect('admin/pelayanan/alur');
	}

	public function edit_alur($id){

		$this->db->where('id',$id);
		$dbalur = $this->db->get('t_alur')->row();

		$alur 		= strtoupper($this->input->post('alur'));
		$status	 	= $this->input->post('status');
		$gambar1	= $this->input->post('gambar1');
		
		$config['upload_path']          = 'file/alur';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;

		if($_FILES['gambar']['name']==null){
			if($dbalur->gambar!=null){
				$gambar = $dbalur->gambar;
			}
		}
		else{
		unlink('file/alur/'.$dbalur->gambar);
		$gambar = substr($_FILES['gambar']['name'],-4);
		$gambar = strtolower(str_replace(' ','_',$alur."".$gambar));
		$config['file_name'] 			= strtolower($alur);
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			
			$data = array('upload_data' => $this->upload->data());
		}
		}
		
		$data = array('alur'			=> $alur,
					  'gambar'			=> $gambar,
					  'status'			=> $status,
					  );
		
		$this->db->where('id',$id);
		$this->db->update('t_alur',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Alur, Dengan Judul  = <b>".$alur."</b>...");

		redirect('admin/pelayanan/alur');
	}
	
	public function delete_alur($id){
		$this->db->where('id',$id);
		$dbalur = $this->db->get('t_alur')->row();

		unlink('file/alur/'.$dbalur->gambar);

		$this->db->where('id',$id);
		$this->db->delete('t_alur');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Alur ");

		redirect('admin/pelayanan/alur');
	}

	public function jadwal()
	{
		$this->data['title'] = "Admin | RSU Karsa Husada";
		
		$datas['username'] = $this->session->userdata('username');
		
		$this->data['a_pelayanan']	= 'active';
		$this->data['a_jadwal'] 		= 'active';

		$akun = $this->db->get('t_jadwal_dokter');
		$this->data['total'] = $akun->num_rows();

		$this->db->where('status','1');
		$akun = $this->db->get('t_jadwal_dokter');
		$this->data['aktif'] = $akun->num_rows();

		$this->db->where('status','0');
		$akun = $this->db->get('t_jadwal_dokter');
		$this->data['nonaktif'] = $akun->num_rows();

		$this->db->order_by('nama','asc');
		$this->data['jadwal'] = $this->db->get('t_jadwal_dokter');

		$this->load->view('admin/jadwal/tabel_jadwal', $this->data);
    }
	
	public function save_jadwal(){
		
		$nama	 	= $this->input->post('nama');
		$unit	 	= $this->input->post('unit');
		$jadwal	 	= $this->input->post('jadwal');
		$status	 	= $this->input->post('status');
		
		if($_FILES['gambar']['name']==null){
			$gambar = "";
		}else{
		$config['upload_path']          = 'file/jadwal';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png|jpeg';
		$config['max_size']             = 10000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;

		$gambar = substr($_FILES['gambar']['name'],-4);
		if($gambar=="jpeg"){
		$gambar = substr($_FILES['gambar']['name'],-5);
		}
		$nama = str_replace('.', '_', $nama);
		$gambar = strtolower(str_replace(' ','_',$nama."".$gambar));
		$config['file_name'] 			= strtolower($nama);

		$this->load->library('upload', $config);
			if ( !$this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
			}else{
				$data = array('upload_data' => $this->upload->data());
			}
		}
		$data = array('nama'			=> $nama,
					  'unit'			=> $unit,
					  'jadwal'			=> $jadwal,
					  'gambar'			=> $gambar,
					  'status'			=> $status,
					  );

		$this->db->insert('t_jadwal_dokter',$data);

		$this->session->set_flashdata("success","<b>SAVE</b>.. Menambahkan Data Pada Menu Jadwal Dokter, Dengan Nama  = <b>".$nama."</b>...");

		redirect('admin/pelayanan/jadwal');
	}

	public function edit_jadwal($id){

		$this->db->where('id',$id);
		$dbjadwal = $this->db->get('t_jadwal_dokter')->row();

		$nama	 	= $this->input->post('nama');
		$unit	 	= $this->input->post('unit');
		$jadwal	 	= $this->input->post('jadwal');
		$status	 	= $this->input->post('status');
		$gambar1	= $this->input->post('gambar1');
		
		$config['upload_path']          = 'file/jadwal';
		$config['allowed_types']        = 'pdf|docx|excel|jpg|png|jpeg';
		$config['max_size']             = 10000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;

		if($_FILES['gambar']['name']==null){
			if($dbjadwal->gambar!=null){
				$gambar = $dbjadwal->gambar;
			}
		}
		else{
		unlink('file/jadwal/'.$dbjadwal->gambar);
		$gambar = substr($_FILES['gambar']['name'],-4);
		if($gambar=="jpeg"){
		$gambar = substr($_FILES['gambar']['name'],-5);
		}
		$nama = str_replace('.', '_', $nama);
		$gambar = strtolower(str_replace(' ','_',$nama."".$gambar));
		$config['file_name'] 			= strtolower($nama);
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload('gambar')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			
			$data = array('upload_data' => $this->upload->data());
		}
		}
		
		$data = array('nama'			=> $nama,
					  'unit'			=> $unit,
					  'jadwal'			=> $jadwal,
					  'gambar'			=> $gambar,
					  'status'			=> $status,
					  );
					  
					  

		$this->db->where('id',$id);
		$this->db->update('t_jadwal_dokter',$data);

		$this->session->set_flashdata("update","<b>UPDATE</b>.. Merubah Data Pada Menu Jadwal Dokter, Dengan Nama  = <b>".$nama."</b>...");

		redirect('admin/pelayanan/jadwal');
	}
	
	public function delete_jadwal($id){
		
		$this->db->where('id',$id);
		$dbjadwal = $this->db->get('t_jadwal_dokter')->row();

		if($dbjadwal->gambar!=null){
			unlink('file/jadwal/'.$dbjadwal->gambar);
		}

		$this->db->where('id',$id);
		$this->db->delete('t_jadwal_dokter');

		$this->session->set_flashdata("delete","<b>DELETE</b>.. Menghapus Data Pada Menu Jadwal Dokter ");

		redirect('admin/pelayanan/jadwal');
	}
}
