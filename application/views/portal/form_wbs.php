<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php $this->load->view('portal/template/header_css'); ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_portal/css/pendukung/pelayanan.css">

</head>

<body>
    <!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <style>
        input {
            height: 20px;
        }

        .v_radio {
            text-align: left;
        }

        @media screen and (max-width: 760px) {
            .v_radio {
                text-align: center;
            }
        }
    </style>

    <div class="wrapper">
        <!--Header Area Start-->
        <?php $this->load->view('portal/template/menu'); ?>
        <!--Header Area End-->
        <!--Brand Area Start-->
        <section id="breadcrumb">
            <img src="<?php echo base_url(); ?>assets_portal/img/bg/bg1.png" alt="big-image-beach" class="bg__breadcrumb" />
            <div class="breadcrumb__overlay">
                <div class="container container__padding">
                    <div class="sub-text">
                        <p> Beranda </p> <img src="<?php echo base_url(); ?>assets_portal/img/icon/arrow_breadcrumb.svg" alt="arrow RSUD Karsa Husada">
                        <p><?php echo $title; ?></p>
                    </div>
                    <h1><?php echo $title; ?></h1>
                </div>
            </div>
        </section>
        <div class="fun-factor-area bg-img ">
            <div class="container">
                <div class="ruangan">
                    <h3>FORM PERMOHONAN INFORMASI</h3>
                </div>
                <div class="describe">
                    <div class="describe">
                        <div class="jam">Masukan Sesuai Data Yang Valid : </div>
                        <div class="d_ket">
                            <form action="<?php echo base_url('wbs'); ?>" method="post">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <div style="display: inline;">
                                                    <div class="form-group">
                                                        <label for="">Username</label>
                                                        <input type="text" name="username" class="form-control" placeholder="Masukan Username" id="username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Password</label>
                                                        <input type="password" name="password" class="form-control" placeholder="Masukan Password" id="password">
                                                    </div>
                                                    <span class="btn btn-info btn-md" style="width: 100%;" onclick="check_validasi()">Periksa Akun</span>
                                                    <hr>
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Unit yang Melaporkan</label>
                                                    <input type="text" name="unit_pelapor" class="form-control" placeholder="Unit yang Melaporkan" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">No. Telp</label>
                                                    <input type="text" name="notelp_pelapor" class="form-control" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Status Kepegawaian</label>
                                                    <div class="col-md-12 v_radio">
                                                        <div class="col-md-4">
                                                            <div class="col-md-3">
                                                                <input type="radio" id="male" name="status_pelapor" value="PNS">
                                                            </div>
                                                            <div class="col-md-9">
                                                                PNS<br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-3">
                                                                <input type="radio" id="male" name="status_pelapor" value="PPPK">
                                                            </div>
                                                            <div class="col-md-9">
                                                                PPPK<br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-3">
                                                                <input type="radio" id="male" name="status_pelapor" value="BLUD">
                                                            </div>
                                                            <div class="col-md-9">
                                                                BLUD<br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Unit Kerja atau Nama Identitas</label>
                                                    <input type="text" name="nama_terlapor" class="form-control" placeholder="Nama Lengkap" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Keterangan (unit, Status Kepegawain)</label>
                                                    <div class="col-md-12 v_radio">
                                                        <div class="col-md-4">
                                                            <div class="col-md-3">
                                                                <input type="radio" id="male" name="status_terlapor" value="PNS">
                                                            </div>
                                                            <div class="col-md-9">
                                                                PNS<br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-3">
                                                                <input type="radio" id="male" name="status_terlapor" value="PPPK">
                                                            </div>
                                                            <div class="col-md-9">
                                                                PPPK<br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="col-md-3">
                                                                <input type="radio" id="male" name="status_terlapor" value="BLUD">
                                                            </div>
                                                            <div class="col-md-9">
                                                                BLUD<br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="">Unit Kerja</label>
                                                    <input type="text" name="unit_terlapor" class="form-control" placeholder="Unit yang Melaporkan" id="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Tanggal Laporan</label>
                                                    <input type="date" name="tanggal_terlapor" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr style="border-top: 10px solid #fd8806;">
                                            <div class="form-group">
                                                <label for="">Kategori Laporan Kejadian</label>
                                                <div class="col-md-12 v_radio">
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="checkbox" id="male" name="kategori_laporan[]" value="PPPK">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Budaya Keselamatan<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="checkbox" id="male" name="kategori_laporan[]" value="BLUD">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Etika Pegawai<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="checkbox" id="male" name="kategori_laporan[]" value="PNS">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Kepegawaian<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="checkbox" id="male" name="kategori_laporan[]" value="PNS">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Sarana dan Prasarana<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="checkbox" id="male" name="kategori_laporan[]" value="PNS">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Pengadaan<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="checkbox" id="male" name="kategori_laporan[]" value="PNS">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Pelayanan<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="checkbox" id="male" name="kategori_laporan[]" value="PNS">
                                                        </div>
                                                        <div class="col-md-9">
                                                            BPJS/JKN<br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sub Pelayanan</label>
                                                <div class="col-md-12 v_radio">
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="RAWAT JALAN">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Rawat Jalan<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="RAWAT INAP">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Rawat Inap<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="IGD">
                                                        </div>
                                                        <div class="col-md-9">
                                                            IGD<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="BEDAH CENTRAL">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Bedah Central<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="HEMODIALISA">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Hemodialisa<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="RADIOLOGI">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Radiologi<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="FARMASI">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Farmasi<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="GIZI">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Gizi<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="LABORATORIUM">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Laboratorium<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="REKAM MEDIS">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Rekam Medis<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <input type="radio" id="male" name="sub_pelayanan" value="PEMULASARAN JENAZAH">
                                                        </div>
                                                        <div class="col-md-9">
                                                            Pemulasaraan Jenazah<br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Deskripsi dan Kronologi Masalah</label>
                                                <textarea name="kronologi" id="" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6" style="padding: 0px;">
                                                    <div class="col-md-12" style="padding: 0px;"><label for="">Apakah Ada Bukti Pendukung?</label></div>
                                                    <div class="col-md-6 v_radio" style="padding: 0px;">
                                                        <div class="col-md-4" style="padding: 0px;">
                                                            <input type="radio" id="male" name="bukti_pendukung" value="PPPK">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Ya<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 v_radio" style="padding: 0px;">
                                                        <div class="col-md-4" style="padding: 0px;">
                                                            <input type="radio" id="male" name="bukti_pendukung" value="BLUD">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Tidak<br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding: 0px;">
                                                    <div class="col-md-12" style="padding: 0px;"><label for="">Terdapat Saksi Atas Masalah Yang Dilaporkan</label></div>
                                                    <div class="col-md-6 v_radio" style="padding: 0px;">
                                                        <div class="col-md-4" style="padding: 0px;">
                                                            <input type="radio" id="male" name="adakah_saksi" value="PPPK">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Ya<br>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 v_radio" style="padding: 0px;">
                                                        <div class="col-md-4" style="padding: 0px;">
                                                            <input type="radio" id="male" name="adakah_saksi" value="BLUD">
                                                        </div>
                                                        <div class="col-md-8">
                                                            Tidak<br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nama Saksi</label>
                                                <input type="text" name="nama_saksi" class="form-control" placeholder="Nama Saksi" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Unit Kerja</label>
                                                <input type="text" name="unit_saksi" class="form-control" placeholder="Unit Kerja" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">No.Telp/HP Saksi</label>
                                                <input type="text" name="no_saksi" class="form-control" placeholder="No Yang Bisa Dihubungi" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Solusi Yang Diharapkan</label>
                                                <textarea name="solusi" id="" cols="30" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        </fieldset>
                        <br>
                        <input type="submit" name="simpan_laporan" style="width: 100%;height: auto;font-size: 18px;" class="btn btn-primary" value="Kirim Permohonan">
                        </form>
                    </div>
                </div>
            </div>
            <hr size="2">
        </div>
    </div>

    </div>

    <!--Brand Area End-->

    <?php $this->load->view('portal/template/footer'); ?>
    <!--Footer Area End-->
    </div>

    <!--Jquery 1.12.4-->
    <?php $this->load->view('portal/template/footer_js'); ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("input").attr('disabled', 'disabled');
            $("#username").prop("disabled", false);
            $("#password").prop("disabled", false);
            <?php
            if ($s_pesan == "") {
            } else {
            ?>
                Swal.fire("<?php echo $s_pesan; ?>");
            <?php } ?>
        });

        function check_validasi() {
            let username = $("#username").val();
            let password = $("#password").val();
            $.ajax({
                url: "<?php echo base_url(); ?>wbs/check_login",
                method: "POST",
                async: false,
                dataType: 'json',
                data: {
                    username: username,
                    password: password
                },
                success: function(data) {
                    if (data == "kosong") {
                        Swal.fire({
                            title: "Gagal",
                            text: "Username dan Password Tidak Sesuai",
                            icon: "error"
                        });
                        $("input").attr('disabled', 'disabled');
                        $("#username").prop("disabled", false);
                        $("#password").prop("disabled", false);
                    } else {
                        Swal.fire({
                            title: "Berhasil",
                            text: "Silahkan Menginputkan Data Sesuai Dengan Form Yang Tersedia",
                            icon: "success"
                        });
                        $("input").prop("disabled", false);
                    }

                    console.log(data);
                }
            });
        }
    </script>
</body>

</html>