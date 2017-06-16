<link href="<?php echo base_url('assets/css/jquery.datetimepicker.css') ?>" rel="stylesheet" />
<?php
$nik = '';
$nama ='';
$ttl='';
$gender='';
$alamat='';
$agama='';
$status_kawin='';
    // if(isset($_GET['nik'])){
    //     $nik = $_GET['nik'];
    //     if($nik=='0701001'){
    //         $nama = 'Supriyadi';
    //         $ttl = 'Sidoarjo, 30 April 1977';
    //         $gender = 'Laki-laki';
    //         $alamat = 'Jl. Seram HOP No.10 Surabaya';
    //         $agama = 'Islam';
    //         $status_kawin = 'Kawin';
    //     }
    //     elseif($nik=='0701002'){
    //         $nama = 'Setyadi';
    //         $ttl = 'Jakarta, 12 Oktober 1980';
    //         $gender = 'Laki-laki';
    //         $alamat = 'Jl. Belibis 3 No.9 GGA Gresik';
    //         $agama = 'Kristen';
    //         $status_kawin = 'Kawin';
    //     }
    //     elseif($nik=='0701003'){
    //         $nama = 'Eka Putri';
    //         $ttl = 'Tulungagung, 5 Mei 1983';
    //         $gender = 'Perempuan';
    //         $alamat = 'Jl. Baruk Utara 3 No.55 Surabaya';
    //         $agama = 'Islam';
    //         $status_kawin = 'Belum Kawin';
    //     }
    // }
