<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wbs extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->API = "http://103.35.153.52/apirsukh/zonaintegritas/";
        $this
            ->load
            ->library('session');
        $this
            ->load
            ->library('curl');

        // cek session login
            $this->data['a_dashboard']    = '';
            $this->data['a_profil']     = '';
            $this->data['a_visi']         = '';
            $this->data['a_sejarah']     = '';
            $this->data['a_tugasfungsi'] = '';
            $this->data['a_sdm']         = '';
            $this->data['a_organisasi'] = '';
            $this->data['a_pelayanan']    = '';
            $this->data['a_unggulan']     = '';
            $this->data['a_igd']         = '';
            $this->data['a_rajal']         = '';
            $this->data['a_ranap']         = '';
            $this->data['a_medis']        = '';
            $this->data['a_nonmedis']    = '';
            $this->data['a_tarif']         = '';
            $this->data['a_alur']         = '';
            $this->data['a_jadwal']     = '';
            $this->data['a_perpustakaan'] = '';
            $this->data['a_ppid']         = '';
            $this->data['a_diklat']    = '';
            $this->data['a_informasi']    = '';
            $this->data['a_berita']        = '';
            $this->data['a_ikm']            = '';
            $this->data['a_mutu']            = '';
            $this->data['a_sakip']        = '';
            $this->data['a_inovasi']        = '';
            $this->data['a_kegiatan']        = '';
            $this->data['a_penelitian']        = '';
            $this->data['a_akun']            = '';
            $this->data['a_admin']        = '';
        }

    public function index()
    {
        $this->data['title'] = "Admin | RSU Karsa Husada";

        $datas['username'] = $this->session->userdata('username');

        $this->data['a_kegiatan']        = 'active';

        $this->db->order_by('tgl_mulai', 'asc');
        $this->data['kegiatan'] = $this->db->get('t_kegiatan');

        $key = '642ec7d30e4febe39ee3b9e4214d8766ddd66722fa63015484a6befad41b4ebb';

        $message = json_encode('data');

        $send_message = $this->inacbg_encrypt($message, $key);

        $jsonmessage = ["send_message" => $send_message, "key" => $key];
        
         $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => $this->API . "getdata/getwbs_all",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => http_build_query($jsonmessage),
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded"
                ),
            ));

            $response = curl_exec($curl);
            $addantrian = json_decode($response);

        $retcheck     = $this->inacbg_decrypt($addantrian->response, $key);

        $this->data['res_check'] = json_decode($retcheck);

        // echo json_encode($res_check);

        $this->load->view('admin/wbs/tabel_wbs', $this->data);
    }

    public function get_detail()
    {
        $id = $this->input->post('id');

        $key = '642ec7d30e4febe39ee3b9e4214d8766ddd66722fa63015484a6befad41b4ebb';

        $message = json_encode($id);

        $send_message = $this->inacbg_encrypt($message, $key);

        $jsonmessage = ["send_message" => $send_message, "key" => $key];

        
         $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => $this->API . "getdata/getwbs_detail",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => http_build_query($jsonmessage),
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded"
                ),
            ));

            $response = curl_exec($curl);
            $addantrian = json_decode($response);

        $retcheck     = $this->inacbg_decrypt($addantrian->response, $key);

        echo $retcheck;
    }

    public function save_kegiatan()
    {
        date_default_timezone_set("Asia/Jakarta");
        $id             = "KGTN" . date('YmdHis');
        $nama_kegiatan     = $this->input->post('nama_kegiatan');
        $deskripsi         = $this->input->post('deskripsi');
        $tgl_mulai       = $this->input->post('tgl_mulai');
        $tgl_akhir         = $this->input->post('tgl_akhir');
        $lokasi         = $this->input->post('lokasi');
        $status         = $this->input->post('status');

        $data = array(
            'id'              => $id,
            'nama_kegiatan' => $nama_kegiatan,
            'deskripsi'      => $deskripsi,
            'tgl_mulai'      => $tgl_mulai,
            'tgl_akhir'      => $tgl_akhir,
            'lokasi'        => $lokasi,
            'status'          => $status
        );
        $this->db->insert('t_kegiatan', $data);

        $this->session->set_flashdata("success", "<b>SAVE</b>.. Menambahkan Data Pada Menu Sejarah, Pada Tahun = <b>" . $nama_kegiatan . "</b>...");

        redirect('admin/kegiatan');
    }

    public function edit_kegiatan($id)
    {

        $nama_kegiatan     = $this->input->post('nama_kegiatan');
        $deskripsi         = $this->input->post('deskripsi');
        $tgl_mulai       = $this->input->post('tgl_mulai');
        $tgl_akhir         = $this->input->post('tgl_akhir');
        $lokasi         = $this->input->post('lokasi');
        $status         = $this->input->post('status');

        $data = array(
            'nama_kegiatan' => $nama_kegiatan,
            'deskripsi'      => $deskripsi,
            'tgl_mulai'      => $tgl_mulai,
            'tgl_akhir'      => $tgl_akhir,
            'lokasi'        => $lokasi,
            'status'          => $status
        );


        $this->db->where("id", $id);
        $this->db->update('t_kegiatan', $data);

        $this->session->set_flashdata("success", "<b>UPDATE</b>.. Menambahkan Data Pada Menu Kegiatan, Pada Tahun = <b>" . $tahun . "</b>...");

        redirect('admin/kegiatan');
    }

    public function delete_kegiatan($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('t_kegiatan');

        $this->session->set_flashdata("delete", "<b>DELETE</b>.. Berhasil Menghapus Data Kegiatan ");

        redirect('admin/kegiatan');
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
