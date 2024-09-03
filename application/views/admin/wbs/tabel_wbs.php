<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets_portal/img/karsa700.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php $this->load->view('admin/template/modul_head'); ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php $this->load->view('admin/template/modul_aside_menu'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Whistleblowing System
                    <small>RSUD Karsa Husada</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-recycle"></i> Whistleblowing System</a></li>
                    <li class="active">Tabel</li>
                </ol>
            </section>
            <style>
                .content-wrapper {
                    background-color:

                        #ecf0f5;
                    z-index: 800;
                    height: auto;
                }
            </style>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <!-- /.box -->

                        <?php
                        $flash_data = $this->session->flashdata();
                        if (isset($flash_data["success"])) { ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                                <?php echo $flash_data["success"]; ?>
                            </div>
                        <?php } elseif (isset($flash_data["delete"])) { ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-trash"></i> Berhasil!</h4>
                                <?php echo $flash_data["delete"]; ?>
                            </div>
                        <?php } elseif (isset($flash_data["update"])) { ?>
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-files-o"></i> Berhasil!</h4>
                                <?php echo $flash_data["update"]; ?>
                            </div>
                        <?php } ?>

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Laporan Whistleblowing System</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" style="width: 100%">Tambah Data Tugas & Fungsi <span class="fa fa-plus-circle"></span></button> -->
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center>NO</center>
                                            </th>
                                            <th>
                                                <center>Tgl Akhir</center>
                                            </th>
                                            <th>
                                                <center>Unit Pelapor</center>
                                            </th>
                                            <th>
                                                <center>Status Pelapor</center>
                                            </th>
                                            <th>
                                                <center>Nama Terlapor</center>
                                            </th>
                                            <th>
                                                <center>Status Terlapor</center>
                                            </th>
                                            <th>
                                                <center>Status</center>
                                            </th>
                                            <th>
                                                <center>Action</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($res_check as $row) { ?>
                                            <tr>
                                                <td>
                                                    <center> <?php echo $no++; ?></center>
                                                </td>
                                                <td> <?php echo date('d-m-Y', strtotime($row->created_date)); ?> </td>
                                                <td>
                                                    <center> <?php echo $row->unit_pelapor; ?></center>
                                                </td>
                                                <td>
                                                    <center> <?php echo $row->status_pelapor; ?></center>
                                                </td>
                                                <td>
                                                    <center> <?php echo $row->nama_terlapor; ?></center>
                                                </td>
                                                <td>
                                                    <center> <?php echo $row->status_terlapor; ?></center>
                                                </td>
                                                <td>
                                                    <center> <?php echo ""; ?></center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <center>
                                                            <button class="btn btn-warning" data-toggle="modal" data-target="#modal-default" onclick="get_detail_wbs('<?php echo $row->id; ?>')" data-toggle="modal" data-target="#modal-editkegiatan">Lihat</button>
                                                            <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete">Delete</button> -->
                                                        </center>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <style type="text/css">
            .modal-dialog {
                width: 90%;
                margin: 30px auto;
            }
        </style>
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Laporan Whistleblowing System</h4>
                    </div>
                    <form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/kegiatan/save_kegiatan'); ?>" role="form">
                        <div class="modal-body">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Unit Pelapor: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="unit_pelapor" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">No Telp: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="notelp_pelapor" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Status: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="status_pelapor" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Nama Terlapor: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="nama_terlapor" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Tanggal Laporan: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="tanggal_laporan" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Status Terlapor: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="status_terlapor" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Sub Pelayanan: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="sub_pelayanan" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Kategori Laporan: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="kategori_laporan" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kronologi</label>
                                            <textarea class="form-control" rows="10" name="" id="kronologi"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Bukti Pendukung: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="bukti_pendukung" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Nama Saksi: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="nama_saksi" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Adakah Saksi: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="adakah_saksi" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Unit Saksi: </label>
                                            <input type="text" name="nama_kegiatan" class="form-control" id="unit_saksi" placeholder="Masukan Nama Kegiatan">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Solusi</label>
                                            <!-- <textarea id="editor12 solusi" name="editor12" rows="10" cols="80"></textarea> -->
                                            <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
                                            <textarea class="form-control" rows="10" name="" id="solusi"></textarea>
                                            <!-- <p id="solusi_f"></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Simpan Kegiatan" style="width: 100%" name="submit">
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <style type="text/css">
            .modal-dialog2 {
                width: 30%;
                margin: 30px auto;
            }
        </style>

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Created By </b> SIRS
            </div>
            <strong>Copyright &copy; 2020 <a href="http://rsukarsahusadabatu.jatimprov.go.id/">RSU Karsa Husada</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <?php $this->load->view('admin/template/modul_setting'); ?>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
    </script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets/bower_components/ckeditor/ckeditor.js"></script> -->
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
            // CKEDITOR.replace('editor2')
            // $('#editor2').wysihtml5()
        })

        function get_detail_wbs(id) {
            $.ajax({
                url: "<?php echo base_url(); ?>admin/wbs/get_detail",
                method: "POST",
                async: false,
                dataType: 'json',
                data: {
                    id: id
                },
                success: function(data) {
                    // console.log();
                    $('#unit_pelapor').val(data[0]['unit_pelapor'])
                    $('#notelp_pelapor').val(data[0]['notelp_pelapor'])
                    $('#status_pelapor').val(data[0]['status_pelapor'])
                    $('#nama_terlapor').val(data[0]['nama_terlapor'])
                    $('#tanggal_laporan').val(data[0]['tanggal_terlapor'])
                    $('#status_terlapor').val(data[0]['status_terlapor'])
                    $('#sub_pelayanan').val(data[0]['sub_pelayanan'])
                    $('#kategori_laporan').val(data[0]['kategori_laporan'])
                    $('#kronologi').val(data[0]['kronologi'])
                    $('#bukti_pendukung').val(data[0]['bukti_pendukung'])
                    $('#nama_saksi').val(data[0]['nama_saksi'])
                    $('#unit_saksi').val(data[0]['unit_saksi'])
                    // $('editor-custom').contents().find('body').html(data[0]['kronologi'])
                    var value = data[0]['solusi'];
                    $("#kronologi").val(data[0]['kronologi']);
                    $("#solusi").val(value);
                }
            });
        }
    </script>

    <script type="text/javascript">
       
    </script>
</body>

</html>