?>
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
                <li class="dropdown">
                    <a class="dropdown-toggle putih" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle putih" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle putih" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle putih" data-toggle="dropdown" href="#">
                        <?php echo $_SESSION['role'] ?> - <?php echo $_SESSION['nama_user'] ?>
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                        <li>
                            <a href="index.html" class="hitam"><i class="fa fa-home fa-fw"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="#" class="aktif"><i class="fa fa-files-o fa-fw"></i> Pengaduan</a>
                            
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
                    <h1 class="page-header">Pendaftaran Tenaga Kerja (Mandiri)</h1>
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            A : Data Tenaga Kerja
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form id="edit_pengadu_form" method="post" action="<?php echo site_url('pengaduan/edit_pengadu') ?>">
                            <input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" name="id_tk" id="id_tk"/>
                            <?php foreach($data_perseorangan as $key){ ?>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nik">NIK (Nomor Induk Kependudukan)*</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input required class="form-control" name="nik" id="nik" value="<?php echo $key->NO_KTP; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama">Nama*</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input required class="form-control" name="nama" id="nama" value="<?php echo $key->NAMA_TK; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="ttl">Tempat Tanggal Lahir</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <input class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo $key->TEMPAT_LAHIR; ?>" />
                                            </div>
                                            <div class="col-xs-8">
                                                <input class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?php $date=$key->TANGGAL_LAHIR; echo date('d-m-Y', strtotime($date)); ?>" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="gender">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="gender" class="form-control" id="gender">
                                            <!--option selected hidden>Silahkan Pilih</option-->
                                            <?php $gender=$key->JENIS_KEL; 
                                                if($gender=='Laki-laki'){
                                                    echo '<option value="Laki-laki" selected>Laki-laki</option>';
                                                    echo '<option value="Perempuan">Perempuan</option>';
                                                }
                                                elseif($gender=='Perempuan'){
                                                    echo '<option value="Laki-laki" >Laki-laki</option>';
                                                    echo '<option value="Perempuan" selected>Perempuan</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="alamat">Alamat</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="alamat" id="alamat" value="<?php echo $key->ALAMAT_TK; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="agama">Agama</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="agama" class="form-control" id="agama">
                                            <!--option selected hidden>Silahkan Pilih</option-->
                                            <?php 
                                            $agama = $key->AGAMA;
                                            if($agama=='Islam'){
                                                    echo '<option value="Islam" selected>Islam</option>';
                                                    echo '<option value="Kristen">Kristen</option>';
                                                    echo '<option value="Hindu">Hindu</option>';
                                                    echo '<option value="Budha">Budha</option>';
                                                    echo '<option value="Konghucu">Konghucu</option>';
                                                }
                                                elseif($agama=='Kristen'){
                                                    echo '<option value="Islam">Islam</option>';
                                                    echo '<option value="Kristen" selected>Kristen</option>';
                                                    echo '<option value="Hindu">Hindu</option>';
                                                    echo '<option value="Budha">Budha</option>';
                                                    echo '<option value="Konghucu">Konghucu</option>';
                                                }
                                                elseif($agama=='Hindu'){
                                                    echo '<option value="Islam">Islam</option>';
                                                    echo '<option value="Kristen">Kristen</option>';
                                                    echo '<option value="Hindu" selected>Hindu</option>';
                                                    echo '<option value="Budha">Budha</option>';
                                                    echo '<option value="Konghucu">Konghucu</option>';
                                                }
                                                elseif($agama=='Budha'){
                                                    echo '<option value="Islam">Islam</option>';
                                                    echo '<option value="Kristen">Kristen</option>';
                                                    echo '<option value="Hindu">Hindu</option>';
                                                    echo '<option value="Budha" selected>Budha</option>';
                                                    echo '<option value="Konghucu">Konghucu</option>';
                                                }
                                                elseif($agama=='Konghucu'){
                                                    echo '<option value="Islam">Islam</option>';
                                                    echo '<option value="Kristen">Kristen</option>';
                                                    echo '<option value="Hindu">Hindu</option>';
                                                    echo '<option value="Budha">Budha</option>';
                                                    echo '<option value="Konghucu" selected>Konghucu</option>';
                                                }
                                                else{
                                                    echo '<option selected hidden>Silahkan Pilih Agama</option>';
                                                    echo '<option value="Islam">Islam</option>';
                                                    echo '<option value="Kristen">Kristen</option>';
                                                    echo '<option value="Hindu">Hindu</option>';
                                                    echo '<option value="Budha">Budha</option>';
                                                    echo '<option value="Konghucu">Konghucu</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="status_kawin">Status Perkawinan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="status_kawin" class="form-control" id="status_kawin">
                                            <!--option selected hidden>Silahkan Pilih</option-->
                                            <?php $status_kawin=$key->STATUS_KAWIN;
                                            if($status_kawin=='Kawin'){
                                                    echo '<option value="Kawin" selected>Kawin</option>';
                                                    echo '<option value="Belum Kawin">Belum Kawin</option>';
                                                }
                                                elseif($status_kawin=='Belum Kawin'){
                                                    echo '<option value="Kawin" >Kawin</option>';
                                                    echo '<option value="Belum Kawin" selected>Belum Kawin</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="pekerjaan">Pekerjaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Nama Pekerjaan Saat Ini" value="<?php echo $key->PEKERJAAN; ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="kwn">Kewarganegaraan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="kwn" class="form-control" id="kwn">
                                            
                                            <?php $kwn=$key->KEWARGANEGARAAN;
                                            if($kwn=='WNI'){
                                                    echo '<option value="WNI" selected>WNI</option>';
                                                    echo '<option value="WNA">WNA</option>';
                                                }
                                                elseif($kwn=='WNA'){
                                                    echo '<option value="WNI">WNI</option>';
                                                    echo '<option value="WNA" selected>WNA</option>';
                                                }
                                                else{
                                                    echo "<option selected hidden>Silahkan Pilih</option>";
                                                    echo '<option value="WNI">WNI</option>';
                                                    echo '<option value="WNA">WNA</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="jabatan">Jabatan Pekerjaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan Pekerjaan Saat Ini" value="<?php echo $key->JABATAN; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="lama_kerja">Lama Kerja</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="lama_kerja" class="form-control" id="lama_kerja">
                                            <option value="" hidden>Berapa Tahun Anda Bekerja ?</option>
                                            <option value="0">Kurang dari 1 Tahun</option>
                                            <option value="1">1 Tahun</option>
                                            <option value="2">2 Tahun</option>
                                            <option value="3">3 Tahun</option>
                                            <option value="4">4 Tahun</option>
                                            <option value="5">5 Tahun</option>
                                            <option value="6">6 Tahun</option>
                                            <option value="7">7 Tahun</option>
                                            <option value="8">8 Tahun</option>
                                            <option value="9">9 Tahun</option>
                                            <option value="10">10 Tahun</option>
                                            <option value="11">11 Tahun</option>
                                            <option value="12">12 Tahun</option>
                                            <option value="13">Lebih dari 12 Tahun</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /.table-responsive -->
                            <!--div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div-->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            B : Data Perusahaan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_perusahaan">Nama Perusahaan*</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input required value="<?php echo $key->NAMA_PERUSAHAAN; ?>" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="alamat_perusahaan">Alamat Perusahaan*</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input required value="<?php echo $key->ALAMAT_PERUSAHAAN; ?>" class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Alamat Perusahaan"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="jenis_usaha">Jenis Usaha</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input value="<?php echo $key->JENIS_USAHA; ?>" class="form-control" name="jenis_usaha" id="jenis_usaha" placeholder="Jenis Usaha"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="telp_perusahaan">Telp Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input value="<?php echo $key->TELP_PERUSAHAAN; ?>" class="form-control" name="telp_perusahaan" id="telp_perusahaan" placeholder="Nomor Telepon Perusahaan" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="telp_hrd">Telp Bidang HRD</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input value="<?php echo $key->TELP_HRD_SERIKAT; ?>" class="form-control" name="telp_hrd" id="telp_hrd" placeholder="Nomor Telepon HRD Perusahaan" />
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
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
                            <div class="col-sm-2 form-group"><input type="submit" class="btn btn-md btn-success" value="SIMPAN"/></div>
                            <div class="col-sm-2 form-group"><button class="btn btn-md btn-danger">BATAL</button></div>
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
    <script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js') ?>"></script>
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
        $('#lama_kerja').val('<?php echo $key->LAMA_KERJA; ?>');
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

        // DATEPICKER
        $('#tanggal_lahir').datetimepicker({
            timepicker:false,
            format:'d-m-Y'
        });
    });
    </script>