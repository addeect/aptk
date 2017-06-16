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
        <li class="active"><a>Evaluasi</a></li>
        <li><a href="<?php echo site_url('kabid/master-reward') ?>">Master Reward</a></li>
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
        <li class="active"><a>Evaluasi</a></li>
        <li><a href="<?php echo site_url('kabid/master-reward') ?>">Master Reward</a></li>
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
      <h3 class="text-center" style="padding-bottom:10px">Evaluasi</h3>
      <form action="<?php echo site_url('kabid/simpanReward') ?>" method="post">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr style="background-color:#bfe2ff">
              <th>No.</th>
              <th>Nama Reporter</th>
              <th>Bulan</th>
              <th>Tahun</th>
              <th>Jumlah Berita</th>
              <th>Point Reward</th>
            </tr>
          </thead>
          <tbody id="isi_tabel">
            <?php $start=1; foreach ($evaluasi as $data_evaluasi) { ?>
            <tr>
              <td><?php echo $start++ ?></td>
              <td><?php echo $data_evaluasi->NAMA_USER ?></td>
              <td><?php echo $data_evaluasi->NAMA_BULAN ?></td>
              <td><?php echo $data_evaluasi->TAHUN ?></td>
              <td><?php echo $data_evaluasi->jumlah_berita ?></td>
              <td><?php echo $data_evaluasi->jumlah_reward ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
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