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
                                 $tgldilayani    = date('Y-m-d', strtotime('+1 days', strtotime($tgldaftar)));
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
                            <li>Pendaftar <b>TIDAK DIPERKENANKAN</b> mengisi data lebih dari sekali di form google untuk menghindari duplikasi data.</li>
                            <li><b>Sudah Pernah Dosis 1 dan Dosis 2 SINOVAC/ASTRAZENECA Minimal 6 Bulan</b></li>
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
                                <form action="<?php echo base_url('xlx/save_status')?>" method="post">
                                <div class="row register-form">
                                <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                        <label for="">ID</label>
                                            <input required type="text" class="form-control" placeholder="" name="id" value="<?php echo $getvaksin->id; ?>" />
                                        </div>
                                        <div class="form-group">
                                        <label for="">JENIS VAKSIN</label>
                                            <input required type="text" class="form-control" placeholder="Jenis Vaksin" name="jenis" value="<?php echo $getvaksin->vaksin; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">JUMLAH</label>
                                            <input required type="number" class="form-control" placeholder="JUMLAH *" name="jumlah" value="<?php echo $getvaksin->jumlah; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">TANGGAL</label>
                                            <input required type="date" class="form-control" placeholder="Tanggal Vaksin *" name="tanggal" value="<?php echo $getvaksin->tanggal; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status Vaksin</label>
                                            <div class="maxl">
                                                <label style="width: 40%;" class="radio inline"> 
                                                    <?php
                                                    if($getvaksin->aktif=="aktif"){
                                                        $aktif = "checked";
                                                        $tidakaktif = "";
                                                    }else{
                                                        $aktif = "";
                                                        $tidakaktif = "checked";
                                                    }?>
                                                    <input required type="radio" name="status" value="aktif" <?php echo $aktif; ?>>
                                                    <span> AKTIF </span> 
                                                </label>
                                                <label style="width: 40%;" class="radio inline"> 
                                                    <input required type="radio" name="status" value="tidak aktif" <?php echo $tidakaktif; ?>>
                                                    <span>TIDAK AKTIF </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Min Usia</label>
                                            <input required type="number" class="form-control" placeholder="USIA *" name="usia" value="<?php echo $getvaksin->min_usia; ?>" />
                                        </div>
                                        <input type="submit" class="btn btn-success" id="btndaftar" value="Daftar Vaksinasi"/>
                                    </div>
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
                        
                        if(age >= 0 && age < 19){
                            document.getElementById("btndaftar").disabled = true;
                            document.getElementById('result').innerHTML = age+' Tahun';
                        }else if(age>=19){
                            document.getElementById("btndaftar").disabled = false;
                            document.getElementById('result').innerHTML = age+' Tahun';
                        }
                        
                    }
                }
            </script>