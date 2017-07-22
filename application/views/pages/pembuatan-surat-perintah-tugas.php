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
                                    <a class="aktif">Admin Pengawas</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('main/index/laporan-bulanan') ?>" class="">Laporan Bulanan</a>
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
                    <h1 class="page-header">Halaman Pembuatan Surat Perintah Tugas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <?php if(isset($_GET['success'])){
                        echo '<div class="alert alert-success"><strong>Sukses!</strong> Pembuatan Surat Perintah Tugas Berhasil Disimpan.</div>';
                    }
                    elseif (isset($_GET['failed'])) {
                         echo '<div class="alert alert-danger"><strong>Gagal!</strong> Pembuatan Surat Perintah Tugas Gagal Disimpan.</div>';
                     } ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Form Surat Perintah Tugas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form target="_blank" method="GET" id="form_pembuatan_spt" action="<?php echo site_url('pengaduan/pembuatan_SPT') ?>">
                            <input type="hidden" name="id_jenis_keluhan" id="id_jenis_keluhan">
                            <input type="hidden" name="alamat_perusahaan" id="alamat_perusahaan">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="no_spt">ID SPT</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="no_spt" id="no_spt">
                                            <option selected hidden value="">Pilih Nomor SPT</option>
                                            <?php foreach ($id_spt as $key1) { ?>
                                                <option value="<?php echo $key1->ID_SPT;?>"><?php echo $key1->ID_SPT; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="petugas_1">Nama Petugas Pengawas 1</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" readonly class="form-control" name="petugas_1" id="petugas_1" placeholder="Nama Petugas Pengawas" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="petugas_2">Nama Petugas Pengawas 2</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" readonly class="form-control" name="petugas_2" id="petugas_2" placeholder="Nama Petugas Pengawas" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="petugas_3">Nama Petugas Pengawas 3</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" readonly class="form-control" name="petugas_3" id="petugas_3" placeholder="Nama Petugas Pengawas" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_pengadu">Nama Pengadu</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" readonly class="form-control" name="nama_pengadu" id="nama_pengadu" placeholder="Nama Pengadu" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="pengaduan">Pengaduan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea type="text" readonly style="height: 240px;resize: none;" class="form-control" name="pengaduan" id="pengaduan" placeholder="Deskripsi Pengaduan" ></textarea>
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
                                        <input type="text" readonly class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="tgl_awal">Durasi Kasus</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <input  type="text" class="form-control tk" name="tgl_awal" id="tgl_awal" placeholder="Klik Di Sini" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                    <div class="col-sm-1">
                                        <label>S/d tanggal</label>
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                    <div class="col-sm-2">
                                        <input  type="text" class="form-control tk" name="tgl_akhir" id="tgl_akhir" placeholder="Klik Di Sini" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <!--div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="kasus">Kasus<span style="color:red">*</span></label>
                                        <p class="help-block">*Isi pembahasan peruntukan Surat Perintah Tugas</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea required style="resize:none;height:200px" class="form-control" name="kasus" id="kasus" placeholder="Ketik Penjelasan Kasus"/></textarea>
                                    </div>
                                </div>
                            </div-->
                            
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
                            <div class="col-sm-2 form-group"><input onclick="setTimeout(function(){ window.location='<?php echo site_url('main/index/pembuatan-surat-perintah-tugas?success')?>'; }, 3000);" type="submit" class="btn btn-md btn-success" value="SIMPAN"/></div>
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
    <script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js') ?>"></script>
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
        // DATEPICKER
        $('#tgl_awal').datetimepicker({
            timepicker:false,
            format:'d-m-Y'
        });
        $('#tgl_akhir').datetimepicker({
            timepicker:false,
            format:'d-m-Y'
        });
        $('select#no_spt').selectize({
            sortField: 'text'
        });
        $('select#no_spt').change(function(){
            var id_spt = this.value;
            // AJAX START
            var request = $.ajax({
              url: "<?php echo site_url('pengaduan/getDataSPT') ?>",
              method: "POST",
              data: { id : id_spt },
              dataType: "json"
            });
             
            request.done(function( data ) {
              if ($.isEmptyObject(data)){
                    $('input#petugas_1').val("Petugas Tidak Ditemukan");
                    $('input#petugas_2').val("Petugas Tidak Ditemukan");
                    $('input#petugas_3').val("Petugas Tidak Ditemukan");
                    $('input#nama_pengadu').val("Pengadu Tidak Ditemukan");
                    $('input#pengaduan').val("Data Tidak Ditemukan");
                    $('input#nama_perusahaan').val("Data Tidak Ditemukan");
                }
              else{
                var nama_perorangan = data[0].NAMA_TK;
                var nama_serikat = data[0].NAMA_SERIKAT;
                var id_jenis_keluhan = data[0].ID_JENIS_KELUHAN;
                var alamat_perusahaan = data[0].ALAMAT_PERUSAHAAN;
                var pengaduan = data[0].ISI_KELUHAN;
                if(pengaduan == null){
                    pengaduan = '';
                }
                var pengaduan_serikat = data[0].ISI_KELUHAN_SERIKAT;
                if(pengaduan_serikat == null){
                    pengaduan_serikat = '';
                }
                
                var nama_perusahaan = data[0].NAMA_PERUSAHAAN;
                var id_jenis_keluhan = data[0].ID_JENIS_KELUHAN;
                $('input#petugas_1').val(data[0].NAMA_KARYAWAN);
                $('input#petugas_2').val(data[1].NAMA_KARYAWAN);
                $('input#petugas_3').val(data[2].NAMA_KARYAWAN);
                $('textarea#pengaduan').html(pengaduan+" "+pengaduan_serikat);
                $('input#nama_perusahaan').val(nama_perusahaan);
                $('input#alamat_perusahaan').val(alamat_perusahaan);
                $('input#id_jenis_keluhan').val(id_jenis_keluhan);
                // alert(nama_perorangan+nama_serikat);
                if(nama_perorangan == null && nama_serikat == null){
                    $('input#nama_pengadu').val("Petugas Tidak Ditemukan");
                }
                else if(nama_perorangan == null){
                    $('input#nama_pengadu').val(nama_serikat);
                }
                else if(nama_serikat == null){
                    $('input#nama_pengadu').val(nama_perorangan);
                }
                else{
                    $('input#nama_pengadu').val(nama_serikat+" - "+nama_perorangan);
                }
              }
              
            });
             
            request.fail(function( jqXHR, textStatus ) {
              alert( "Request failed: " + textStatus );
            });
        });

    });
    </script>