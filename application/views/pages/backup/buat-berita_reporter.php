<script src="<?php echo base_url('assets/js/tinymce.min.js') ?>"></script>
<script>tinymce.init({ selector:'textarea',plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code textcolor'
  ],
  toolbar: 'forecolor backcolor | undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image' });</script>
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Redaksi</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('redaksi/home') ?>">Home</a></li>
        <li class="active"><a>Editor</a></li>
        <li><a href="<?php echo site_url('redaksi/daftar-berita') ?>">Berita</a></li>
        <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs font_menu">
      <div class="profile_picture_container"><img class="profile_picture" src="<?php echo base_url('assets/img/Logo_RRI.png')?>">
        <span class="menu_item">RRI News Management</span>
      </div>
      <span class="menu_item" style="border-bottom: 1px solid #337ab7;"><?php echo $_SESSION['nama_user'] ?></span>
      <span class="menu_item">Anda masuk sebagai</span>
      <h2><?php echo $_SESSION['role'] ?></h2>
      
      <ul class="nav nav-pills nav-stacked kustom_sidebar">
        <li><a href="naskah">Naskah</a></li>
        <li><a href="reward">Reward</a></li>
        <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
      </ul>
      <br>
    </div>
    <form method="post" enctype="multipart/form-data" name="buat_berita" id="form_buat_berita" action="<?php echo site_url('reporter/saveNew') ?>">
      <input type="hidden" name="id_user" value="<?php echo $_SESSION['user_id'] ?>">
      <input type="hidden" name="id_reward" value="<?php foreach ($reward as $key) { echo $key->ID;} ?>">
    <div class="col-sm-9 konten">
      <div class="row">
        <div class="col-sm-12">
          <div>
            <h3 class="text-center" style="padding:10px 0 20px 0">Buat Berita</h3>
            <div class="action_button"><button type="submit" name"submit" class="btn btn-sm btn-success">SIMPAN</button></div>
            <div class="action_button1"><a class="btn btn-sm btn-primary" href="<?php echo site_url('reporter/naskah') ?>">KEMBALI</a></div>
          </div>
          <div>
            <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Pilih Kategori Berita</h3>
                    </div>
                    <div class="panel-body">
                        <select class="form-control" name="kategori">
                          <?php foreach ($kategori as $data_news ) { ?>
                          <option value="<?php echo $data_news->ID; ?>"><?php echo $data_news->NAMA_KATEGORI; ?></option>
                          <?php } ?>
                        </select>
                    </div>
            </div>
            
            <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Judul</h3>
                    </div>
                    <div class="panel-body">
                        <input class="form-control" id="judul" name="judul" type="text" />
                    </div>
            </div>
            <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Isi</h3>
                    </div>
                    <div class="panel-body">
                        <textarea class="form-control" style="resize:none;height:200px" id="isi" name="isi"></textarea>
                    </div>
            </div>
           <div class="checkbox">
            <label><input type="checkbox" value="" id="checkRekaman" />Upload Rekaman</label>
           </div>
           <div class="panel panel-primary" id="panel_rekaman" style="display:none">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Upload Rekaman Suara</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-6 col-sm-6 col-12">
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
        </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<script>
$(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() { // START OF Document Ready
    $('#kalender').datetimepicker({
  format:'d.m.Y',
  inline:true,
  lang:'id'
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

      $("#checkRekaman").change(function() {
          if(this.checked) {
             $('#panel_rekaman').css("display","block");
             $('#form_buat_berita').attr("action","<?php echo site_url('reporter/doUpload') ?>");
          }
          else{
              $('#panel_rekaman').css("display","none");
              $('#form_buat_berita').attr("action","<?php echo site_url('reporter/saveNew') ?>");
          }
      });
  }); // END OF Document Ready
  
});
</script>