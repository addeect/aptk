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
                            <a href="#" class="hitam"><i class="fa fa-files-o fa-fw"></i> Pemeriksaan Lapangan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse in" aria-expanded="true">
                                <li>
                                    <a class="aktif">Daftar Pengaduan</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('main/index/laporan-kejadian') ?>" class="">Laporan Kejadian</a>
                                </li>
                                <!--<li>
                                    <a href="<?php // echo site_url('main/index/pemeriksaan-lapangan') ?>">Pemeriksaan Lapangan</a>
                                </li>-->
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
                    <h1 class="page-header">Daftar Pengaduan</h1>
                    <!--<div class="form-group">
                        <input type="button" value="+ TAMBAH BARU" class="btn btn-primary btn-sm" />
                    </div>-->
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-print fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $spt_baru; ?></div>
                                    <div>SPT</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Jumlah SPT Baru</span>
                                <span class="pull-right"><i class="fa fa-dashboard"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sign-in fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $pengaduan_baru; ?></div>
                                    <div>Pengaduan</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Jumlah Pengaduan Baru</span>
                                <span class="pull-right"><i class="fa fa-dashboard"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Daftar Perusahaan dan Pengadu Yang Diawasi
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
                                        <th>Hasil Temuan</th>
                                        <th>Nota Pemeriksaan / Nota Peringatan</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1; foreach ($spt_list as $key) { ?>
                                        <tr <?php if($key->IS_CONFIRM > 0){echo "style='background-color:#c9ffc9'";} ?>>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $key->NO_SPT; echo $key->IS_COME; ?></td>
                                            <td><?php echo $key->NAMA_TK; ?></td>
                                            <td><?php echo $key->JENIS_KEL; ?></td>
                                            <td><?php echo $key->NAMA_PERUSAHAAN; ?></td>
                                            <td><?php echo $key->ALAMAT_PERUSAHAAN; ?></td>
                                            <td>
                                            <a class="btn btn-sm <?php if($key->STATUS_PENYELESAIAN<40){echo 'btn-default disabled';}else if($key->STATUS_PENYELESAIAN<50){echo 'btn-default';} else{echo 'btn-warning';} ?>" href="<?php echo site_url('main/index/hasil-temuan') ?>?id_spt=<?php echo $key->ID_SPT; ?>&id_jenis_keluhan=<?php echo $key->ID_JENIS_KELUHAN; ?>&status=<?php echo $key->STATUS_PENYELESAIAN; ?>">Temuan</a>
                                            </td>
                                            <td>
                                            <a target="_blank" class="btn btn-sm 
                                            <?php if($key->STATUS_PENYELESAIAN<50){echo 'btn-default disabled';} else if($key->STATUS_PENYELESAIAN<70){echo 'btn-default';} else{echo 'btn-danger';} ?>
                                            " href="<?php echo site_url('pengaduan/cetak_nota_1') ?>?id_spt=<?php echo $key->ID_SPT; ?>&id_jenis_keluhan=<?php echo $key->ID_JENIS_KELUHAN; ?>&status=<?php echo $key->STATUS_PENYELESAIAN; ?>">Nota I</a>&nbsp;<a target="_blank" class="btn btn-sm <?php if($key->STATUS_PENYELESAIAN<70){echo 'btn-default disabled';} else if($key->STATUS_PENYELESAIAN<80){echo 'btn-default';} else{echo 'btn-danger';} ?>" href="<?php echo site_url('pengaduan/cetak_nota_2') ?>?id_spt=<?php echo $key->ID_SPT; ?>&id_jenis_keluhan=<?php echo $key->ID_JENIS_KELUHAN; ?>&no_spt=<?php echo $key->NO_SPT; ?>&status=<?php echo $key->STATUS_PENYELESAIAN; ?>">Nota II</a>&nbsp;<a target="_blank" class="btn btn-sm <?php if($key->STATUS_PENYELESAIAN<80){echo 'btn-default disabled';} else if($key->STATUS_PENYELESAIAN<90){echo 'btn-default';} else{echo 'btn-danger';} ?>" href="<?php echo site_url('pengaduan/cetak_nota_3') ?>?id_spt=<?php echo $key->ID_SPT; ?>&id_jenis_keluhan=<?php echo $key->ID_JENIS_KELUHAN; ?>&no_spt=<?php echo $key->NO_SPT; ?>&status=<?php echo $key->STATUS_PENYELESAIAN; ?>">Nota III</a>
                                            </td>
                                            <td>
                                            <?php if($key->STATUS_SPT==1) { ?>
                                            <a class="btn btn-success btn-sm" target="_blank"  href="<?php echo site_url('pengaduan/cetak_laporan_pemeriksaan') ?>?id=<?php echo $key->ID_SPT;?>&id_tk=<?php echo $key->ID_TK ?>&id_jenis_keluhan=<?php echo $key->ID_JENIS_KELUHAN ?>&no_spt=<?php echo $key->NO_SPT; ?>" class="btn btn-sm btn-warning" >Dokumen</a>
                                            <?php } else if($key->STATUS_SPT==0) { ?>
                                                <a class="btn btn-primary btn-sm" href="<?php echo site_url('main/index/pemeriksaan-lapangan') ?>?id=<?php echo $key->ID_SPT;?>&id_tk=<?php echo $key->ID_TK ?>&id_jenis_keluhan=<?php echo $key->ID_JENIS_KELUHAN ?>" class="btn btn-sm btn-warning">Periksa
                                                </a>
                                            <?php } ?>
                                            
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