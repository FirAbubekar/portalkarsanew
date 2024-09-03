<!-- <style>

    html, body {
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
      font-size: 14px;
    }

    #calendar {
      width: 100%;
      
    }
    .about-content > p {
    font-size: 16px;
    line-height: 25px;
    color: #5d5d5d;
    margin-bottom: 30px;
}

  </style> -->



<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.7.0/main.min.js'></script>


<style>
  html,
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    width: 100%;
  }

  .fc .fc-view-harness {
    display: block;
    height: 300px;
    overflow-y: scroll;
    border: 1px solid #ddd;
  }

  .fc-theme-standard .fc-scrollgrid {
    border: none !important;
  }

  @media (min-width: 768px) {
    #calendar {
      height: 100%;
    }

    .fc .fc-view-harness {
      overflow: hidden;
      height: 100%;
      border: none !important;
    }

    .fc-theme-standard .fc-scrollgrid {
      border: 1px solid #ddd !important;
    }
  }


  /* .fc .fc-scroller-harness-liquid {
    height: 100%;
  } */

  /* .fc-time-grid .fc-slats td {
    height: 3.5em;
  } */

  table {
    margin: 0 !important;
  }
</style>

<!-- 
<link href='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css' rel='stylesheet' />


<link href='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css' rel='stylesheet' />



<script src='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js'></script>




<script src='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js'></script>
  

  



<script src='/assets/demo-to-codepen.js'></script>

 -->

<script>
  window.mobilecheck = function() {
    var check = false;
    (function(a) {
      if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
  }, setTimeout;

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      selectable: true,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      initialView: window.mobilecheck() ? "timeGridDay" : "dayGridMonth",
      contentHeight: 'auto',

      events: '<?php echo base_url('Home/getkegiatan'); ?>',
      dateClick: function(info) {
        getkegiatan(info.dateStr);
      },
      select: function(info, id) {
        // alert('selected ' + info.startStr + ' to ' + info.endStr);
        // var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        // var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      }
    });

    calendar.render();
  });



  function getkegiatan(tglkegiatan) {
    $.ajax({
      url: "<?php echo base_url(); ?>home/getdetailkegiatan",
      method: "POST",
      data: {
        tglkegiatan: tglkegiatan
      },
      async: false,
      dataType: 'json',
      success: function(data) {
        console.log(data)
        var html = '';
        var i;

        for (i = 0; i < data.length; i++) {
          dArr = data[i].tgl_mulai.split("-"); // ex input "2010-01-18"
          dArr = dArr[2] + "/" + dArr[1] + "/" + dArr[0];
          html += '<div class="about-content"><div  id="nama_kegiatan" class="sub_title" style="color: #005145; font-size: 16pt;">- ' + data[i].nama_kegiatan + '</div><span><font style="color: #005145; font-size: 14pt;">Lokasi Kegiatan = ' + data[i].lokasi + '</font></span><br><span><font style="color: #005145; font-size: 14pt;">Tanggal Kegiatan = ' + dArr + '</font></span><br>Deskripsi : <p style="font-color: #4c4c4c; font-size: 15pt;">' + data[i].deskripsi + '</p></div>';
        }
        $('#detail_kegiatan').html(html);
        //    alert(data);
        // $("#nama_kegiatan").html(data.nama_kegiatan);
        // $("#norekamedis").val(data.noRekamedis);
        // $("#nmpasien").val(data.nmPasien);
        // $("#tgltindakan").val(data.tglTindakan);
        // detailtindakan(data.kdSesi,data.kdBed);
        // tabeltindakan(data.noTindakanHD);
        // // $("#sesitindakan").val(data.kdSesi);
        // // $("#bedtindakan").val(data.kdBed);
        // $("#pakettindakan").val(data.kdPaket);
        // $("#jenispaket").val(data.kdJenisPaket);
      }
    })
  }
</script>

</head>

<body>
  <div class='demo-topbar'>
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div id="detail_kegiatan"></div>
    </div>
  </div>

  <div id='calendar'></div>
</body>

</html>
