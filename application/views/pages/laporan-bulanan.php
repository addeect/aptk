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
            <form method="get" action="" target="_self">
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
                <input type="submit" class="btn btn-md btn-success btn-block" value="Tampilkan"/>
            </div>
            <div class="form-group col-sm-2">
                <a target="_blank" href="<?php echo site_url('pengaduan/laporan_pdf') ?>" class="btn btn-md btn-primary btn-block">Cetak</a>
            </div>
            </form>
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
                       <canvas id="chart_laporan_bulanan" style="width:100%;height:300px"></canvas>
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
                        <canvas id="chart_kasus_selesai_tidak_selesai" style="width:100%;height:300px"></canvas>
                    </div>
                    <!-- /.panel-body -->
                </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Kecenderungan Kasus Perorangan
                        <div class="pull-right">
                            
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <canvas id="chart_kecenderungan_kasus" style="width:100%;height:300px"></canvas>
                    </div>
                    <!-- /.panel-body -->
                </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Kecenderungan Kasus Perserikatan
                        <div class="pull-right">
                            
                        </div>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <canvas id="chart_kecenderungan_kasus_serikat" style="width:100%;height:300px"></canvas>
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
    // #1 CHART ===========================================================================================================
    var nama = [<?php
    foreach ($kasus_masuk as $key) {
        $arr_bulan[] = '"'.$key->Bulan.'"';
     } echo implode(',', $arr_bulan)?>];
    var nilai = [<?php
    foreach ($kasus_masuk as $key) {
        $arr_jumlah[] = $key->jumlah;
    } echo implode(',', $arr_jumlah)?>];

    var nilai_sk = [<?php
    foreach ($kasus_masuk_serikat as $key) {
        $arr_jumlah_serikat[] = $key->jumlah;
    } echo implode(',', $arr_jumlah_serikat)?>];
    // var nilai_sk = [4,8];
    
    var ctx = document.getElementById("chart_laporan_bulanan").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: nama,
            datasets: [{
                label: 'Perorangan',
                data: nilai,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)'
                ],
                borderWidth: 1
            },
            {
                label: 'Perserikatan',
                data: nilai_sk,
                backgroundColor: [
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)'

                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    // #2 CHART =====================================================================================================
    var nama_bulan_chart_2 = [<?php
    foreach ($kasus_selesai as $key) {
        $arr_nama_bulan_chart_2[] = '"'.$key->Bulan.'"';
     } echo implode(',', $arr_nama_bulan_chart_2)?>];
    var nilai_selesai_perorangan = [<?php
    foreach ($kasus_selesai as $key) {
        $arr_nilai_selesai_perorangan[] = $key->jumlah;
    } echo implode(',', $arr_nilai_selesai_perorangan)?>];

    var nilai_selesai_serikat = [<?php
    foreach ($kasus_serikat_selesai as $key) {
        $arr_nilai_selesai_sk[] = $key->jumlah;
    } echo implode(',', $arr_nilai_selesai_sk)?>];

    var nilai_tidak_selesai_perorangan = [<?php
    foreach ($kasus_tidak_selesai as $key) {
        $arr_nilai_tidak_selesai_perorangan[] = $key->jumlah;
    } echo implode(',', $arr_nilai_tidak_selesai_perorangan)?>];

    var nilai_tidak_selesai_serikat = [<?php
    foreach ($kasus_serikat_tidak_selesai as $key) {
        $arr_nilai_tidak_selesai_sk[] = $key->jumlah;
    } echo implode(',', $arr_nilai_tidak_selesai_sk)?>];
    // var nilai_sk = [4,8];
    
    var ctx1 = document.getElementById("chart_kasus_selesai_tidak_selesai").getContext('2d');
    var myChart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: nama_bulan_chart_2,
            datasets: [{
                label: 'Perorangan - Selesai',
                data: nilai_selesai_perorangan,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(255, 99, 132, 0.8)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)',
                    'rgba(255,99,132,1)'
                ],
                borderWidth: 1
            },
            {
                label: 'Perorangan - Tidak Selesai',
                data: nilai_tidak_selesai_perorangan,
                backgroundColor: [
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(255, 206, 86, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            },
            {
                label: 'Perserikatan - Selesai',
                data: nilai_selesai_serikat,
                backgroundColor: [
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(54, 162, 235, 0.8)'

                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            },
            {
                label: 'Perserikatan - Tidak Selesai',
                data: nilai_tidak_selesai_serikat,
                backgroundColor: [
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(75, 192, 192, 0.8)'
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    // #3 CHART =====================================================================================================
    // new Chart(document.getElementById("chart_kecenderungan_kasus"),
    //     {"type":"doughnut",
    //         "data":{
    //             "labels":["Red","Blue","Yellow"],
    //             "datasets":[{
    //                 "label":"My First Dataset",
    //                 "data":[300,50,100],
    //                 "backgroundColor":["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
    //             }]
    //         }
    //     });
    var ctx3 = document.getElementById("chart_kecenderungan_kasus").getContext('2d');
    var data_kecenderungan_kasus = {
        datasets: [{
            data: [<?php
            foreach ($kecenderungan_perorangan as $key) {
               $arr_kecenderungan_perorangan[] = $key->jumlah;
            } echo implode(",", $arr_kecenderungan_perorangan);
            ?>],
            backgroundColor:['rgba(54, 162, 235, 0.8)',"rgb(255, 205, 86)"]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [<?php
            foreach ($kecenderungan_perorangan as $key) {
               $arr_kecenderungan_perorangan_label[] = '"'.$key->jenis.'"';
            } echo implode(",", $arr_kecenderungan_perorangan_label);
            ?>]
    };
    var options_kecenderungan_kasus = '';
    var myDoughnutChart = new Chart(ctx3, {
        type: 'doughnut',
        data: data_kecenderungan_kasus,
        options: options_kecenderungan_kasus
    });
    // #4 CHART ====================================================================================================
    var ctx4 = document.getElementById("chart_kecenderungan_kasus_serikat").getContext('2d');
    var data_kecenderungan_kasus_serikat = {
        datasets: [{
            data: [<?php
            foreach ($kecenderungan_serikat as $key) {
               $arr_kecenderungan_serikat[] = $key->jumlah;
            } echo implode(",", $arr_kecenderungan_serikat);
            ?>],
            backgroundColor:['rgba(54, 162, 235, 0.8)',"rgb(255, 205, 86)"]
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [<?php
            foreach ($kecenderungan_serikat as $key) {
               $arr_kecenderungan_serikat_label[] = '"'.$key->jenis.'"';
            } echo implode(",", $arr_kecenderungan_serikat_label);
            ?>]
    };
    var options_kecenderungan_kasus_serikat = '';
    var myDoughnutChart_serikat = new Chart(ctx4, {
        type: 'doughnut',
        data: data_kecenderungan_kasus_serikat,
        options: options_kecenderungan_kasus_serikat
    });
    $(document).ready(function() {

        

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