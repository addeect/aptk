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
                            <a href="#" class="hitam"><i class="fa fa-files-o fa-fw"></i> Pemeriksaan Lapangan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse in" aria-expanded="true">
                                <li>
                                    <a class="aktif">Hasil Temuan</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('main/index/daftar-pengaduan') ?>" class="">Daftar Pengaduan</a>
                                </li>
                                <!--<li>
                                    <a href="<?php // echo site_url('main/index/pemeriksaan-lapangan') ?>">Pemeriksaan Lapangan</a>
                                </li>-->
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
            <form method="post" action="<?php echo site_url('pengaduan/tambah_pasal') ?>" id="form_hasil_temuan">
            <input type="hidden" name="id_spt" value="<?php echo $_GET['id_spt'] ?>">
            <input type="hidden" name="id_jenis_keluhan" value="<?php echo $_GET['id_jenis_keluhan'] ?>">
            <input type="hidden" name="status" value="<?php echo $_GET['status'] ?>">
                <div class="col-lg-12">
                    <h1 class="page-header">Hasil Temuan</h1>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Pelanggaran</label>
                                <input class="form-control" type="text" name="pelanggaran" placeholder="Pelanggaran">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Jenis Pelanggaran</label>
                                <select class="form-control" name="jenis_pelanggaran" id="jenis_pelanggaran">
                                    <option value="null" hidden selected>Pilih Jenis Pelanggaran</option>
                                    <option value="1">Pelanggaran Normatif</option>
                                    <option value="2">Pelanggaran K3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group" id="isi_pasal">
                                <label>Pasal</label>
                                <select class="form-control" name="id_pasal" id="id_pasal">
                                <option hidden selected >Pilih Pasal</option>
                                    <!--<?php foreach ($pasal as $key) { ?>
                                        <option value="<?php echo $key->ID_PASAL; ?>" label="<?php echo $key->JENIS_PASAL_PELANGGARAN ?>"><?php echo $key->KETERANGAN_PASAL; ?></option>
                                    <?php } ?>-->
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="+ TAMBAH BARU" class="btn btn-primary btn-sm" />
                    </div>
                    
                </div>
                </form>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Daftar Pasal Yang Sesuai
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pelanggaran</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Pasal</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1; foreach ($spt_list as $key) { ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $key->ISI_HASIL_TEMUAN; ?></td>
                                            <td><?php if($key->JENIS_PELANGGARAN == 1){echo "Pelanggaran Normatif";} elseif($key->JENIS_PELANGGARAN == 2){echo "Pelanggaran K3";} ?></td>
                                            <td><?php echo $key->KETERANGAN_PASAL; ?></td>
                                            <td><a href="<?php echo site_url('pengaduan/hapusTemuan'); echo '/'; echo $key->ID_HASIL_TEMUAN; ?>?id_spt=<?php echo $_GET['id_spt'] ?>&id_jenis_keluhan=<?php echo $_GET['id_jenis_keluhan']; ?>&status=<?php echo $_GET['status']; ?>" class="btn btn-sm btn-block btn-danger">Hapus</a></td>
                                        </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
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
        $('select#jenis_pelanggaran').change(function(){
            var select = $('select#id_pasal');
            select.empty();
            var jenis = this.value;
            var id_spt = <?php echo $_GET['id_spt'] ?>;
            // alert(jenis);
            // AJAX START
            var request = $.ajax({
              url: "<?php echo site_url('pengaduan/getPasal_t') ?>",
              method: "POST",
              data: { jenis : jenis, id_spt : id_spt },
              dataType: "json"
            });
             
            request.done(function( data ) {
              if ($.isEmptyObject(data)){
                    $('select#id_pasal').val("Data Tidak Ditemukan");
                }
              else{
                var id_pasal = data[0].ID_PASAL;
                var pasal = data[0].KETERANGAN_PASAL;
                
                // alert(data.length);
                var i = 0;
                for (i = 0; i < data.length ; i++) {
                    select.append('<option value="'+data[i].ID_PASAL+'">'+data[i].KETERANGAN_PASAL+'</option>');
                }
                
                // select.empty().append('<option value="'+id_pasal+'">'+pasal+'</option>');
                
              }
              
            });
             
            request.fail(function( jqXHR, textStatus ) {
              alert( "Request failed: " + textStatus );
            });
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