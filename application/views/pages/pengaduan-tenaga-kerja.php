
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
                        <li >
                            <a href="<?php echo site_url('main/index/status-pengaduan') ?>" class="hitam"><i class="fa fa-home fa-fw"></i> Beranda</a>
                        </li>
                        <li class="active">
                            <a href="#" class="hitam aktif"><i class="fa fa-tasks fa-fw"></i> Buat Pengaduan</a>
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
                    <h1 class="page-header">Halaman Pengaduan Tenaga Kerja</h1>
                    
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php if(isset($_GET['success'])){
                        echo '<div class="alert alert-success"><strong>Sukses!</strong> Pengaduan Berhasil Disimpan.</div>';
                    }
                    elseif (isset($_GET['failed'])) {
                         echo '<div class="alert alert-danger"><strong>Gagal!</strong> Pengaduan Gagal Disimpan.</div>';
                     } ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Form Pengaduan Tenaga Kerja (Input Data Keluhan)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form role="form" onsubmit="loadingPage()" action="<?php echo site_url('main/pengaduan1')?>" method="POST">
                            <input type="hidden" id="id_keluhan_tk_max" name="id_keluhan_tk_max" value="<?php foreach($data_max_id_keluhan_tk as $key) { echo $key->ID_KELUHAN_TK; } ?>"/>
                            <?php foreach($data_perseorangan as $key) { ?>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="id">ID Pengadu</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="id" id="id" placeholder="Ketik ID Pengadu. Contoh 170010" readonly value="<?php echo $key->ID_TK ?>" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama">Nama Pengadu</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="nama" id="nama" placeholder="Ketik Nama Anda" value="<?php echo $key->NAMA_TK ?>" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_perusahaan">Nama Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Ketik Nama Perusahaan Tempat Anda Bekerja" value="<?php echo $key->NAMA_PERUSAHAAN ?>" readonly/>
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
                                        <input class="form-control" name="jenis_usaha" id="jenis_usaha" placeholder="Ketik Jenis Usaha" value="<?php echo $key->JENIS_USAHA ?>" readonly/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="alamat_perusahaan">Alamat Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Ketik Alamat Tempat Anda Bekerja" value="<?php echo $key->ALAMAT_PERUSAHAAN ?>" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="jenis_keluhan">Jenis Keluhan<span style="color:red">*</span></label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="jenis_keluhan" class="form-control" id="jenis_keluhan">
                                            <option selected hidden>Silahkan Pilih</option>
                                            <option value="Pelanggaran Normatif">Pelanggaran Normatif</option>
                                            <option value="Pelanggaran K3">Pelanggaran Keselamatan Kesehatan Kerja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="keluhan">Keluhan<span style="color:red">*</span></label>
                                        <p class="help-block">*Isi keluhan pengaduan minimal 500 kata dan diceritakan secara berurutan</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea required style="resize:none;height:200px" class="form-control" name="keluhan" id="keluhan" placeholder="Ketik Keluhan Anda"/></textarea>
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
                            <div class="col-sm-2 form-group"><button class="btn btn-md btn-success">SIMPAN</button></div>
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
        function loadingPage(){
        var options = {
             theme:"sk-cube-grid",
             message:'. . . Menyimpan Data Pengaduan . . .',
             backgroundColor:"#ffffff",
             textColor:"black"
        };

        HoldOn.open(options);
    };
    });
    </script>