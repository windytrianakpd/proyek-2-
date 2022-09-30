<?php

use App\Models\Konfigurasi_model;
use App\Models\User_model;

$session = \Config\Services::session();
$konfigurasi  = new Konfigurasi_model;
$site         = $konfigurasi->listing();

$sek  = date('Y');
$awal = $sek - 100;
?>
<script>
  $(".datepicker").datepicker({
    inline: true,
    changeYear: true,
    changeMonth: true,
    dateFormat: "dd-mm-yy",
    yearRange: "<?php echo $awal ?>:<?php $tahundepan = date('Y') + 2;
                                    echo $tahundepan; ?>"
  });

  $(".tanggal").datepicker({
    inline: true,
    changeYear: true,
    changeMonth: true,
    dateFormat: "dd-mm-yy",
    yearRange: "<?php echo $awal ?>:<?php $tahundepan = date('Y') + 2;
                                    echo $tahundepan; ?>"
  });

  $(".tanggalan").datepicker({
    inline: true,
    changeYear: true,
    changeMonth: true,
    dateFormat: "dd-mm-yy",
    yearRange: "<?php echo $awal ?>:<?php $tahundepan = date('Y') + 2;
                                    echo $tahundepan; ?>"
  });
</script>
<!-- SWEETALERT -->
<?php if ($session->getFlashdata('sukses')) { ?>
  <script>
    swal("Berhasil", "<?php echo $session->getFlashdata('sukses'); ?>", "success")
  </script>
<?php } ?>

<?php if (isset($error)) { ?>
  <script>
    swal("Oops...", "<?php echo strip_tags($error); ?>", "warning")
  </script>
<?php } ?>

<?php if ($session->getFlashdata('warning')) { ?>
  <script>
    swal("Oops...", "<?php echo $session->getFlashdata('warning'); ?>", "warning")
  </script>
<?php } ?>

<script>
  // Sweet alert
  function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL
    swal({
        title: "Yakin ingin menghapus data ini?",
        text: "Data yang sudah dihapus tidak dapat dikembalikan",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
        if (willDelete) {
          // Proses ke URL
          window.location.href = urlToRedirect;
        }
      });
  }

  function order(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL
    swal({
        title: "Apakah customer sudah melakukan pembayaran ?",
        text: "Pastikan customer sudah melakukan pembayaran.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
        if (willDelete) {
          // Proses ke URL
          window.location.href = urlToRedirect;
        }
      });
  }

  // Kirim ulang
  function kirim(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL
    swal({
        title: "Yakin Ingin Mengirim Surat Ini?",
        text: "Pengiriman Surat Sebaiknya Kurang dari 200 Kali/jam agar tidak terkena Blokir Server. Klik CANCEL untuk membatalkan. Klik OK untuk mengirim surat.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
        if (willDelete) {
          // Proses ke URL
          window.location.href = urlToRedirect;
        }
      });
  }
  // Akses
  // Sweet alert
  function akses(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL
    swal({
        title: "Yakin ingin memberi akses?",
        text: "Data yang diberi akses akan bisa login",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
        if (willDelete) {
          // Proses ke URL
          window.location.href = urlToRedirect;
        }
      });
  }

  // Tinymce

  tinymce.init({
    selector: '.konten',
    menubar: true,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste code help wordcount'
    ],
    toolbar: 'undo redo | formatselect | bold italic strikethrough forecolor backcolor | link image | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
  });
