<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>RSU Karsa Husada Batu</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets_portal/img/karsa700.png">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    
.container {
    max-width: 90%;
}
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 0%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                <?php
                                 $tgldaftar      = date('Y-m-d H:i:s');
                                 $tglsekarang      = date('Y-m-d');
                                 if(date('l',strtotime($tglsekarang))=="Friday"){
                                    $tgldilayani    = date('Y-m-d', strtotime('+3 days', strtotime($tgldaftar)));
                                 }else{
                                    $tgldilayani    = date('Y-m-d', strtotime('+1 days', strtotime($tgldaftar)));
                                 }
                                 $tgldilayani3    = date('D', strtotime('+1 days', strtotime($tgldaftar)));
                                 $tgldilayani2   = date('Y-m-d', strtotime('+2 days', strtotime($tgldaftar)));
                                 $stat_vaksin = $this->db->get('status_vaksin')->row();
                                ?>
                    <div class="col-md-4 register-left">
                                            <style>
                        .register-left img {
                            margin-top: 15%;
                            margin-bottom: 5%;
                            width: 25%;
                            -webkit-animation: mover 0s infinite alternate;
                            /* animation: mover 1s infinite alternate; */
                        }
                    </style>
                        <img src="<?php echo base_url('assets_portal/img/karsa700.png')?>" alt=""/>
                        <h3>Selamat Datang</h3>
                        <p>* Syarat dan Ketentuan</p>
                        <ol style="text-align: left;" type="1">
                            <li><b>[&nbsp;I &nbsp; N &nbsp; F &nbsp; O&nbsp;]&nbsp; &nbsp;Bagi Pendaftar Yang Sudah Melakukan Vaksin Dosis 1 dan 2 dengan Vaksin Moderna dan Sinopharm Tidak Bisa Mengikuti Vaksinasi Pfizer Booster</b></li>
                            <li>Pendaftar <b>TIDAK DIPERKENANKAN</b> mengisi data lebih dari sekali di form google untuk menghindari duplikasi data.</li>
                            <!--<li><b>Sudah Pernah Dosis 1 dan Dosis 2 SINOVAC/ASTRAZENECA Minimal 6 Bulan</b></li>-->
                            <li>Membawa Alat Tulis/Pulpen Sendiri</li>
                            <li>Menggunakan Masker Medis Dan Menerapkan Prokes 5M</li>
                            <li>Penduduk <b>KTP/domisili/pegawai</b> Pemkot Batu (ASN,THL,Sukwan)</li>
                            <li>Bagi warga dengan KTP luar Kota Batu, dapat menggunakan <b>Surat Keterangan Domisili</b> dari RT/RW setempat.</li>
                            <li>Minimal usia <b><?php echo $stat_vaksin->min_usia." Tahun"; ?></b>, dan anak dibawah <b>18 tahun</b> jika belum memiliki KTP dapat diisi dengan NIK sesuai KTP/KTA/KK.</li>
                            <li>Kuota Vaksin terbatas untuk <b><?php echo $stat_vaksin->jumlah; ?> orang</b></li>
                            <li>Wajib datang dengan <b>membawa KTP</b>, menggunakan masker sesuai standar dan mematuhi protokol kesehatan.</li>
                            <li>Vaksinasi dilaksanakan pada <b>Pukul 09.00-12.00</b></li>
                            <li>Tempat pelaksanaan vaksin: <b>Gedung Lama Rawat Jalan Sebelah Timur RSU Karsa Husada Batu</b> </li>
                        </ol>
                        <a href="<?php echo base_url('vaksinasi/search')?>" style="width: 100%;" class="btn btn-warning">Cek Pendaftaran</a>
                    </div>
                    <div class="col-md-8 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               
                                <h3 class="register-heading">PENDAFTARAN VAKSINASI <?php echo $stat_vaksin->vaksin; ?> <br> RSUD KARSA HUSADA BATU</h3>
                                <form action="<?php echo base_url('vaksinasi/daftar_jadwal')?>" method="post">
                                <div class="row register-form">
                                <div class="col-lg-12 col-md-12">
                                <!--<center><h5>TANGGAL VAKSIN </h5> <h2><b><?php echo date('d-m-Y', strtotime($tgldilayani)); ?></h2></b></center>-->
                                <center><h5>TANGGAL VAKSIN </h5> <h2><b>Jumat, 18 November 2022</h2></b></center>
                                </div>
                                <?php if($notif!=null){?>
                                <span style="width: 100%;" class="btn btn-warning btn-xs"><?php echo $notif; ?></span>
                                <?php }?>
                                <?php 
                                $gettotal = $this->db->query('
                                     SELECT
                                         COUNT(t_daftarvaksin.noktp) AS total
                                     FROM
                                         t_daftarvaksin 
                                     WHERE
                                         t_daftarvaksin.tgldilayani = "'.$tgldilayani.'"
                                 ')->row();
                                 if($stat_vaksin->aktif=="tidak aktif"||$tglsekarang>$stat_vaksin->tanggal||date("H:i")<="07:00"||date("H:i")>="20:00"){
                                 if($tglsekarang==$stat_vaksin->tanggal&&date("H:i")<="24:00"){
                                    $pesan = "Pendaftaran Akan Dibuka Pada Pukul <b>09:00 WIB</b>";
                                 }else{
                                    $pesan = "Mohon Maaf <b>TIDAK TERSEDIA</b> Pendaftaran Vaksin COVID-19";
                                 }
                                ?>
                                
                                <div class="col-lg-12 col-md-12">
                                 <center><h3><?php echo $pesan; ?></h3><br></center>
                                 <br><br> <hr>
                                 <!--<center>Pendaftaran Akan Dibuka Lagi Besok Untuk Pendaftaran <br> <b> Tanggal <?php echo date('d-m-Y',strtotime($tgldilayani2)); ?></b></center>-->
                                 </div>
                                <?php }else{

                                if($gettotal->total>=$stat_vaksin->jumlah){ ?>
                                 <div class="col-lg-12 col-md-12">
                                 <center><h3>Mohon Maaf Kuota Pendaftaran Vaksin COVID-19 <br>Untuk Tanggal 18 November 2022 </h3><br>
                                 <!--<center><h3>Mohon Maaf Kuota Pendaftaran Vaksin COVID-19 <br>Untuk Tanggal <?php echo date('d-m-Y',strtotime($tgldilayani)); ?> </h3><br>-->
                                 <h1><b>PENUH</b></h1></center>
                                 <br><br> <hr>
                                 <!--<center>Akan Dibuka Lagi Besok Untuk Pendaftaran <br> <b> Tanggal <?php echo date('d-m-Y',strtotime($tgldilayani2)); ?></b></center>-->
                                 </div>
                                <?php }else{ ?>
                                    <div class="col-lg-12 col-md-12">
                                    <span style="width: 100%;" class="btn btn-info btn-xs">
                                    <center><h3>SISA KUOTA <br> <?php echo $stat_vaksin->jumlah-$gettotal->total;?></h3></center>
                                    </span>
                                    <div class="form-group">
                                        <label for="">Pilih Salah Satu</label>
                                            <div class="maxl">
                                                <label style="width: 100%;" class="radio inline"> 
                                                    <input required type="radio" name="syarat" value="KTP batu" checked>
                                                    <span> KTP Batu </span> 
                                                </label>
                                                <label style="width: 100%;" class="radio inline"> 
                                                    <input required type="radio" name="syarat" value="Surat Domisili Batu">
                                                    <span>Surat Domisili Batu </span> 
                                                </label>
                                                <label style="width: 100%;" class="radio inline"> 
                                                    <input required type="radio" name="syarat" value="Luar Wilayah Batu">
                                                    <span>Luar Wilayah Batu</span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <input required type="hidden" class="form-control" placeholder="ALAMAT *" name="tanggal" value="2022/11/18" />
                                        <div class="form-group">
                                        <label for="">No KTP</label>
                                            <input required type="number" maxlength="16" class="form-control" placeholder="NO KTP *"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" min="1" name="no_ktp" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Lengkap Peserta</label>
                                            <input required type="text" class="form-control" placeholder="NAMA LENGKAP *" name="nama" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jenis Kelamin</label>
                                            <div class="maxl">
                                                <label style="width: 40%;" class="radio inline"> 
                                                    <input required type="radio" name="gender" value="laki-laki" checked>
                                                    <span> Laki-Laki </span> 
                                                </label>
                                                <label style="width: 40%;" class="radio inline"> 
                                                    <input required type="radio" name="gender" value="perempuan">
                                                    <span>Perempuan </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pekerjaan</label>
                                            <select required name="pekerjaan" class="form-control">
                                                <option></option>
                                                <option>Petugas Medis dan Non Medis di Fasilitas Pelayanan Kesehatan</option>
                                                <option>Lansia(>59thn)</option>
                                                <option>Pendidikan</option>
                                                <option>Pedagang Besar</option>
                                                <option>Tokoh Agama</option>
                                                <option>Pegawai Pemerintah</option>
                                                <option>Keamanan</option>
                                                <option>Pelayanan Publik</option>
                                                <option>Transportasi Publik</option>
                                                <option>Atlit</option>
                                                <option>Wartawan dan Pekerja Medis</option>
                                                <option>Pariwisata/ Pekerja Hotel/ Tempat Wisata</option>
                                                <option>TNI</option>
                                                <option>POLRI</option>
                                                <option>BUMN</option>
                                                <option>BUMD</option>
                                                <option>Masyarakat Umum</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi Pekerjaan</label>
                                            <input required type="text" class="form-control" placeholder="DESKRIPSI PEKERJAAN *" name="deskripsi" value="" />
                                            
                                        </div>
                                        <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                             <input required type="date" class="form-control" placeholder="TANGGAL LAHIR *" onchange="getAge()" name="tgllahir" id="tgllahir" value="" />
                                            <h5>Umur Anda adalah: <span id="result" class="text-primary"></span></h5>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input required type="text" class="form-control" placeholder="ALAMAT *" name="alamat" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">RT</label>
                                            <input required type="number" class="form-control" placeholder="RT *" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="3" min="1" name="rt" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">RW</label>
                                            <input required type="number" class="form-control" placeholder="RW *" min="1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="3" name="rw" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Dusun</label>
                                            <input required type="text" class="form-control" placeholder="DUSUN *" name="dusun" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kelurahan</label>
                                            <select required aria-placeholder="KELURAHAN" name="kelurahan" class="form-control">
                                                <option></option>
                                                <option>ORO-ORO OMBO</option>
                                                <option>PESANGGRAHAN</option>
                                                <option>SIDOMULYO</option>
                                                <option>SUMBEREJO</option>
                                                <option>NGAGLIK</option>
                                                <option>SISIR</option>
                                                <option>SONGGOKERTO</option>
                                                <option>TEMAS</option>
                                                <option>BULUKERTO</option>
                                                <option>BUMIAJI</option>
                                                <option>GIRIPURNO</option>
                                                <option>GUNUNGSARI</option>
                                                <option>PANDANREJO</option>
                                                <option>PUNTEN</option>
                                                <option>SUMBERGONDO</option>
                                                <option>TULUNGREJO</option>
                                                <option>SUMBER BRANTAS</option>
                                                <option>BEJI</option>
                                                <option>JUNREJO</option>
                                                <option>MOJOREJO</option>
                                                <option>PENDEM</option>
                                                <option>TLEKUNG</option>
                                                <option>TORONGREJO</option>
                                                <option>DADAPREJO</option>
                                                <option>LUAR WILAYAH BATU</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">No Handphone</label>
                                            <input required type="number" min="0" class="form-control" placeholder="NO HANDPHONE *" name="nohp" value="" />
                                        </div>
                                        <input type="submit" class="btn btn-success" disabled id="btndaftar" value="Daftar Vaksinasi"/>
                                    </div>
                                <?php }} ?>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
                        <script>
                function getAge() {
                    var date = document.getElementById('tgllahir').value;
                    
                    if(date === ""){
                    }else{
                        var today = new Date();
                        var birthday = new Date(date);
                        var year = 0;
                        if (today.getMonth() < birthday.getMonth()) {
                            year = 1;
                        } else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
                            year = 1;
                        }
                        var age = today.getFullYear() - birthday.getFullYear() - year;
                        
                        if(age >= 0 && age < <?php echo $stat_vaksin->min_usia; ?>){
                            document.getElementById("btndaftar").disabled = true;
                            document.getElementById('result').innerHTML = age+' Tahun';
                        }else if(age>=<?php echo $stat_vaksin->min_usia; ?>){
                            document.getElementById("btndaftar").disabled = false;
                            document.getElementById('result').innerHTML = age+' Tahun';
                        }
                        
                    }
                }
            </script>