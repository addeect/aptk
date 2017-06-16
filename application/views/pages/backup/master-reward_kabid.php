<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Kabid</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('kabid/evaluasi') ?>">Evaluasi</a></li>
        <li class="active"><a>Master Reward</a></li>
        <li><a href="<?php echo site_url('kabid/master-pegawai') ?>">Data Pegawai</a></li>
        <li><a href="<?php echo site_url('kabid/master-kategori') ?>">Master Kategori</a></li>
        <li><a href="<?php echo site_url('kabid/hasil-reward') ?>">Hasil Reward</a></li>
        <li><a href="<?php echo site_url('kabid/laporan-bulanan') ?>">Rekapitulasi Bulanan</a></li>
        <li><a href="<?php echo site_url('kabid/laporan-tahunan') ?>">Rekapitulasi Tahunan</a></li>
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
      <span class="menu_item" style="border-bottom: 1px solid #337ab7;"><a><?php echo $_SESSION['nama_user'] ?></a></span>
      <span class="menu_item">Anda masuk sebagai</span>
      <h2><?php echo $_SESSION['role'] ?></h2>
      <!--h2><a><?php // echo $_SESSION['sess_namalok'] ?></a></h2-->
      <ul class="nav nav-pills nav-stacked kustom_sidebar">
        <li><a href="<?php echo site_url('kabid/evaluasi') ?>">Evaluasi</a></li>
        <li class="active"><a>Master Reward</a></li>
        <li><a href="<?php echo site_url('kabid/master-pegawai') ?>">Data Pegawai</a></li>
        <li><a href="<?php echo site_url('kabid/master-kategori') ?>">Master Kategori</a></li>
        <li><a href="<?php echo site_url('kabid/hasil-reward') ?>">Hasil Reward</a></li>
        <li><a href="<?php echo site_url('kabid/laporan-bulanan') ?>">Rekapitulasi Bulanan</a></li>
        <li><a href="<?php echo site_url('kabid/laporan-tahunan') ?>">Rekapitulasi Tahunan</a></li>
        <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
      </ul>
      <br>
    </div>

    <div class="col-sm-9 konten">
      <form action="<?php echo site_url('kabid/simpanReward') ?>" method="post">
      <div class="row">
        <div class="col-sm-12">
          <div>
            <h3 class="text-center">Master Reward</h3>
          </div>
          <div class="form-group">
            <label>Nominal Reward Lama</label>
            <?php foreach( $reward as $data ) { ?>
            <input type="text" class="form-control" name="reward_lama" id="reward_lama" value="<?php echo $data->REWARD ?>" readonly/>
            <?php } ?>
          </div>
          <div class="form-group">
            <label>Nominal Reward Baru</label>
            <input type="text" class="form-control" name="reward" id="reward" autofocus />
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Simpan" />
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('#kalender').datetimepicker({
    timepicker:false,
  format:'d.m.Y',
  inline:true,
  lang:'id'
});
});
</script>