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
                        <li class="active">
                            <a href="#" class="hitam"><i class="fa fa-tasks fa-fw"></i> Pemilihan Petugas Pegawas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse in" aria-expanded="true">
                                
                                <li>
                                    <a class="aktif">Petugas Pengawas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!--li>
                            <a href="tables.html" class="hitam"><i class="fa fa-table fa-fw"></i> Master Pengguna</a>
                        </li>
                        <li>
                            <a href="forms.html" class="hitam"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#" class="hitam"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul-->
                            <!-- /.nav-second-level -->
                        <!--/li-->
                        <!--li>
                            <a href="#" class="hitam"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul-->
                                    <!-- /.nav-third-level -->
                                <!--/li>
                            </ul-->
                            <!-- /.nav-second-level -->
                        <!--/li-->
                        <!--li>
                            <a href="#" class="hitam"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul-->
                            <!-- /.nav-second-level -->
                        <!--/li-->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Halaman Pemilihan Petugas Pengawas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <?php if(isset($_GET['success'])){
                        echo '<div class="alert alert-success"><strong>Sukses!</strong> Pemilihan Petugas Berhasil Disimpan.</div>';
                    }
                    elseif (isset($_GET['failed'])) {
                         echo '<div class="alert alert-danger"><strong>Gagal!</strong> Pemilihan Petugas Gagal Disimpan.</div>';
                     } ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Form Pemilihan Petugas Pengawas (informasi pemilihan petugas pengawas)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form id="form_pemilihan_petugas_pengawas" method="POST" action="<?php echo site_url('pengaduan/pemilihan_petugas') ?>">
                        <input type="hidden" name="id_karyawan_1" id="id_karyawan_1">
                        <input type="hidden" name="id_karyawan_2" id="id_karyawan_2">
                        <input type="hidden" name="id_karyawan_3" id="id_karyawan_3">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="id">ID Pengadu</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select required id="id_pengadu" name="id_pengadu">
                                            <option selected hidden value="">Pilih Tenaga Kerja</option>
                                            <?php foreach ($data_keluhan_tk as $key) { ?>
                                                <option value="<?php echo $key->ID_JENIS_KELUHAN ?>"><?php echo '['; echo $key->ID_TK; echo '] - '; if($key->NAMA_SERIKAT != ''){
                                                    echo $key->NAMA_SERIKAT;
                                                    echo ' [';
                                                    echo $key->JENIS_KELUHAN_SERIKAT; 
                                                    echo '] ';
                                                    echo date("d-m-Y H:i:s",strtotime($key->TGL_MASUK));
                                                    }elseif ($key->NAMA_TK != ''){
                                                    echo $key->NAMA_TK;
                                                    echo ' [';
                                                    echo $key->JENIS_KELUHAN; 
                                                    echo '] ';
                                                    echo date("d-m-Y H:i:s",strtotime($key->TANGGAL_MASUK));
                                                    }    ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="id_petugas_1">Nama Petugas Pengawas 1</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="id_petugas_1" id="id_petugas_1">
                                            <option selected hidden value="">Klik Di sini Untuk Memilih Petugas</option>
                                            <?php foreach ($data_karyawan as $key1) { ?>
                                                <option value="<?php echo $key1->ID_KARYAWAN; echo '-'; echo $key1->IDPENGGUNA; ?>"><?php echo '['; echo $key1->ID_KARYAWAN; echo '] - '; echo $key1->NAMA_KARYAWAN; echo ' ['; echo $key1->IDPENGGUNA; echo '] '; echo $key1->TELP_KARYAWAN; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="id_petugas_2">Nama Petugas Pengawas 2</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="id_petugas_2" id="id_petugas_2">
                                            <option selected hidden value="">Klik Di sini Untuk Memilih Petugas</option>
                                            <?php foreach ($data_karyawan as $key1) { ?>
                                                <option value="<?php echo $key1->ID_KARYAWAN; echo '-'; echo $key1->IDPENGGUNA; ?>"><?php echo '['; echo $key1->ID_KARYAWAN; echo '] - '; echo $key1->NAMA_KARYAWAN; echo ' ['; echo $key1->IDPENGGUNA; echo '] '; echo $key1->TELP_KARYAWAN; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="id_petugas_3">Nama Petugas Pengawas 3</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="id_petugas_3" id="id_petugas_3">
                                            <option selected hidden value="">Klik Di sini Untuk Memilih Petugas</option>
                                            <?php foreach ($data_karyawan as $key1) { ?>
                                                <option value="<?php echo $key1->ID_KARYAWAN; echo '-'; echo $key1->IDPENGGUNA; ?>"><?php echo '['; echo $key1->ID_KARYAWAN; echo '] - '; echo $key1->NAMA_KARYAWAN; echo ' ['; echo $key1->IDPENGGUNA; echo '] '; echo $key1->TELP_KARYAWAN; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!--div class="col-lg-6 col-sm-6 col-12">
                                <h4>MP3 / WAV</h4>
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Browse&hellip; <input type="file" name="file" style="display: none;" accept="audio/*">
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <span class="help-block">
                                    File rekaman harus dalam bentuk format <strong>.mp3</strong> atau <strong>.wav</strong>
                                </span>
                            </div-->
                            
                            <!-- /.table-responsive -->
                            <!--div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div-->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    <!-- /.panel -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-2 form-group"><input type="submit" class="btn btn-md btn-success" value="SIMPAN" /></div>
                            <div class="col-sm-2 form-group"><button class="btn btn-md btn-danger">TIDAK</button></div>
                        </div>
                    </div>
                    </form>
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
    <!-- Autocomplete - Bootstrap Plugin -->
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

        $('select#id_pengadu').selectize({
            sortField: 'text'
        });
        $('select#id_petugas_1').selectize({
            sortField: 'text'
            }
        );
        $('select#id_petugas_2').selectize({
            sortField: 'text'
            }
        );
        $('select#id_petugas_3').selectize({
            sortField: 'text'
            }
        );

        
        // $('#dataTables-example').DataTable({
        //     "language": {
        //         "sSearch": "Cari:",
        //     "lengthMenu": "Tampilkan _MENU_ baris",
        //     "zeroRecords": "Data Tidak Ditemukan",
        //     "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
        //     "infoEmpty": "Data Tidak Ada",
        //     "infoFiltered": "(difilter dari _MAX_ data yang ada)",
        //     "paginate": {
        //       "previous": "<",
        //       "next": ">"
        //     }
        // },
        //     responsive: true
        // });


    });
    </script>