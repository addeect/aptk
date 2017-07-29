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
                        
                        
                        <li>
                            <a class="aktif hitam"><i class="fa fa-home fa-fw"></i> Data Pengaduan</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('main/index/master-pasal') ?>" class="hitam"><i class="fa fa-cog fa-fw"></i> Master Pasal</a>
                        </li>
                        <li class="">
                            <a href="#" class="hitam"><i class="fa fa-tasks fa-fw"></i> Pemilihan Petugas Pegawas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse in" aria-expanded="true">
                                
                                <li>
                                    <a href="<?php echo site_url('main/index/pemilihan-petugas-pengawas') ?>" class="">Petugas Pengawas</a>
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
                    <h1 class="page-header">Data Pengaduan - Total <?php echo $total_pengaduan; ?></h1>
                    
                </div>
                </form>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $pengaduan_selesai; ?></div>
                                    <div>Pengaduan</div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="panel-footer">
                                <span class="pull-left">Pengaduan Selesai</span>
                                <span class="pull-right"><i class="fa fa-dashboard"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $pengaduan_belum_selesai; ?></div>
                                    <div>Pengaduan</div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);">
                            <div class="panel-footer">
                                <span class="pull-left">Pengaduan Belum Selesai</span>
                                <span class="pull-right"><i class="fa fa-dashboard"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $permintaan_petugas; ?></div>
                                    <div>Permintaan Pengawas</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('main/index/pemilihan-petugas-pengawas') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Klik Di sini</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Daftar Pengaduan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. SPT</th>
                                        <th>Nama Pengadu</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Alamat Perusahaan</th>
                                        <th>Progress</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1; foreach ($spt_list as $key) { ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $key->NO_SPT; ?></td>
                                            <td><?php echo $key->NAMA_TK; ?></td>
                                            <td><?php echo $key->JENIS_KEL; ?></td>
                                            <td><?php echo $key->NAMA_PERUSAHAAN; ?></td>
                                            <td><?php echo $key->ALAMAT_PERUSAHAAN; ?></td>
                                            <td>
                                            <div class="progress progress-striped active" style="margin-bottom:0;">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $key->STATUS_PENYELESAIAN; ?>%">
                                                    <span class="sr-only"><?php echo $key->STATUS_PENYELESAIAN; ?>% Complete</span>
                                                </div>
                                            </div>
                                            </td>
                                            <td>
                                                <?php
                                            $status_desc ='';
                                            if($key->STATUS_PENYELESAIAN==10){
                                                $status_desc = 'Pendaftaran Pengaduan';
                                            }
                                            else if($key->STATUS_PENYELESAIAN==20){
                                                $status_desc = 'Pemilihan Pengawas';
                                            }
                                            else if($key->STATUS_PENYELESAIAN==30){
                                                $status_desc = 'Pembuatan SPT';
                                            }
                                            else if($key->STATUS_PENYELESAIAN==40){
                                                $status_desc = 'Pemeriksaan Lapangan';
                                            }
                                            else if($key->STATUS_PENYELESAIAN==50){
                                                $status_desc = 'Hasil Temuan';
                                            }
                                            else if($key->STATUS_PENYELESAIAN==70){
                                                $status_desc = 'Nota Pemeriksaan I';
                                            }
                                            else if($key->STATUS_PENYELESAIAN==80){
                                                $status_desc = 'Nota Peringatan II';
                                            }
                                            else if($key->STATUS_PENYELESAIAN==90){
                                                $status_desc = 'Nota Peringatan III';
                                            }
                                            else if($key->STATUS_PENYELESAIAN==100){
                                                $status_desc = 'Laporan Kejadian';
                                            }
                                            echo $status_desc;
                                            ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

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
    $(document).ready(function() {
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