
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
                        <li><a href="<?php echo site_url('main/index/edit-pengadu') ?>?id=<?php echo $_SESSION['user_id'] ?>"><i class="fa fa-user fa-fw"></i> Ubah Data Pengadu</a>
                        </li>
                        <li class="divider"></li>
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
                            <a href="#" class="hitam aktif"><i class="fa fa-home fa-fw"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('main/index/pengaduan-tenaga-kerja') ?>" class="hitam"><i class="fa fa-tasks fa-fw"></i> Buat Pengaduan</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('main/index/edit-pengadu') ?>?id=<?php echo $_SESSION['user_id'] ?>" class="hitam"><i class="fa fa-user fa-fw"></i> Ubah Data Pengadu</a>
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
                    <h1 class="page-header">Beranda</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">!!</div>
                                    <div>Buat Pengaduan</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('main/index/pengaduan-tenaga-kerja') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Klik Di sini</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
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
                                    <div class="huge">..</div>
                                    <div>Ubah Data Pengadu</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('main/index/edit-pengadu') ?>?id=<?php echo $_SESSION['user_id'] ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Klik Di sini</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <p>Nama : <strong><?php echo $_SESSION['nama_user'] ?></strong></p>
                                    <p>Tipe : <strong><?php echo $_SESSION['role'] ?></strong></p>
                                </div>
                                <div class="col-xs-6 text-left">
                                <?php foreach ($data_pengadu as $key) { ?>
                                    <p>Perusahaan : <strong><?php echo $key->NAMA_PERUSAHAAN; ?></strong></p>
                                <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Status Pengaduan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Status Pengaduan Tenaga Kerja (Informasi sampai dimana kasus terselesaikan)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="status_aduan">Status Aduan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="progress progress-striped active" style="margin-bottom:0;">
                                        <?php foreach ($data_status as $key) { ?>
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $key->STATUS_PENYELESAIAN; ?>%">
                                                <span class="sr-only"><?php echo $key->STATUS_PENYELESAIAN; ?>% Complete</span>
                                            </div>
                                        </div>
                                        <div style="width:100%;position:relative;float:left;">
                                            <p class="help-block"><?php echo $key->STATUS_PENYELESAIAN; ?>% Complete - <strong>
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
                                            ?></strong></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                                    <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-2 form-group"><a href="javascript:void(0)" onclick="confirm('<?php echo $key->ID_JENIS_KELUHAN; ?>')" class="btn btn-md btn-danger">KASUS SELESAI</a></div>
                                </div>
                                <?php } ?>
                            </div>
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

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form method="post" action="<?php echo site_url('pengaduan/close_case') ?>">
                                        <input type="hidden" name="id_jenis_keluhan" id="id_jenis_keluhan">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Apakah anda yakin ?</h4>
                                        </div>
                                        <div class="modal-body">
                                            Anda akan mengakhiri pengaduan ini berdasarkan kemauan anda sendiri.
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-success" value="Ya"/>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>

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
    function confirm(id_jenis_keluhan){
        $('#myModal').modal('show');
        $('#id_jenis_keluhan').val(id_jenis_keluhan);
    };
    $(document).ready(function() {

        
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