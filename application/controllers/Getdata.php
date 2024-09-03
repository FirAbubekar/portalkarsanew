<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getdata extends CI_Controller {

	public function index()
	{
		$getberita = $this->db->query("
		SELECT
            t_berita.id,
            t_berita.judul,
            t_berita.tanggal,
            t_berita.penulis,
            t_berita.image
        FROM
            t_berita
        WHERE
            t_berita.kategori NOT LIKE 'video'
        ORDER BY
            t_berita.publikasi ASC
		")->result();
		
		echo json_encode($getberita);
	}
	
	public function readmore($idberita){
	    $getberita = $this->db->query("
		SELECT
            t_berita.id,
            t_berita.judul,
            t_berita.tanggal,
            t_berita.penulis,
            t_berita.image,
            t_berita.deskripsi
        FROM
            t_berita
        WHERE
            t_berita.id = '".$idberita."'
		")->row();
		
		echo json_encode($getberita);
	}
}
