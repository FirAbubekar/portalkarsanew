<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wbs extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // $this->load->library('pdf');
        // cek session login
        // if ($this->session->userdata('username') == "") {
        //     redirect(base_url("dashboard/login"));
        // }
        $this->API = "http://103.35.153.52/apirsukh/zonaintegritas/";
        $this
            ->load
            ->library('session');
        $this
            ->load
            ->library('curl');
        $this
            ->load
            ->helper('form');
        $this
            ->load
            ->helper('url');
    }

    public function index()
    {
        $data['s_beranda']        = '';
        $data['s_profil']         = '';
        $data['s_sejarah']         = '';
        $data['s_visi']         = '';
        $data['s_tugas_fungsi'] = '';
        $data['s_sdm']             = '';
        $data['s_struktur']     = '';
        $data['s_pelayanan']    = '';
        $data['s_unggulan']     = '';
        $data['s_igd']             = '';
        $data['s_rajal']         = '';
        $data['s_ranap']         = '';
        $data['s_penunjang']    = '';
        $data['s_tarif']         = '';
        $data['s_alur']         = '';
        $data['s_jadwal']         = '';
        $data['s_perpustakaan'] = '';
        $data['s_ppid']         = 'active';
        $data['s_informasi']    = '';
        $data['s_berita']        = '';
        $data['s_ikm']            = '';
        $data['s_mutu']            = '';
        $data['s_sakip']        = '';

        $data['location']        = 'wbs';

        $title                    = 'WHISTLEBLOWING SYSTEM';
        $data['title']            = $title;

        $data['s_pesan']        = '';

        if ($this->input->post('simpan_laporan') != null) {
            $key = '642ec7d30e4febe39ee3b9e4214d8766ddd66722fa63015484a6befad41b4ebb';

            $unit_pelapor = $this->input->post('unit_pelapor');
            $notelp_pelapor = $this->input->post('notelp_pelapor');
            $status_pelapor = $this->input->post('status_pelapor');
            $nama_terlapor = $this->input->post('nama_terlapor');
            $status_terlapor = $this->input->post('status_terlapor');
            $tanggal_terlapor = $this->input->post('tanggal_terlapor');
            $arrkategori_laporan = $this->input->post('kategori_laporan');
            $kategori_laporan = implode(',', $arrkategori_laporan);
            $sub_pelayanan = $this->input->post('sub_pelayanan');
            $kronologi = $this->input->post('kronologi');
            $bukti_pendukung = $this->input->post('bukti_pendukung');
            $adakah_saksi = $this->input->post('adakah_saksi');
            $nama_saksi = $this->input->post('nama_saksi');
            $unit_saksi = $this->input->post('unit_saksi');
            $no_saksi = $this->input->post('no_saksi');
            $solusi = $this->input->post('solusi');

            $arr_data = array(
                "pelapor" => "--",
                "unit_pelapor" => $unit_pelapor,
                "notelp_pelapor" => $notelp_pelapor,
                "status_pelapor" => $status_pelapor,
                "nama_terlapor" => $nama_terlapor,
                "status_terlapor" => $status_terlapor,
                "tanggal_terlapor" => $tanggal_terlapor,
                "kategori_laporan" => $kategori_laporan,
                "sub_pelayanan" => $sub_pelayanan,
                "kronologi" => $kronologi,
                "bukti_pendukung" => $bukti_pendukung,
                "adakah_saksi" => $adakah_saksi,
                "nama_saksi" => $nama_saksi,
                "unit_saksi" => $unit_saksi,
                "no_saksi" => $no_saksi,
                "solusi" => $solusi,
            );

            $message = json_encode($arr_data);

            $send_message = $this->inacbg_encrypt($message, $key);

            $jsonmessage = ["send_message" => $send_message, "key" => $key];

            $addantrian = json_decode($this->curl->simple_get($this->API . "getdata/insert_form", $jsonmessage, array(CURLOPT_BUFFERSIZE => 10)));

            $retcheck     = $this->inacbg_decrypt($addantrian->response, $key);

            $res_check = json_decode($retcheck);

            if ($addantrian->code == "200") {
                $data['s_pesan']        = 'Terima Kasih. Laporan Sudah Terkirim, dan Akan Tindaklanjuti!';
            } else {
                $data['s_pesan']        = 'Mohon Maaf. Pastikan Semua Inputan Sudah Sesuai!';
            }
            $this->load->view('portal/form_wbs', $data);
        } else {
            $data['s_pesan']        = '';
            $this->load->view('portal/form_wbs', $data);
        }
    }

    public function simpan_pesan()
    {
    }

    public function check_login()
    {
        $key = '642ec7d30e4febe39ee3b9e4214d8766ddd66722fa63015484a6befad41b4ebb';

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // $username = "BEKAR";
        // $password = "BEKAR123";

        $ch = curl_init();

        $arr_login = array(
            "username"  => $username,
            "password"  => $password
        );

        $message = json_encode($arr_login);

        $send_message = $this->inacbg_encrypt($message, $key);

        $jsonmessage = ["send_message" => $send_message, "key" => $key];

        $addantrian = json_decode($this->curl->simple_get($this->API . "getdata/check_login", $jsonmessage, array(CURLOPT_BUFFERSIZE => 10)));

        $retcheck     = $this->inacbg_decrypt($addantrian->response, $key);

        $res_check = json_decode($retcheck);

        if ($addantrian->code == "200") {
            echo json_encode($res_check->nip);
        } else {
            echo json_encode("kosong");
        }
    }

    public function tes()
    {
        // Z5aSeBHv3U-JoY4Mag!j
        $params = array(
            'token' => 'x9gjhnyn1tcxn1us',
            'to' => '+6285785225533',
            'body' => 'WhatsApp API on UltraMsg.com works good'
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.fonnte.com/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('target'=>$target),
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
        ));
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => "https://api.ultramsg.com/instance80064/messages/chat",
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => "",
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 30,
        //     CURLOPT_SSL_VERIFYHOST => 0,
        //     CURLOPT_SSL_VERIFYPEER => 0,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => "POST",
        //     CURLOPT_POSTFIELDS => http_build_query($params),
        //     CURLOPT_HTTPHEADER => array(
        //         "content-type: application/x-www-form-urlencoded"
        //     ),
        // ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    }

    function inacbg_encrypt($data, $key)
    {

        /// make binary representasion of $key
        $key = hex2bin($key);
        /// check key length, must be 256 bit or 32 bytes
        if (mb_strlen($key, "8bit") !== 32) {
            throw new Exception("Needs a 256-bit key!");
        }
        /// create initialization vector
        $iv_size = openssl_cipher_iv_length("aes-256-cbc");
        $iv = openssl_random_pseudo_bytes($iv_size); // dengan catatan dibawah
        /// encrypt
        $encrypted = openssl_encrypt($data, "aes-256-cbc", $key, OPENSSL_RAW_DATA, $iv);
        /// create signature, against padding oracle attacks
        $signature = mb_substr(hash_hmac("sha256", $encrypted, $key, true), 0, 10, "8bit");
        /// combine all, encode, and format
        $encoded = chunk_split(base64_encode($signature . $iv . $encrypted));
        return $encoded;
    }
    function inacbg_decrypt($str, $strkey)
    {
        /// make binary representation of $key
        $key = hex2bin($strkey);
        /// check key length, must be 256 bit or 32 bytes
        if (mb_strlen($key, "8bit") !== 32) {
            throw new Exception("Needs a 256-bit key!");
        }
        /// calculate iv size
        $iv_size = openssl_cipher_iv_length("aes-256-cbc");
        /// breakdown parts
        $decoded = base64_decode($str);
        $signature = mb_substr($decoded, 0, 10, "8bit");
        $iv = mb_substr($decoded, 10, $iv_size, "8bit");
        $encrypted = mb_substr($decoded, $iv_size + 10, NULL, "8bit");
        /// check signature, against padding oracle attack
        $calc_signature = mb_substr(hash_hmac("sha256", $encrypted, $key, true), 0, 10, "8bit");
        if (!$this->inacbg_compare($signature, $calc_signature)) {
            return "SIGNATURE_NOT_MATCH"; /// signature doesn't match
        }
        $decrypted = openssl_decrypt($encrypted, "aes-256-cbc", $key, OPENSSL_RAW_DATA, $iv);
        return $decrypted;
    }
    function inacbg_compare($a, $b)
    {
        /// compare individually to prevent timing attacks

        /// compare length
        if (strlen($a) !== strlen($b)) return false;

        /// compare individual
        $result = 0;
        for ($i = 0; $i < strlen($a); $i++) {
            $result |= ord($a[$i]) ^ ord($b[$i]);
        }

        return $result == 0;
    }
}
