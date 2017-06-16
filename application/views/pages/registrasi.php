<link href="<?php echo base_url('assets/css/jquery.datetimepicker.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets/css/HoldOn.min.css') ?>" rel="stylesheet" type="text/css">
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
                    <h1 class="page-header">Halaman Registrasi</h1>
                    <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="jenis_tk">Jenis Tenaga Kerja</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="jenis_tk" id="jenis_tk" class="form-control" onchange="gantiJenisAkun(this.value)">
                                            <option value="perorangan" selected>Perorangan</option>
                                            <option value="perserikatan" >Perserikatan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- PANEL PERTAMA -->
                    <div class="panel panel-default">
                        
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Data Identitas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="form-group tk" id="f01">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_tk">Nama Lengkap</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control tk" name="nama_tk" id="nama_tk" placeholder="Contoh : Edi Samijan" maxlength="50" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group tk" id="f02">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="no_ktp">Nomor KTP</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input style="width:200px" type="text" class="form-control tk" name="no_ktp" id="no_ktp" placeholder="Contoh : 351117010220000001" maxlength="30" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group tk" id="f03">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="alamat_tk">Alamat</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea maxlength="100" style="resize:none;height:60px" class="form-control tk" name="alamat_tk" id="alamat_tk" placeholder="Contoh : Jl. Kasuari 10 No. 21 Bekasi Jawa Barat"/></textarea>
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group tk" id="f04">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="tempat_lahir_tk">Tempat Lahir</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input style="width:150px" maxlength="50" type="text" class="form-control tk" name="tempat_lahir_tk" id="tempat_lahir_tk" placeholder="Contoh : Jakarta" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group tk" id="f05">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="tgl_lahir_tk">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input style="width:103px" type="text" class="form-control tk" name="tgl_lahir_tk" id="tgl_lahir_tk" placeholder="Klik Di Sini" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group tk" id="f06">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="jenis_kelamin_tk">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <select style="width:140px" name="jenis_kelamin_tk" id="jenis_kelamin_tk" class="form-control tk">
                                            <option value="Laki-laki" selected>Laki-laki</option>
                                            <option value="Perempuan" >Perempuan</option>
                                        </select>
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group tk" id="f07">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="agama_tk">Agama</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input maxlength="20" style="width:120px" type="text" class="form-control tk" name="agama_tk" id="agama_tk" placeholder="Contoh : Islam" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group tk" id="f08">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="status_kawin_tk">Status Kawin</label>
                                        <!--p class="help-block">*Isi keluhan pengaduan minimal 500 kata dan diceritakan secara berurutan</p-->
                                    </div>
                                    <div class="col-sm-6">
                                        <select style="width:140px" name="status_kawin_tk" id="status_kawin_tk" class="form-control tk">
                                            <option value="Belum Kawin" selected>Belum Kawin</option>
                                            <option value="Kawin" >Kawin</option>
                                        </select>
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group tk" id="f09">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="pekerjaan_tk">Pekerjaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input maxlength="50" style="width:220px" type="text" class="form-control tk" name="pekerjaan_tk" id="pekerjaan_tk" placeholder="Contoh : Karyawan Swasta" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group tk" id="f10">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="kwn_tk">Kewarganegaraan</label>
                                        <!--p class="help-block">*Isi keluhan pengaduan minimal 500 kata dan diceritakan secara berurutan</p-->
                                    </div>
                                    <div class="col-sm-6">
                                        <select style="width:260px" name="kwn_tk" id="kwn_tk" class="form-control tk">
                                            <option value="WNI" selected>WNI (Warga Negara Indonesia)</option>
                                            <option value="WNA" >WNA (Warga Negara Asing)</option>
                                        </select>
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="g01" class="form-group sk" style="display:none">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_sk">Nama Serikat</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input maxlength="50" type="text" class="form-control sk" name="nama_sk" id="nama_sk" placeholder="Contoh : SPSI" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="g02" class="form-group sk" style="display:none">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="alamat_sk">Alamat Serikat</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea  maxlength="500" style="resize:none;height:60px" class="form-control sk" name="alamat_sk" id="alamat_sk" placeholder="Contoh : Jl. Kasuari 10 No. 21 Bekasi Jawa Barat"/></textarea>
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="g03" class="form-group sk" style="display:none">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="telepon_sk">Telepon Serikat</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input  maxlength="30" style="width:180px" type='text' class="form-control sk" name="telepon_sk" id="telepon_sk" placeholder="Contoh : 02315507499" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="g04" class="form-group sk" style="display:none">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="nama_perusahaan">Nama Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input maxlength="100" type='text' class="form-control sk" name="nama_perusahaan" id="nama_perusahaan" placeholder="Contoh : CV. Adi Maju Jaya" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="g05" class="form-group sk" style="display:none">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="alamat_perusahaan">Alamat Perusahaan</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <textarea  maxlength="500" style="resize:none;height:60px" class="form-control sk" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Contoh : Jl. Kebon Jeruk 1 No. 34 Jakarta"/></textarea>
                                        
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="g06" class="form-group sk" style="display:none">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="telp_perusahaan">Telepon Perusahaan</label>
                                        <!--p class="help-block">*Isi keluhan pengaduan minimal 500 kata dan diceritakan secara berurutan</p-->
                                    </div>
                                    <div class="col-sm-6">
                                        <input maxlength="30" style="width:180px" type="text" class="form-control sk" name="telp_perusahaan" id="telp_perusahaan" placeholder="Contoh : 0217781234" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="g07" class="form-group sk" style="display:none">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="telp_hrd_serikat">Telepon HRD Serikat</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input maxlength="30" style="width:180px" type="text" class="form-control sk" name="telp_hrd_serikat" id="telp_hrd_serikat" placeholder="Contoh : 0313975544" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <!--div class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="upload_hasil_pemeriksaan">Upload Hasil Pemeriksaan</label>
                                        <p class="help-block">*Isi keluhan pengaduan minimal 500 kata dan diceritakan secara berurutan</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>MP3 / WAV</h4>
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
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    
                    <!--PANEL KEDUA -->
                    <div class="panel panel-default">
                        
                        <div class="panel-heading" style="color: #fff;background-color: #ec6b4d;">
                            Data Akun
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="acc01" class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="username">Email</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Contoh : vendetta32@game.net" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="acc02" class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Pilih password yang mudah diingat selain tanggal lahir" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>
                            <div id="acc03" class="form-group">
                                <div class="row">
                                    <div class="col-sm-1">&nbsp;</div>
                                    <div class="col-sm-3">
                                        <label for="password_conf">Konfirmasi Password</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="password_conf" id="password_conf" placeholder="Ulangi Password yang anda ketik sebelumnya" />
                                        <p class="help-block" style="display:none"></p>
                                    </div>
                                </div>
                            </div>

                            
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-2 form-group"><input type="button" class="btn btn-md btn-success" id="btn-daftar"  value="DAFTAR"></div>
                            <div class="col-sm-2 form-group"><a href="<?php echo site_url() ?>" class="btn btn-md btn-danger">Ke Halaman Login</a></div>
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
    function gantiJenisAkun(value){
        var jenis = value;
        if(jenis==='perorangan'){
            $('div.tk').css("display","block");
            $('input.tk').prop("disabled");
            $('div.sk').css("display","none");
        }
        else if(jenis==='perserikatan'){
            $('div.sk').css("display","block");
            $('input.sk').prop("disabled");
            $('div.tk').css("display","none");
        }
    };

    // Variabel Status Isian
    var f1, f2, f3, f4, f5, f7, f9, acc1, acc2, acc3, g1, g2, g3, g4, g5, g6, g7 = 0;
    

    function cekIsian01(){
        
        var nama_tk = $("#nama_tk").val();
        var no_ktp = $("#no_ktp").val();
        var alamat_tk = $("#alamat_tk").html();
        var tempat_lahir_tk = $("#tempat_lahir_tk").val();
        var tanggal_lahir_tk = $("#tgl_lahir_tk").val();
        var agama_tk = $("#agama_tk").val();
        var pekerjaan_tk = $("#pekerjaan_tk").val();
        if(nama_tk===''){
            f1 = 0;
             $('div#f01').addClass('bermasalah');
             $('div#f01 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f01 div div.col-sm-6 p').css('display','block');
             $('div#f01 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(nama_tk!=''){
            f1 = 1;
            $('div#f01').removeClass('bermasalah');
             //$('div#f01 div div.col-sm-6 p').html('Kolom tidak boleh kosong');
             $('div#f01 div div.col-sm-6 p').css('display','none');
             $('div#f01 div div.col-sm-6 p').css('font-weight','bold');
        }
        if(no_ktp===''){
            f2 = 0;
             $('div#f02').addClass('bermasalah');
             $('div#f02 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f02 div div.col-sm-6 p').css('display','block');
             $('div#f02 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(no_ktp!=''){
            f2 = 1;
             $('div#f02').removeClass('bermasalah');
             //$('div#f02 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f02 div div.col-sm-6 p').css('display','none');
             $('div#f02 div div.col-sm-6 p').css('font-weight','bold');
        }
        if (!$.trim($("#alamat_tk").val())) {
            f3 = 0;
            // textarea is empty or contains only white-space
            $('div#f03').addClass('bermasalah');
             $('div#f03 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f03 div div.col-sm-6 p').css('display','block');
             $('div#f03 div div.col-sm-6 p').css('font-weight','bold');
        }
        else{
            f3 = 1;
            $('div#f03').removeClass('bermasalah');
             //$('div#f03 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f03 div div.col-sm-6 p').css('display','none');
             $('div#f03 div div.col-sm-6 p').css('font-weight','bold');
         }
        if(tempat_lahir_tk===''){
            f4 = 0;
             $('div#f04').addClass('bermasalah');
             $('div#f04 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f04 div div.col-sm-6 p').css('display','block');
             $('div#f04 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(tempat_lahir_tk!=''){
            f4 = 1;
             $('div#f04').removeClass('bermasalah');
             //$('div#f04 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f04 div div.col-sm-6 p').css('display','none');
             $('div#f04 div div.col-sm-6 p').css('font-weight','bold');
        }
        if(tanggal_lahir_tk===''){
            f5 = 0;
             $('div#f05').addClass('bermasalah');
             $('div#f05 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f05 div div.col-sm-6 p').css('display','block');
             $('div#f05 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(tanggal_lahir_tk!=''){
             f5 = 1;
             $('div#f05').removeClass('bermasalah');
             //$('div#f05 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f05 div div.col-sm-6 p').css('display','none');
             $('div#f05 div div.col-sm-6 p').css('font-weight','bold');
        }
        if(agama_tk===''){
            f7 = 0;
             $('div#f07').addClass('bermasalah');
             $('div#f07 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f07 div div.col-sm-6 p').css('display','block');
             $('div#f07 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(agama_tk!=''){
            f7 = 1;
             $('div#f07').removeClass('bermasalah');
             // $('div#f07 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f07 div div.col-sm-6 p').css('display','none');
             $('div#f07 div div.col-sm-6 p').css('font-weight','bold');
        }
        if(pekerjaan_tk===''){
            f9 = 0;
             $('div#f09').addClass('bermasalah');
             $('div#f09 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f09 div div.col-sm-6 p').css('display','block');
             $('div#f09 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(pekerjaan_tk!=''){
            f9 = 1;
             $('div#f09').removeClass('bermasalah');
             // $('div#f09 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#f09 div div.col-sm-6 p').css('display','none');
             $('div#f09 div div.col-sm-6 p').css('font-weight','bold');
        }
    };

    function cekIsian02(){
        
        var nama_sk = $("#nama_sk").val();
        
        var alamat_sk = $("#alamat_sk").html();
        var telepon_sk = $("#telepon_sk").val();
        var nama_perusahaan = $("#nama_perusahaan").val();
        var alamat_perusahaan = $("#alamat_perusahaan").val();
        var telp_perusahaan = $("#telp_perusahaan").val();
        var telp_hrd_serikat = $("#telp_hrd_serikat").val();
        if(nama_sk===''){
            g1 = 0;
             $('div#g01').addClass('bermasalah');
             $('div#g01 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g01 div div.col-sm-6 p').css('display','block');
             $('div#g01 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(nama_sk!=''){
            g1 = 1;
            $('div#g01').removeClass('bermasalah');
             //$('div#g01 div div.col-sm-6 p').html('Kolom tidak boleh kosong');
             $('div#g01 div div.col-sm-6 p').css('display','none');
             $('div#g01 div div.col-sm-6 p').css('font-weight','bold');
        }
        if (!$.trim($("#alamat_sk").val())) {
            g2 = 0;
            // textarea is empty or contains only white-space
            $('div#g02').addClass('bermasalah');
             $('div#g02 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g02 div div.col-sm-6 p').css('display','block');
             $('div#g02 div div.col-sm-6 p').css('font-weight','bold');
        }
        else{
            g2 = 1;
            $('div#g02').removeClass('bermasalah');
             //$('div#g02 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g02 div div.col-sm-6 p').css('display','none');
             $('div#g02 div div.col-sm-6 p').css('font-weight','bold');
         }
        if(telepon_sk===''){
            g3 = 0;
             $('div#g03').addClass('bermasalah');
             $('div#g03 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g03 div div.col-sm-6 p').css('display','block');
             $('div#g03 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(telepon_sk!=''){
             g3 = 1;
             $('div#g03').removeClass('bermasalah');
             //$('div#g03 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g03 div div.col-sm-6 p').css('display','none');
             $('div#g03 div div.col-sm-6 p').css('font-weight','bold');
        }
        if(nama_perusahaan===''){
             g4 = 0;
             $('div#g04').addClass('bermasalah');
             $('div#g04 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g04 div div.col-sm-6 p').css('display','block');
             $('div#g04 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(nama_perusahaan!=''){
             g4 = 1;
             $('div#g04').removeClass('bermasalah');
             //$('div#g04 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g04 div div.col-sm-6 p').css('display','none');
             $('div#g04 div div.col-sm-6 p').css('font-weight','bold');
        }
        if (!$.trim($("#alamat_perusahaan").val())) {
            g5 = 0;
            // textarea is empty or contains only white-space
            $('div#g05').addClass('bermasalah');
             $('div#g05 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g05 div div.col-sm-6 p').css('display','block');
             $('div#g05 div div.col-sm-6 p').css('font-weight','bold');
        }
        else{
            g5 = 1;
            $('div#g05').removeClass('bermasalah');
             //$('div#g05 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g05 div div.col-sm-6 p').css('display','none');
             $('div#g05 div div.col-sm-6 p').css('font-weight','bold');
         }
        if(telp_perusahaan===''){
             g6 = 0;
             $('div#g06').addClass('bermasalah');
             $('div#g06 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g06 div div.col-sm-6 p').css('display','block');
             $('div#g06 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(telp_perusahaan!=''){
             g6 = 1;
             $('div#g06').removeClass('bermasalah');
             // $('div#g06 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g06 div div.col-sm-6 p').css('display','none');
             $('div#g06 div div.col-sm-6 p').css('font-weight','bold');
        }
        if(telp_hrd_serikat===''){
             g7 = 0;
             $('div#g07').addClass('bermasalah');
             $('div#g07 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g07 div div.col-sm-6 p').css('display','block');
             $('div#g07 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(telp_hrd_serikat!=''){
             g7 = 1;
             $('div#g07').removeClass('bermasalah');
             // $('div#g07 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#g07 div div.col-sm-6 p').css('display','none');
             $('div#g07 div div.col-sm-6 p').css('font-weight','bold');
        }
    };

    function cekIsian03(){
        var email = $("#username").val();
        var password = $("#password").val();
        var passwordconf = $("#password_conf").val();

        if(email===''){
            acc1 = 0;
             $('div#acc01').addClass('bermasalah');
             $('div#acc01 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#acc01 div div.col-sm-6 p').css('display','block');
             $('div#acc01 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(email!=''){
             acc1 = 1;
             $('div#acc01').removeClass('bermasalah');
             // $('div#acc01 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#acc01 div div.col-sm-6 p').css('display','none');
             $('div#acc01 div div.col-sm-6 p').css('font-weight','bold');
        }
        if(password===''){
            acc2 = 0;
             $('div#acc02').addClass('bermasalah');
             $('div#acc02 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#acc02 div div.col-sm-6 p').css('display','block');
             $('div#acc02 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(password!=''){
             acc2 = 1;
             $('div#acc02').removeClass('bermasalah');
             // $('div#acc02 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#acc02 div div.col-sm-6 p').css('display','none');
             $('div#acc02 div div.col-sm-6 p').css('font-weight','bold');
        }
        if(passwordconf===''){
            acc3 = 0;
             $('div#acc03').addClass('bermasalah');
             $('div#acc03 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#acc03 div div.col-sm-6 p').css('display','block');
             $('div#acc03 div div.col-sm-6 p').css('font-weight','bold');
        }
        else if(passwordconf!=''){
            acc3 = 1;
             $('div#acc03').removeClass('bermasalah');
             // $('div#acc03 div div.col-sm-6 p').html('*Kolom tidak boleh kosong');
             $('div#acc03 div div.col-sm-6 p').css('display','none');
             $('div#acc03 div div.col-sm-6 p').css('font-weight','bold');
        }
    };

    $(document).ready(function() {

        // LOADING
        $( "#reg_form" ).submit(function( event ) {
          // alert( "Handler for .submit() called." );
          var options = {
                 theme:"sk-cube-grid",
                 message:'. . . Menyimpan Data Registrasi . . .',
                 backgroundColor:"#ffffff",
                 textColor:"black"
            };

            HoldOn.open(options);
          //event.preventDefault();
        });
        

        // DATEPICKER
        $('#tgl_lahir_tk').datetimepicker({
            timepicker:false,
            format:'d-m-Y'
        });

        // CEK ISIAN FORM
        $("#btn-daftar").click(function(){
            
            var jenis_tk = $("#jenis_tk").val();
            if(jenis_tk==='perorangan'){
                cekIsian01();
                cekIsian03();
                if(f1===1 && f2===1 && f3===1 && f4===1 && f5===1 && f7===1 && f9===1 && acc1===1 && acc2===1 && acc3===1){
                    //alert("SIAP");
                    $("#reg_form").submit();
                }
                else{
                    //alert("BELUM SIAP");
                }
            }
            else if(jenis_tk==='perserikatan'){
                cekIsian02();
                cekIsian03();
                if(g1===1 && g2===1 && g3===1 && g4===1 && g5===1 && g6===1 && acc1===1 && acc2===1 && acc3===1){
                    //alert("SIAP");
                    $("#reg_form").submit();
                }
                else{
                    //alert("BELUM SIAP");
                }
            }
        });

        // NUMBER ONLY TYPING
        $("#no_ktp").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

        $("#telepon_sk").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

        $("#telp_perusahaan").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

        $("#telp_hrd_serikat").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
        // $('div#f01').addClass('bermasalah');
        // $('div#f01 div div.col-sm-6 p').html('Nama Salah');
        // $('div#f01 div div.col-sm-6 p').css('display','block');
        // $('div#f01 div div.col-sm-6 p').css('font-weight','bold');

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
        /*$('#dataTables-example').DataTable({
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
        });*/
    });
    </script>