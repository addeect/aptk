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
        <li><a href="<?php echo site_url('reporter/naskah') ?>">Naskah</a></li>
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
      <h2><a><?php echo $_SESSION['sess_namalok'] ?></a></h2>
      <ul class="nav nav-pills nav-stacked kustom_sidebar">
        <li><a href="<?php echo site_url('reporter/naskah') ?>">Naskah</a></li>
        <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
      </ul>
      <br>
    </div>
    <form method="post" enctype="multipart/form-data" name="buat_berita" action="<?php echo site_url('reporter/koreksi') ?>">

    <div class="col-sm-9 konten">
      <div class="row">
        <div class="col-sm-12">
          <div>
            <h3 class="text-center" style="padding:10px 0 20px 0">Editor Berita</h3>
            <div class="action_button"><button class="btn btn-sm btn-success">SIMPAN</button></div>
            <div class="action_button1"><a class="btn btn-sm btn-primary" href="<?php echo site_url('reporter/naskah') ?>">KEMBALI</a></div>
          </div>
          <div>
            <?php foreach ($berita as $data_news ) {?>
            <input type='hidden' name="id_berita" id="id_berita" value="<?php echo $data_news->ID ?>" />
            <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Judul</h3>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data_news->JUDUL_FULL;?>"/>
                    </div>
            </div>
            <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Isi</h3>
                    </div>
                    <div class="panel-body">
                        <textarea class="form-control" style="resize:none;height:200px" id="isi" name="isi"><?php echo $data_news->ISI;?></textarea>
                    </div>
            </div>
            <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Rekaman</h3>
                    </div>
                    <div class="panel-body">
                        <audio src="<?php echo base_url('uploads'); echo "/"; echo $data_news->PATH ?>" controls></audio>
                    </div>
            </div>
           <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </form>
  </div>
</div>
<script>
$(document).ready(function(){
  $('#kalender').datetimepicker({
  format:'d.m.Y',
  inline:true,
  lang:'id'
});
});
</script>