<link href="<?php echo base_url('assets/css/jquery.datetimepicker.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/selectize.bootstrap3.css') ?>" rel="stylesheet">
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: linear-gradient(154deg,#ef4949 0,#e89752 100%);">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand putih" href="javascript:void(0)" style="padding-top: 7px;"><img class="pull-left" style="padding-top: 2px;" src="<?php echo base_url('assets/img/logo-01_xsmall.png') ?>" style="height:30px"/><span class="pull-left putih" style="font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:12px;line-height:1.3;width:225px;padding-left:9px;padding-top:3px;">Aplikasi Pengaduan Tenaga Kerja Disnaker Kota Surabaya</span></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle putih" data-toggle="dropdown" href="#">
                        <?php echo $_SESSION['role'] ?> - <?php echo $_SESSION['nama_user'] ?>
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>-->
                        <!--<li class="divider"></li> -->
                        <li><a href="<?php echo site_url('logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div-->
                            <!-- /input-group -->
                        <!--/li-->
                        
                        <li class="active">
                            <a href="#" class="hitam"><i class="fa fa-tasks fa-fw"></i> Surat Perintah Tugas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse in" aria-expanded="true">
                                
                                <li>
                                    <a href="<?php echo site_url('main/index/pembuatan-surat-perintah-tugas') ?>" class="">Admin Pengawas</a>
                                </li>
                                <li>
                                    <a class="aktif">Laporan Bulanan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
            <form method="post" action="<?php echo site_url('pengaduan/master_pasal_new') ?>" id="form_hasil_temuan">
            
                <div class="col-lg-12">
                    <h1 class="page-header">Laporan Bulanan</h1>
                    
                </div>
                </form>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="form-group col-sm-4">
                <label>Jenis Pelanggaran</label>
                <select class="form-control" id="jenis_pelanggaran" name="jenis_pelanggaran">
                    <option value="Pelanggaran K3">Pelanggaran K3</option>
                    <option value="Pelanggaran Normatif">Pelanggaran Normatif</option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label>Tanggal Awal</label>
                <input type="text" name="tgl_awal" id="tgl_awal" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>Tanggal Akhir</label>
                <input type="text" name="tgl_akhir" id="tgl_akhir" class="form-control">
            </div>
            <div class="form-group col-sm-2">
                <button class="btn btn-md btn-success btn-block">Tampilkan</button>
            </div>
            <div class="form-group col-sm-2">
                <button class="btn btn-md btn-primary btn-block">Cetak</button>
            </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Kasus Masuk
                        <div class="pull-right">
                            
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="morris-area-chart"><canvas id="chart_laporan_bulanan" style="width:100%;height:300px"></canvas></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Kasus Selesai &amp; Tidak Selesai
                        <div class="pull-right">
                            
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="morris-area-chart"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/Chart.bundle.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/selectize.js') ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/js/metisMenu.js') ?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('assets/js/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables.bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables.responsive.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/app.js') ?>"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    var nama = [<?php
    foreach ($kasus_masuk as $key) {
        $arr_bulan[] = '"'.$key->Bulan.'"';
     } echo implode(',', $arr_bulan)?>];
    var nilai = [<?php
    foreach ($kasus_masuk as $key) {
        $arr_jumlah[] = $key->jumlah;
    } echo implode(',', $arr_jumlah)?>];

    var nilai_sk = [<?php
    foreach ($kasus_masuk as $key) {
        $arr_jumlah1[] = $key->jumlah;
    } echo implode(',', $arr_jumlah1)?>];
    var data_laporan_bulanan = {
            labels: nama,
            datasets: [
                {
                    data: nilai,
                    backgroundColor: [
                        "#d96557",
                        "#2ECC71",
                        "#ffc65d",
                        "#e0e8f2",
                        "#4C5064",
                        "#747a98",
                        "#3066ab",
                        "#9a42a9",
                        "#5c42a9",
                        "#79ff79",
                        "#c5fd42",
                        "#ff1b00"
                    ],
                    hoverBackgroundColor: [
                        "#f1b3ab",
                        "#75eca8",
                        "#fddc9e",
                        "#c0c5cc",
                        "#8e909a",
                        "#7082dc",
                        "#81a4d0",
                        "#bd8bc5",
                        "#8d81af",
                        "#a8e6a8",
                        "#d9ff81",
                        "#ff4f3a"
                    ]
                },
                {
                    data: nilai_sk,
                    backgroundColor: [
                        "#d96557",
                        "#2ECC71",
                        "#ffc65d",
                        "#e0e8f2",
                        "#4C5064",
                        "#747a98",
                        "#3066ab",
                        "#9a42a9",
                        "#5c42a9",
                        "#79ff79",
                        "#c5fd42",
                        "#ff1b00"
                    ],
                    hoverBackgroundColor: [
                        "#f1b3ab",
                        "#75eca8",
                        "#fddc9e",
                        "#c0c5cc",
                        "#8e909a",
                        "#7082dc",
                        "#81a4d0",
                        "#bd8bc5",
                        "#8d81af",
                        "#a8e6a8",
                        "#d9ff81",
                        "#ff4f3a"
                    ]
                }
                ]
        };
        var config_laporan_bulanan = {
                type: 'bar',
                data: data_laporan_bulanan,
                options: {legend:false,
                tooltips: {
                    // callbacks: {
                    //     label: function(tooltipItem, data) {
                    //         var allData = data.datasets[tooltipItem.datasetIndex].data;
                    //         var tooltipLabel = data.labels[tooltipItem.index];
                    //         var tooltipData = allData[tooltipItem.index];
                    //         var total = 0;
                    //         for (var i in allData) {
                    //             total += allData[i];
                    //         }
                    //         var tooltipPercentage = Math.round((tooltipData / total) * 100);
                    //         return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
                    //     }
                    // }
                }
            }
        };
        var chart_laporan_bulanan;
        function drawChart(){
          chart_laporan_bulanan = new Chart(document.getElementById("chart_laporan_bulanan"), config_laporan_bulanan);
        };
        function hapusChart(){
          chart_laporan_bulanan.destroy();
        };
        function updateChart(){
          chart_laporan_bulanan.update();
        };
    $(document).ready(function() {

        // START CHART ------------------------------------------------------------------------------------
        drawChart();
        $('#datepicker_1').datetimepicker({timepicker:false,format:'Y-m-d'});
        $('#datepicker_2').datetimepicker({timepicker:false,format:'Y-m-d'});
        //--- CHART JS -----------
        
          
          $("#hapusChart").click(function(){
            hapusChart();
          });

          // ----------------------------------- DYNAMIC PIE CHART - ACW - 23/03/17 ------------------------------- //
          $("#drawChart").click(function(){
            

            // AJAX START
            if(window.XMLHttpRequest)
            {
              xmlhttp = new XMLHttpRequest();
            }
            else
            {
              xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var url = "<?php echo site_url('kabid/dashboard1') ?>";
            var params = "status=berhasil";
            xmlhttp.open("POST", url, true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.onreadystatechange = function()
            {
              if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
              {
                // DELETE CHART
            hapusChart();
            //sleep
              
                var data = xmlhttp.responseText;
                var explode = data.split(';');

                //document.getElementById("isi_tabel_gangguan_berulang").innerHTML=explode[0];
                // var nama_updated = explode[1];
                // var nilai_updated = explode[0];

                var name_1 = explode[0];
                var name_2 = explode[1];
                var name_3 = explode[2];
                var name_4 = explode[3];
                var name_5 = explode[4];
                var a = explode[5];
                var b = explode[6];
                var c = explode[7];
                var d = explode[8];
                var e = explode[9];
                var bgcolor = ["#d96557",
                              "#2ECC71",
                              "#ffc65d",
                              "#e0e8f2",
                              "#4C5064"];
                var hbgcolor = ["#f1b3ab",
                              "#75eca8",
                              "#fddc9e",
                              "#c0c5cc",
                              "#8e909a"];
                //nama
                //nama.unshift = (explode[1]);
                //nilai.unshift = (explode[0]);
                // UPDATE DATASET
                data_laporan_bulanan = {
                  labels: [name_1,name_2,name_3,name_4,name_5],
                  datasets: [
                      {
                          data: [a,b,c,d,e],
                          backgroundColor: bgcolor
                          ,
                          hoverBackgroundColor: hbgcolor
                      }]
              };

              // UPDATE CONFIG
              config_laporan_bulanan = {
                      type: 'doughnut',
                      data: data_laporan_bulanan,
                      options: {legend:true,
                      tooltips: {
                          // callbacks: {
                          //     label: function(tooltipItem, data) {
                          //         var allData = data.datasets[tooltipItem.datasetIndex].data;
                          //         var tooltipLabel = data.labels[tooltipItem.index];
                          //         var tooltipData = allData[tooltipItem.index];
                          //         var total = 0;
                          //         for (var i in allData) {
                          //             total += allData[i];
                          //         }
                          //         var tooltipPercentage = Math.round((tooltipData / total) * 100);
                          //         return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
                          //     }
                          // }
                      }
                  }
              };
                //document.getElementById("cursor_gangguan_berulang").innerHTML=explode[1];
                drawChart();
                //console.log(data+nama);
                //updateChart();
                //alert(nama+" + "+nilai);
              }
            }
            xmlhttp.send(params);
            

          // DRAW THE CHART WITH NEW DATA
                
          });
        // END CHART ---------------------------------------------------------------------------------------

        // DATEPICKER
        $('#tgl_awal').datetimepicker({
            timepicker:false,
            format:'d-m-Y'
        });
        $('#tgl_akhir').datetimepicker({
            timepicker:false,
            format:'d-m-Y'
        });
        $('select#id_pasal').selectize({
            sortField: 'text'
        });
        $('#dataTables-example').DataTable({
            "language": {
                "sSearch": "Cari:",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "zeroRecords": "Data Tidak Ditemukan",
            "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Data Tidak Ada",
            "infoFiltered": "(difilter dari _MAX_ data yang ada)",
            "paginate": {
              "previous": "<",
              "next": ">"
            }
        },
            responsive: true
        });
    });
    </script>