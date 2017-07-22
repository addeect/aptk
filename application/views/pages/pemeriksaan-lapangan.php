
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
                                    <a href="<?php echo site_url('main/index/daftar-pengaduan') ?>">Daftar Pengaduan</a>
                                </li>
                                <li>
                                    <a class="aktif" >Pemeriksaan Lapangan</a>
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
                    <h1 class="page-header">Halaman Pemeriksaan Lapangan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <form id="form_pemeriksaan" method="post" action="<?php echo site_url('pengaduan/insert_pemeriksaan') ?>">
                <input type="hidden" name="id_spt" value="<?php echo $_GET['id'] ?>">
                <input type="hidden" name="id_jenis_keluhan" value="<?php echo $_GET['id_jenis_keluhan'] ?>">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Form Pemeriksaan Lapangan (Monitoring)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <?php foreach ($spt_list as $key) { ?>
                           
                        
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="id">ID Pengguna</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="id" id="id" placeholder="Ketik ID Pengguna. Contoh 170010" readonly value="<?php echo $key->ID_TK; ?>"/>
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
                                        <input value="<?php echo $key->NAMA_PERUSAHAAN; ?>" type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="Ketik Nama Perusahaan Tempat Anda Bekerja" readonly />
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
                                        <input value="<?php echo $key->JENIS_USAHA; ?>" type="text" class="form-control" name="jenis_usaha" id="jenis_usaha" placeholder="Ketik Jenis Usaha" readonly/>
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
                                        <input value="<?php echo $key->ALAMAT_PERUSAHAAN; ?>" type="text" class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Ketik Alamat Tempat Anda Bekerja" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="deskripsi_kasus">Deskripsi Kasus</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea type="text" style="resize:none; height: 200px" class="form-control" name="deskripsi_kasus" id="deskripsi_kasus" placeholder="Kasus" readonly ><?php echo preg_replace("/\<br\s*\/?\>/i", "\n", $key->ISI_SPT); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="jenis_pelanggaran">Jenis Pelanggaran</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input value="<?php echo $key->JENIS_KELUHAN; ?>" type="text" class="form-control" name="jenis_pelanggaran" id="jenis_pelanggaran" placeholder="Ketik Alamat Tempat Anda Bekerja" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="keluhan">Keluhan Pengadu</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea type="text" style="resize:none; height: 280px" class="form-control" name="keluhan" id="keluhan" placeholder="Ketik Alamat Tempat Anda Bekerja" readonly ><?php echo $key->ISI_KELUHAN; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="jumlah_pegawai">Jumlah Pegawai</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="jumlah_pegawai" id="jumlah_pegawai" placeholder="Berapa Orang" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="keterangan">Keterangan Pemeriksaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea  class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!--<div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_pemilik">Nama Pemilik Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" placeholder="Nama Pemilik" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="alamat_pemilik">Alamat Pemilik Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="alamat_pemilik" id="alamat_pemilik" placeholder="Alamat Pemilik"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nomor_akta">Nomor Akta Pendirian Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nomor_akta" id="nomor_akta" placeholder="Nomor Akta" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_pengurus">Nama Pengurus Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama_pengurus" id="nama_pengurus" placeholder="Nomor Akta" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_sp_sb">Nama SP / SB</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama_sp_sb" id="nama_sp_sb" placeholder="Nama SP atau SB" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_ketua">Nama Ketua</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama_ketua" id="nama_ketua" placeholder="Nama Ketua" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_sekretaris">Nama Sekretaris</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="nama_sekretaris" id="nama_sekretaris" placeholder="Nama Sekretaris" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="status_perusahaan">Status Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="status_perusahaan" id="status_perusahaan">
                                            <option selected hidden value="">Pilih Status Perusahaan</option>
                                            <option value="PMDN">PMDN</option>
                                            <option value="PMA">PMA</option>
                                            <option value="Patungan">Patungan</option>
                                            <option value="Lain-lain">Lain-lain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="jml_penerimaan_buruh">Jumlah Penerimaan Pekerja / Buruh 12 Bulan Terakhir</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="jml_penerimaan_buruh" id="jml_penerimaan_buruh" placeholder="Nama Sekretaris" />
                                    </div>
                                </div>
                            </div>-->
                            <!--div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="upload_hasil_pemeriksaan">Upload Hasil Pemeriksaan</label>
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                
                                                <div class="input-group">
                                                    <label class="input-group-btn">
                                                        <span class="btn btn-primary">
                                                            Browse&hellip; <input type="file" name="file" style="display: none;" accept="application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, application/pdf">
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" readonly>
                                                </div>
                                                <span class="help-block">
                                                    File dokumen yang dapat diupload <strong>.doc</strong>&nbsp;<strong>.docx</strong>&nbsp;<strong>.xls</strong>&nbsp;<strong>.xlsx</strong>&nbsp;<strong>.pdf</strong>
                                                </span>
                                            </div>
                                        </div>
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
                            <div class="col-sm-2 form-group"><input type="submit" class="btn btn-md btn-success" value="SIMPAN"></div>
                            <div class="col-sm-2 form-group"><button class="btn btn-md btn-danger">TIDAK</button></div>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
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

        // We can attach the `fileselect` event to all file inputs on the page
          $(document).on('change', ':file', function() {
            var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [numFiles, label]);
          });
          
          $(':file').on('fileselect', function(event, numFiles, label) {

              var input = $(this).parents('.input-group').find(':text'),
                  log = numFiles > 1 ? numFiles + ' files selected' : label;

              if( input.length ) {
                  input.val(log);
              } else {
                  if( log ) alert(log);
              }

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