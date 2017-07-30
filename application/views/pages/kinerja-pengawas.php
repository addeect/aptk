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
                        <li>
                            <a href="<?php echo site_url('main/index/data-pengaduan') ?>" class="hitam"><i class="fa fa-home fa-fw"></i> Data Pengaduan</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('main/index/master-pasal') ?>" class="hitam"><i class="fa fa-cog fa-fw"></i> Master Pasal</a>
                        </li>
                        <li>
                            <a class="hitam aktif"><i class="fa fa-bar-chart-o fa-fw"></i> Kinerja Pengawas</a>
                        </li>
                        <li class="active">
                            <a href="#" class="hitam"><i class="fa fa-tasks fa-fw"></i> Pemilihan Petugas Pegawas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse in" aria-expanded="true">
                                
                                <li>
                                    <a class="">Petugas Pengawas</a>
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
            
            
                <div class="col-lg-12">
                    <h1 class="page-header">Kinerja Pengawas</h1>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
            
            <!-- <div class="form-group col-sm-4">
                <label>Tanggal Awal</label>
                <input type="text" name="tgl_awal" id="tgl_awal" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label>Tanggal Akhir</label>
                <input type="text" name="tgl_akhir" id="tgl_akhir" class="form-control">
            </div> -->
            
            
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <!-- <div class="form-group col-sm-2">
                    <input type="submit" class="btn btn-md btn-success btn-block" value="Tampilkan"/>
                </div> -->
                <div class="form-group col-sm-2">
                    <a id="pdf_button" target="_blank" href="<?php echo site_url('pengaduan/cetak_laporan_kinerja'); ?>" class="btn btn-md btn-primary btn-block">Cetak</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Jumlah Penyelesaian Kasus
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
    foreach ($data_work_done as $key) {
        if(strlen($key->NAMA_KARYAWAN) >= 20){
              $arr_nama_karyawan[] = '"'.substr($key->NAMA_KARYAWAN, 0, 10). " ... " . substr($key->NAMA_KARYAWAN, -5).'"';
        }
        else{
            $arr_nama_karyawan[] = '"'.$key->NAMA_KARYAWAN.'"';
        }
        
     } echo implode(',', $arr_nama_karyawan)?>];
    var nilai = [<?php
    foreach ($data_work_done as $key) {
        $arr_jumlah[] = $key->jumlah;
    } echo implode(',', $arr_jumlah)?>];

    // var nilai_sk = [4,8];
    
    var ctx = document.getElementById("chart_laporan_bulanan").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: nama,
            datasets: [{
                data: nilai,
                backgroundColor: [
                    'rgba(217,101,87,1)',
                    'rgba(46, 204, 113,1)',
                    'rgba(255, 198, 93,1)',
                    'rgba(132, 178, 234,1)',
                    'rgba(76, 80, 100,1)',
                    'rgba(207, 137, 87,1)',
                    'rgba(40, 194, 113,1)',
                    'rgba(250, 168, 93,1)',
                    'rgba(127, 198, 234,1)',
                    'rgba(71, 60, 100,1)'
                ]
            }]
        },
        options: {
            legend:false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        callback: function(value) {if (value % 1 === 0) {return value;}}
                    }
                }]
            }
        }
    });

    
    $(document).ready(function() {

        // $('#pdf_button').click(function(){
        //     var jenis_pelanggaran = $('#jenis_pelanggaran').val();
        //     var tgl_awal = $('#tgl_awal').val();
        //     var tgl_akhir = $('#tgl_akhir').val();
        //     var url = "<?php echo site_url('pengaduan/laporan_pdf'); ?>?jenis_pelanggaran="+jenis_pelanggaran+"&tgl_awal="+tgl_awal+"&tgl_akhir="+tgl_akhir;
        //     var win = window.open(url, '_blank');
        //       win.focus();
        // });

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