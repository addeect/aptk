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
                            <a  class="aktif hitam"><i class="fa fa-cog fa-fw"></i> Master Pasal</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('main/index/kinerja-pengawas') ?>" class="hitam"><i class="fa fa-bar-chart-o fa-fw"></i> Kinerja Pengawas</a>
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
                    <h1 class="page-header">Master Pasal</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Pasal</label>
                                <input class="form-control" type="text" name="pasal" placeholder="Pasal"/>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Jenis Pelanggaran</label>
                                <select name="jenis_pelanggaran" id="jenis_pelanggaran" class="form-control">
                                    <option value="2">Pelanggaran K3</option>
                                    <option value="1">Pelanggaran Normatif</option>
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
                            Daftar Pasal Yang Tersimpan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="col-xs-1">No</th>
                                        <th class="col-xs-8">Pasal</th>
                                        <th class="col-xs-2">Jenis Pelanggaran</th>
                                        <th class="col-xs-1">Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1; foreach ($pasal as $key) { ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $key->KETERANGAN_PASAL; ?></td>
                                            <td><?php if($key->JENIS_PASAL_PELANGGARAN == 1 ){echo "Pelanggaran Normatif";} elseif($key->JENIS_PASAL_PELANGGARAN == 2){echo "Pelanggaran K3";} ?></td>
                                            <td><a class="btn btn-sm btn-primary btn-block" href="javascript:void(0)" onclick="editPasal(<?php echo $key->ID_PASAL; ?>)">Edit</a></td>
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

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <form method="post" action="<?php echo site_url('pengaduan/edit_pasal') ?>">
                                        <input type="hidden" name="id_pasal_edit" id="id_pasal_edit">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Data Pasal</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Pasal</label>
                                                <input type="text" name="pasal_edit" id="pasal_edit" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Pelanggaran</label>
                                                <select class="form-control" name="jenis_pelanggaran_edit" id="jenis_pelanggaran_edit">
                                                    <option value="2">Pelanggaran K3</option>
                                                    <option value="1">Pelanggaran Normatif</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-success" value="Simpan"/>
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
    function editPasal(id){
        $("#myModal").modal('show');
        $('input#id_pasal_edit').val(id);
        var id_pasal = id;
            // AJAX START
            var request = $.ajax({
              url: "<?php echo site_url('pengaduan/getDataPasal') ?>",
              method: "POST",
              data: { id : id_pasal },
              dataType: "json"
            });

            request.done(function( data ) {
              if ($.isEmptyObject(data)){
                    $('input#pasal_edit').val("Data Tidak Ditemukan");
                    $('select#jenis_pelanggaran_edit').val("Data Tidak Ditemukan");
                }
                else{
                    var pasal_edit = data[0].KETERANGAN_PASAL;
                    var jenis_pelanggaran_edit = data[0].JENIS_PASAL_PELANGGARAN;
                    $('input#pasal_edit').val(pasal_edit);
                    $('select#jenis_pelanggaran_edit').val(jenis_pelanggaran_edit);
                }
            });

            request.fail(function( jqXHR, textStatus ) {
              alert( "Request failed: " + textStatus );
            });
    };
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