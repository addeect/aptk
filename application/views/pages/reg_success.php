<link href="<?php echo base_url('assets/css/jquery.datetimepicker.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/HoldOn.min.css') ?>" rel="stylesheet" type="text/css">
<div id="wrapper" style="opacity:0">

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

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <form id="reg_form" method="POST" action="<?php echo site_url('registrasi/validateForm') ?>">
        <div id="page-wrapper" style="margin:0 0 0 0;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">Registrasi Berhasil</h1>
                    <div class="text-center"><img src="<?php echo site_url('assets/img/success.png') ?>" style></div>
                    <p class="text-center">Email Verifikasi Telah Dikirim Ke Email Yang Anda Daftarkan.<br/>Silahkan Cek Email Anda</p>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                    <!-- /.panel -->
                    <div class="form-group text-center">
                        <div class="row">
                            
                            <div class="form-group"><a href="<?php echo site_url() ?>" class="btn btn-md btn-success">Ke Halaman Login</a></div>
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </form>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/HoldOn.min.js') ?>"></script>
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
    $(document).ready(function(){
        //$('div#wrapper').css("opacity","0");
        // LOADING
        var options = {
                 theme:"sk-cube-grid",
                 message:'. . . Data Registrasi Berhasil Tersimpan . . .',
                 backgroundColor:"#ffffff",
                 textColor:"black"
            };

        HoldOn.open(options);
        setTimeout(function(){ 
            HoldOn.close();
            $('div#wrapper').css("opacity","1"); 
            // $("#delay_start1").delay(500).fadeIn();
            // $('#navbar_me').css("margin-top","0px");
        }, 1000);
    });
    </script>