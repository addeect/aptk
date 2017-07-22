
<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #fff;box-shadow:1px 1px 8px #383838;margin-top:-56px;" id="navbar_me">
            <div class="navbar-header">
                
                <a class="navbar-brand putih" href="javascript:void(0)" style="font-size:14px">APLIKASI PENGADUAN TENAGA KERJA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" href="<?php echo site_url('registrasi') ?>">
                       Daftar Baru
                        <i class="fa fa-user fa-fw"></i>
                    </a>
                </li>
                <!-- /.dropdown -->
                 <!--li class="dropdown">
                    <a class="dropdown-toggle" href="#">
                       Lupa Password
                        <i class="fa fa-cog fa-fw"></i>
                    </a>
                </li-->
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            
            <!-- /.navbar-static-side -->
        </nav>
<div class="container halaman_login"  >
        <div class="row" id="delay_start1" style="display:none">
          <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4" style="text-align:center;margin-top: 50px;">
                    <img src="<?php echo base_url('assets/img/logo-02.png') ?>" style="width:100%">
                    <h3 class="text-center" style="color:#ffffff">
                        <strong>LOGIN</strong>
                    </h3>
                    <p class="bg-danger text-danger"><?php echo $msg ?></p>
                </div>
            </div>
        </div>
            <div class="col-sm-4 col-sm-offset-4" style="padding-top:20px">
                <form role="form" onsubmit="loadingPage()" action="<?php echo site_url('redirect')?>" method="POST" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control text-center" placeholder="Email" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control text-center" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <div style="width:100%;padding-top:17px" class="text-center">
                                    <button type="submit" name="submit" class="btn btn-md btn-primary">Masuk</button>
                                </div>
                                
                            </fieldset>
                        </form>
                
                
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/HoldOn.min.js') ?>"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        var height = $(window).height();
        var percent = (height*0.1);
        var total = (height+percent);
        $('body').css("height",total+"px");
        var options = {
             theme:"sk-cube-grid",
             message:'. . . Loading . . .',
             backgroundColor:"#ffffff",
             textColor:"black"
        };

        HoldOn.open(options);
        setTimeout(function(){ 
            HoldOn.close();
            $('.halaman_login').css("opacity","1"); 
            $("#delay_start1").delay(500).fadeIn();
            $('#navbar_me').css("margin-top","0px");
        }, 1000);
        
        

        
        
        
        //$('.loading_top_overlay').css("opacity","0");
        //$('body').delay(1000).css("opacity","1");
        
        //setTimeout(function(){  }, 500);
        
    });
    function loadingPage(){
        var options = {
             theme:"sk-cube-grid",
             message:'. . . Proses Autentikasi . . .',
             backgroundColor:"#ffffff",
             textColor:"black"
        };

        HoldOn.open(options);
    };
    </script>