</script>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; 2022 <a href="<?php echo base_url() ?>" target="_blank"><?php echo $site['namaweb'] ?></a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/toast/toastr.js"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
  Pusher.logToConsole = true;

  var pusher = new Pusher('e0e7df3e1f83c54f63c2', {
    cluster: 'mt1'
  });


  var channel = pusher.subscribe('my-channel');
  channel.bind('my-event', function(data) {
    update_data();
  });

  function update_data() {
    $.getJSON("<?php echo base_url() ?>/json/views_hari_ini.php", function(data) {
      $(".views-hari-ini").empty();
      $.each(data.result, function() {
        $(".views-hari-ini").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });

    $.getJSON("<?php echo base_url() ?>/json/views_kemarin.php", function(data) {
      $(".views-kemarin").empty();
      $.each(data.result, function() {
        $(".views-kemarin").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });

    $.getJSON("<?php echo base_url() ?>/json/views_total.php", function(data) {
      $(".views-total").empty();
      $.each(data.result, function() {
        $(".views-total").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });

    $.getJSON("<?php echo base_url() ?>/json/views_tahun_kemarin.php", function(data) {
      $(".views-tahun-kemarin").empty();
      $.each(data.result, function() {
        $(".views-tahun-kemarin").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });

    $.getJSON("<?php echo base_url() ?>/json/views_bulan_lalu.php", function(data) {
      $(".views-bulan-kemarin").empty();
      $.each(data.result, function() {
        $(".views-bulan-kemarin").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });

    $.getJSON("<?php echo base_url() ?>/json/diagram_tahun.php", function(data) {
      var v_empat = parseInt(data.result.views[4]);
      var v_tiga = parseInt(data.result.views[3]);
      var v_dua = parseInt(data.result.views[2]);
      var v_satu = parseInt(data.result.views[1]);
      var v_nol = parseInt(data.result.views[0]);

      var t_empat = parseInt(data.result.tahun[4]);
      var t_tiga = parseInt(data.result.tahun[3]);
      var t_dua = parseInt(data.result.tahun[2]);
      var t_satu = parseInt(data.result.tahun[1]);
      var t_nol = parseInt(data.result.tahun[0]);

      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var views_empat = v_empat;
        var views_tiga = v_tiga;
        var views_dua = v_dua;
        var views_satu = v_satu;
        var views_nol = v_nol;

        var tahun_empat = t_empat;
        var tahun_tiga = t_tiga;
        var tahun_dua = t_dua;
        var tahun_satu = t_satu;
        var tahun_nol = t_nol;

        var data = google.visualization.arrayToDataTable([
          ['Tahun', 'Views'],
          [tahun_empat, views_empat],
          [tahun_tiga, views_tiga],
          [tahun_dua, views_dua],
          [tahun_satu, views_satu],
          [tahun_nol, views_nol]
        ]);

        var options = {
          vAxis: {
            title: 'Pengunjung'
          },
          // hAxis: {
          //   title: 'Tahun'
          // },
          colors: ['#17a2b8', '#097138'],
          curveType: 'function',
          legend: {
            position: 'bottom'
          }
        };

        //css 
        options.chartArea = {
          left: '10%',
          top: '5%',
          width: "85%",
          height: "80%"
        };

        //create trigger to resizeEnd event     
        $(window).resize(function() {
          if (this.resizeTO) clearTimeout(this.resizeTO);
          this.resizeTO = setTimeout(function() {
            $(this).trigger('resizeEnd');
          }, 500);
        });

        //redraw graph when window resize is completed  
        $(window).on('resizeEnd', function() {
          drawChart(data);
        });
        //end

        var chart = new google.visualization.LineChart(document.getElementById('tahun_curve_chart'));

        chart.draw(data, options);
      }
    });

    $.getJSON("<?php echo base_url() ?>/json/diagram_hari.php", function(data) {
      var v_enam = parseInt(data.result.views[6]);
      var v_lima = parseInt(data.result.views[5]);
      var v_empat = parseInt(data.result.views[4]);
      var v_tiga = parseInt(data.result.views[3]);
      var v_dua = parseInt(data.result.views[2]);
      var v_satu = parseInt(data.result.views[1]);
      var v_nol = parseInt(data.result.views[0]);

      var h_enam = data.result.hari[6];
      var h_lima = data.result.hari[5];
      var h_empat = data.result.hari[4];
      var h_tiga = data.result.hari[3];
      var h_dua = data.result.hari[2];
      var h_satu = data.result.hari[1];
      var h_nol = data.result.hari[0];

      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var views_enam = v_enam;
        var views_lima = v_lima;
        var views_empat = v_empat;
        var views_tiga = v_tiga;
        var views_dua = v_dua;
        var views_satu = v_satu;
        var views_nol = v_nol;

        var hari_enam = h_enam;
        var hari_lima = h_lima;
        var hari_empat = h_empat;
        var hari_tiga = h_tiga;
        var hari_dua = h_dua;
        var hari_satu = h_satu;
        var hari_nol = h_nol;

        var data = google.visualization.arrayToDataTable([
          ['Hari', 'Views'],
          [hari_enam, views_enam],
          [hari_lima, views_lima],
          [hari_empat, views_empat],
          [hari_tiga, views_tiga],
          [hari_dua, views_dua],
          [hari_satu, views_satu],
          [hari_nol, views_nol]
        ]);

        var options = {
          vAxis: {
            title: 'Pengunjung'
          },
          // hAxis: {
          //   title: 'Hari'
          // },
          colors: ['#17a2b8', '#097138'],
          curveType: 'function',
          legend: {
            position: 'bottom'
          }
        };

        //css 
        options.chartArea = {
          left: '10%',
          top: '5%',
          width: "85%",
          height: "80%"
        };

        //create trigger to resizeEnd event     
        $(window).resize(function() {
          if (this.resizeTO) clearTimeout(this.resizeTO);
          this.resizeTO = setTimeout(function() {
            $(this).trigger('resizeEnd');
          }, 500);
        });

        //redraw graph when window resize is completed  
        $(window).on('resizeEnd', function() {
          drawChart(data);
        });
        //end

        var chart = new google.visualization.LineChart(document.getElementById('hari_curve_chart'));

        chart.draw(data, options);
      }
    });

    $.getJSON("<?php echo base_url() ?>/json/diagram_bulan.php", function(data) {
      var v_sebelas = parseInt(data.result.views[11]);
      var v_sepuluh = parseInt(data.result.views[10]);
      var v_sembilan = parseInt(data.result.views[9]);
      var v_delapan = parseInt(data.result.views[8]);
      var v_tujuh = parseInt(data.result.views[7]);
      var v_enam = parseInt(data.result.views[6]);
      var v_lima = parseInt(data.result.views[5]);
      var v_empat = parseInt(data.result.views[4]);
      var v_tiga = parseInt(data.result.views[3]);
      var v_dua = parseInt(data.result.views[2]);
      var v_satu = parseInt(data.result.views[1]);
      var v_nol = parseInt(data.result.views[0]);

      var b_sebelas = data.result.bulan[11];
      var b_sepuluh = data.result.bulan[10];
      var b_sembilan = data.result.bulan[9];
      var b_delapan = data.result.bulan[8];
      var b_tujuh = data.result.bulan[7];
      var b_enam = data.result.bulan[6];
      var b_lima = data.result.bulan[5];
      var b_empat = data.result.bulan[4];
      var b_tiga = data.result.bulan[3];
      var b_dua = data.result.bulan[2];
      var b_satu = data.result.bulan[1];
      var b_nol = data.result.bulan[0];

      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var views_sebelas = v_sebelas;
        var views_sepuluh = v_sepuluh;
        var views_sembilan = v_sembilan;
        var views_delapan = v_delapan;
        var views_tujuh = v_tujuh;
        var views_enam = v_enam;
        var views_lima = v_lima;
        var views_empat = v_empat;
        var views_tiga = v_tiga;
        var views_dua = v_dua;
        var views_satu = v_satu;
        var views_nol = v_nol;

        var bulan_sebelas = b_sebelas;
        var bulan_sepuluh = b_sepuluh;
        var bulan_sembilan = b_sembilan;
        var bulan_delapan = b_delapan;
        var bulan_tujuh = b_tujuh;
        var bulan_enam = b_enam;
        var bulan_lima = b_lima;
        var bulan_empat = b_empat;
        var bulan_tiga = b_tiga;
        var bulan_dua = b_dua;
        var bulan_satu = b_satu;
        var bulan_nol = b_nol;

        var data = google.visualization.arrayToDataTable([
          ['Bulan', 'Views'],
          [bulan_sebelas, views_sebelas],
          [bulan_sepuluh, views_sepuluh],
          [bulan_sembilan, views_sembilan],
          [bulan_delapan, views_delapan],
          [bulan_tujuh, views_tujuh],
          [bulan_enam, views_enam],
          [bulan_lima, views_lima],
          [bulan_empat, views_empat],
          [bulan_tiga, views_tiga],
          [bulan_dua, views_dua],
          [bulan_satu, views_satu],
          [bulan_nol, views_nol]
        ]);

        var options = {
          vAxis: {
            title: 'Pengunjung'
          },
          // hAxis: {
          //   title: 'Bulan'
          // },
          colors: ['#17a2b8', '#097138'],
          curveType: 'function',
          legend: {
            position: 'bottom'
          }
        };

        //css 
        options.chartArea = {
          left: '10%',
          top: '5%',
          width: "85%",
          height: "80%"
        };

        //create trigger to resizeEnd event     
        $(window).resize(function() {
          if (this.resizeTO) clearTimeout(this.resizeTO);
          this.resizeTO = setTimeout(function() {
            $(this).trigger('resizeEnd');
          }, 500);
        });

        //redraw graph when window resize is completed  
        $(window).on('resizeEnd', function() {
          drawChart(data);
        });
        //end

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    });
  }
</script>

<script>
  $(document).ready(function() {
    views_hari_ini();
    views_kemarin();
    views_total();
    views_tahun_kemarin();
    views_bulan_kemarin();
    diagram_tahun();
    diagram_hari();
    diagram_bulan();
  });

  function views_hari_ini() {
    $.getJSON("<?php echo base_url() ?>/json/views_hari_ini.php", function(data) {
      $(".views-hari-ini").empty();
      $.each(data.result, function() {
        $(".views-hari-ini").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });
  }

  function views_kemarin() {
    $.getJSON("<?php echo base_url() ?>/json/views_kemarin.php", function(data) {
      $(".views-kemarin").empty();
      $.each(data.result, function() {
        $(".views-kemarin").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });
  }

  function views_total() {
    $.getJSON("<?php echo base_url() ?>/json/views_total.php", function(data) {
      $(".views-total").empty();
      $.each(data.result, function() {
        $(".views-total").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });
  }

  function views_tahun_kemarin() {
    $.getJSON("<?php echo base_url() ?>/json/views_tahun_kemarin.php", function(data) {
      $(".views-tahun-kemarin").empty();
      $.each(data.result, function() {
        $(".views-tahun-kemarin").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });
  }

  function views_bulan_kemarin() {
    $.getJSON("<?php echo base_url() ?>/json/views_bulan_lalu.php", function(data) {
      $(".views-bulan-kemarin").empty();
      $.each(data.result, function() {
        $(".views-bulan-kemarin").append("<div>" + this + " <small> ( Views )</small></div>");
      });
    });
  }

  function diagram_tahun() {
    $.getJSON("<?php echo base_url() ?>/json/diagram_tahun.php", function(data) {
      var v_empat = parseInt(data.result.views[4]);
      var v_tiga = parseInt(data.result.views[3]);
      var v_dua = parseInt(data.result.views[2]);
      var v_satu = parseInt(data.result.views[1]);
      var v_nol = parseInt(data.result.views[0]);

      var t_empat = parseInt(data.result.tahun[4]);
      var t_tiga = parseInt(data.result.tahun[3]);
      var t_dua = parseInt(data.result.tahun[2]);
      var t_satu = parseInt(data.result.tahun[1]);
      var t_nol = parseInt(data.result.tahun[0]);

      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var views_empat = v_empat;
        var views_tiga = v_tiga;
        var views_dua = v_dua;
        var views_satu = v_satu;
        var views_nol = v_nol;

        var tahun_empat = t_empat;
        var tahun_tiga = t_tiga;
        var tahun_dua = t_dua;
        var tahun_satu = t_satu;
        var tahun_nol = t_nol;

        var data = google.visualization.arrayToDataTable([
          ['Tahun', 'Views'],
          [tahun_empat, views_empat],
          [tahun_tiga, views_tiga],
          [tahun_dua, views_dua],
          [tahun_satu, views_satu],
          [tahun_nol, views_nol]
        ]);

        var options = {
          vAxis: {
            title: 'Pengunjung'
          },
          // hAxis: {
          //   title: 'Tahun'
          // },
          colors: ['#17a2b8', '#097138'],
          curveType: 'function',
          legend: {
            position: 'bottom'
          }
        };

        //css 
        options.chartArea = {
          left: '10%',
          top: '5%',
          width: "85%",
          height: "80%"
        };

        //create trigger to resizeEnd event     
        $(window).resize(function() {
          if (this.resizeTO) clearTimeout(this.resizeTO);
          this.resizeTO = setTimeout(function() {
            $(this).trigger('resizeEnd');
          }, 500);
        });

        //redraw graph when window resize is completed  
        $(window).on('resizeEnd', function() {
          drawChart(data);
        });
        //end

        var chart = new google.visualization.LineChart(document.getElementById('tahun_curve_chart'));

        chart.draw(data, options);
      }
    });
  }

  function diagram_hari() {
    $.getJSON("<?php echo base_url() ?>/json/diagram_hari.php", function(data) {
      var v_enam = parseInt(data.result.views[6]);
      var v_lima = parseInt(data.result.views[5]);
      var v_empat = parseInt(data.result.views[4]);
      var v_tiga = parseInt(data.result.views[3]);
      var v_dua = parseInt(data.result.views[2]);
      var v_satu = parseInt(data.result.views[1]);
      var v_nol = parseInt(data.result.views[0]);

      var h_enam = data.result.hari[6];
      var h_lima = data.result.hari[5];
      var h_empat = data.result.hari[4];
      var h_tiga = data.result.hari[3];
      var h_dua = data.result.hari[2];
      var h_satu = data.result.hari[1];
      var h_nol = data.result.hari[0];

      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var views_enam = v_enam;
        var views_lima = v_lima;
        var views_empat = v_empat;
        var views_tiga = v_tiga;
        var views_dua = v_dua;
        var views_satu = v_satu;
        var views_nol = v_nol;

        var hari_enam = h_enam;
        var hari_lima = h_lima;
        var hari_empat = h_empat;
        var hari_tiga = h_tiga;
        var hari_dua = h_dua;
        var hari_satu = h_satu;
        var hari_nol = h_nol;

        var data = google.visualization.arrayToDataTable([
          ['Hari', 'Views'],
          [hari_enam, views_enam],
          [hari_lima, views_lima],
          [hari_empat, views_empat],
          [hari_tiga, views_tiga],
          [hari_dua, views_dua],
          [hari_satu, views_satu],
          [hari_nol, views_nol]
        ]);

        var options = {
          vAxis: {
            title: 'Pengunjung'
          },
          // hAxis: {
          //   title: 'Hari'
          // },
          colors: ['#17a2b8', '#097138'],
          curveType: 'function',
          legend: {
            position: 'bottom'
          }
        };

        //css 
        options.chartArea = {
          left: '10%',
          top: '5%',
          width: "85%",
          height: "80%"
        };

        //create trigger to resizeEnd event     
        $(window).resize(function() {
          if (this.resizeTO) clearTimeout(this.resizeTO);
          this.resizeTO = setTimeout(function() {
            $(this).trigger('resizeEnd');
          }, 500);
        });

        //redraw graph when window resize is completed  
        $(window).on('resizeEnd', function() {
          drawChart(data);
        });
        //end

        var chart = new google.visualization.LineChart(document.getElementById('hari_curve_chart'));

        chart.draw(data, options);
      }
    });
  }

  function diagram_bulan() {
    $.getJSON("<?php echo base_url() ?>/json/diagram_bulan.php", function(data) {
      var v_sebelas = parseInt(data.result.views[11]);
      var v_sepuluh = parseInt(data.result.views[10]);
      var v_sembilan = parseInt(data.result.views[9]);
      var v_delapan = parseInt(data.result.views[8]);
      var v_tujuh = parseInt(data.result.views[7]);
      var v_enam = parseInt(data.result.views[6]);
      var v_lima = parseInt(data.result.views[5]);
      var v_empat = parseInt(data.result.views[4]);
      var v_tiga = parseInt(data.result.views[3]);
      var v_dua = parseInt(data.result.views[2]);
      var v_satu = parseInt(data.result.views[1]);
      var v_nol = parseInt(data.result.views[0]);

      var b_sebelas = data.result.bulan[11];
      var b_sepuluh = data.result.bulan[10];
      var b_sembilan = data.result.bulan[9];
      var b_delapan = data.result.bulan[8];
      var b_tujuh = data.result.bulan[7];
      var b_enam = data.result.bulan[6];
      var b_lima = data.result.bulan[5];
      var b_empat = data.result.bulan[4];
      var b_tiga = data.result.bulan[3];
      var b_dua = data.result.bulan[2];
      var b_satu = data.result.bulan[1];
      var b_nol = data.result.bulan[0];

      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var views_sebelas = v_sebelas;
        var views_sepuluh = v_sepuluh;
        var views_sembilan = v_sembilan;
        var views_delapan = v_delapan;
        var views_tujuh = v_tujuh;
        var views_enam = v_enam;
        var views_lima = v_lima;
        var views_empat = v_empat;
        var views_tiga = v_tiga;
        var views_dua = v_dua;
        var views_satu = v_satu;
        var views_nol = v_nol;

        var bulan_sebelas = b_sebelas;
        var bulan_sepuluh = b_sepuluh;
        var bulan_sembilan = b_sembilan;
        var bulan_delapan = b_delapan;
        var bulan_tujuh = b_tujuh;
        var bulan_enam = b_enam;
        var bulan_lima = b_lima;
        var bulan_empat = b_empat;
        var bulan_tiga = b_tiga;
        var bulan_dua = b_dua;
        var bulan_satu = b_satu;
        var bulan_nol = b_nol;

        var data = google.visualization.arrayToDataTable([
          ['Bulan', 'Views'],
          [bulan_sebelas, views_sebelas],
          [bulan_sepuluh, views_sepuluh],
          [bulan_sembilan, views_sembilan],
          [bulan_delapan, views_delapan],
          [bulan_tujuh, views_tujuh],
          [bulan_enam, views_enam],
          [bulan_lima, views_lima],
          [bulan_empat, views_empat],
          [bulan_tiga, views_tiga],
          [bulan_dua, views_dua],
          [bulan_satu, views_satu],
          [bulan_nol, views_nol]
        ]);

        var options = {
          vAxis: {
            title: 'Pengunjung'
          },
          // hAxis: {
          //   title: 'Bulan'
          // },
          colors: ['#17a2b8', '#097138'],
          curveType: 'function',
          legend: {
            position: 'bottom'
          }
        };

        //css 
        options.chartArea = {
          left: '10%',
          top: '5%',
          width: "85%",
          height: "80%"
        };

        //create trigger to resizeEnd event     
        $(window).resize(function() {
          if (this.resizeTO) clearTimeout(this.resizeTO);
          this.resizeTO = setTimeout(function() {
            $(this).trigger('resizeEnd');
          }, 500);
        });

        //redraw graph when window resize is completed  
        $(window).on('resizeEnd', function() {
          drawChart(data);
        });
        //end

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    });
  }
</script>

<script>
  $(document).ready(function() {
    var max_fields = 10;
    var add_input_button = $('.add_input_button');
    var field_wrapper = $('.field');
    // var new_field_html = ;
    var input_count = 1;
    // Add button dynamically
    $(add_input_button).click(function() {
      var nilai = $(".in").val();
      if (input_count < max_fields) {
        input_count++;
        var angka = input_count - 1;
        $(field_wrapper).append('<div class="col-11 px-0"><input type="text" class="form-control" name="input_field[]" value="' + nilai + '"/><a href="javascript:void(0);" class="remove_input_button" title="Remove field"><button class="btn btn-danger" style="margin-top:-64px;margin-left:669px;" type="button">x</button></a></div>');
        $("#in").val("");
      }
    });
    // Remove dynamically added button
    $(field_wrapper).on('click', '.remove_input_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove();
      input_count--;
    });
  });
</script>

<script>
  $(document).ready(function() {
    var max_fields = 10;
    var add_input_button = $('.add_input_button_1');
    var field_wrapper = $('.field');
    // var new_field_html = ;
    var input_count = 1;
    // Add button dynamically
    $(add_input_button).click(function() {
      var nilai = $(".in").val();
      if (input_count < max_fields) {
        input_count++;
        var angka = input_count - 1;
        $(field_wrapper).append('<div class="col-11 px-0"><input type="text" class="form-control" name="input_field[]" value="' + nilai + '"/><a href="javascript:void(0);" class="remove_input_button" title="Remove field"><button class="btn btn-danger" style="margin-top:-64px;margin-left:537px;" type="button">x</button></a></div>');
        $("#in").val("");
      }
    });
    // Remove dynamically added button
    $(field_wrapper).on('click', '.remove_input_button', function(e) {
      e.preventDefault();
      $(this).parent('div').remove();
      input_count--;
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('input.jam').timepicker({
      timeFormat: 'HH:mm:ss',
      // year, month, day and seconds are not important
      minTime: new Date(0, 0, 0, 8, 0, 0),
      maxTime: new Date(0, 0, 0, 15, 0, 0),
      // time entries start being generated at 6AM but the plugin 
      // shows only those within the [minTime, maxTime] interval
      startHour: 6,
      // the value of the first item in the dropdown, when the input
      // field is empty. This overrides the startHour and startMinute 
      // options
      startTime: new Date(0, 0, 0, 8, 20, 0),
      // items in the dropdown are separated by at interval minutes
      interval: 10
    });
  });
</script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>/assets/admin/dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url() ?>/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>/assets/admin/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "responsive": true,
      "paging": true,
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      "lengthChange": true,
      "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $(function() {
    // Summernote
    $('.summernote').summernote({
      height: 100, // set editor height
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
    })
  })
  // tanggal dan select
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function() {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() {
      myDropzone.enqueueFile(file)
    }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>

</html>