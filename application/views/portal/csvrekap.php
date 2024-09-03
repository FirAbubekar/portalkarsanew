<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<button type=""><a href="<?php echo base_url('vaksinasi/rekap'); ?>" class="btn btn-warning">KEMBALI</a></button>
<table style="width: 100%;" id="testTable" border="3">
<style>
td {
  text-align: left;
}
table, th, td {
    padding:10px 10px 10px 10px;
}
    </style>
<caption><b>PEMERINTAH PROVINSI JAWA TIMUR</b><br>
    <b>DINAS KESEHATAN</b><br>
    <b>RUMAH SAKIT UMUM KARSA HUSADA BATU</b><br>
    <b>JL.A.YANI 10-13 BATU TELP.(0341) 591036 - 596898 FAX (0341) 596901</b></caption>
    <thead>
        <tr>
            <th>No</th>
            <th>Syarat</th>
            <th>No KTP</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Pekerjaan</th>
            <th>Deskripsi</th>
            <th>TTL</th>
            <th>Alamat</th>
            <th>RT</th>
            <th>RW</th>
            <th>Dusun</th>
            <th>Kelurahan</th>
            <th>No HP</th>
            <th>Tgl. Vaksin</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($rekap as $key) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $key->syarat; ?></td>
            <td>'<?php echo $key->noktp; ?></td>
            <td><?php echo $key->nama; ?></td>
            <td><?php echo $key->jk; ?></td>
            <td><?php echo $key->pekerjaan; ?></td>
            <td><?php echo $key->deskripsi; ?></td>
            <td><?php echo date('d-m-Y', strtotime($key->tgllahir)); ?></td>
            <td><?php echo $key->alamat; ?></td>
            <td><?php echo $key->rt; ?></td>
            <td><?php echo $key->rw; ?></td>
            <td><?php echo $key->dusun; ?></td>
            <td><?php echo $key->kelurahan; ?></td>
            <td><?php echo $key->nohp; ?></td>
            <td><?php echo date('d-m-Y', strtotime($key->tgldilayani)); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
// $(document).ready(function(){
    $(document).ready(function(){
        tableToExcel('testTable', 'Data Pasien Vaksin')
})
        var tableToExcel = (function() {
            let name = 'W3C Example Table';
        var uri = 'data:application/vnd.ms-excel;base64,',
            template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head style="text-align:center"><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table border="1">{table}</table></body></html>',
            base64 = function(s) {
            return window.btoa(unescape(encodeURIComponent(s)))
            },
            format = function(s, c) {
            return s.replace(/{(\w+)}/g, function(m, p) {
                return c[p];
            })
            }
        return function(table, name) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = {
            worksheet: name || 'Worksheet',
            table: table.innerHTML
            }
            var a = document.createElement('a');
            a.href = uri + base64(format(template, ctx))
            a.download =  'Peserta Vaksin.xls';
            a.click();
        }
        })()
   </script>