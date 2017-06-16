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
        <li><a href="home">Home</a></li>
        <li class="active"><a>Berita</a></li>
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
      <span class="menu_item" style="border-bottom: 1px solid #337ab7;"><a><?php echo $_SESSION['sess_username'] ?></a></span>
      <span class="menu_item">Anda masuk sebagai</span>
      <h2>Redaksi</h2>
      <h2><a><?php echo $_SESSION['sess_namalok'] ?></a></h2>
      <ul class="nav nav-pills nav-stacked kustom_sidebar">
        <li><a href="home">Home</a></li>
        <li class="active"><a>Berita</a></li>
        <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
      </ul>
      <br>
    </div>

    <div class="col-sm-9 konten">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center" style="padding:10px 0 20px 0">
            <h3>Daftar Reporter &amp; Berita</h3>
          </div>
          <form method="post" action="<?php echo site_url('redaksi/search') ?>">
            <div class="input-group" style="margin-bottom:10px">
              <input name="keyword" type="text" class="form-control" placeholder="Cari Judul atau bagian dari isi berita">
              <div class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </div>
            </div>
          </form>
          <ul class="nav nav-tabs">
            <li class="active"><a href="#" onclick="return false;">Belum Disetujui</a></li>
            <li><a href="<?php echo site_url('redaksi/daftar-berita-approved') ?>">Disetujui </a></li>
          </ul>
          <br>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr style="background-color:#bfe2ff">
                  <th>No</th>
                  <th>Nama Reporter</th>
                  <th>Berita</th>
                  <th>Tanggal Pembuatan</th>
                  <th>Waktu</th>
                  <th>Topik</th>
                </tr>
              </thead>
              <tbody class="isi_tabel">
                <?php $start=1; foreach ($berita as $data_berita) { ?>
                  <?php $sts=$data_berita->TANGGAL_EDIT; $revisi=$data_berita->STATUS_REVISI; if($sts!=null){echo "<tr style='background-color: #f4f4f4;' >";}else{ echo "<tr style='font-weight:bold'>";} ?>
                    <td><?php echo $start++ ?></td>
                    <td><?php echo $data_berita->NAMA ?></td>
                    <td><a style="float:left; width:100%;" href="editor/<?php echo $data_berita->ID ?>"><?php echo $data_berita->JUDUL ?>...</a><div style="float:left;" class="<?php if($revisi==='DIEDIT OLEH REDAKSI'){echo 'pY';}elseif($revisi==='DIEDIT OLEH REPORTER'){echo 'pH';} ?>"></div><div style="float:left"><span style="padding-left: 7px;"><?php if($revisi==='DIEDIT OLEH REDAKSI'){echo 'Belum direvisi oleh reporter';}elseif($revisi==='DIEDIT OLEH REPORTER'){echo '<strong>Sudah direvisi oleh reporter</strong>';} ?></span></div></td>
                    <td><?php echo date('d-M-Y', strtotime($data_berita->TANGGAL_PEMBUATAN)) ?></td>
                    <td><?php echo date('H:i', strtotime($data_berita->TANGGAL_PEMBUATAN)) ?></td>
                    <td><?php echo $data_berita->NAMA_KATEGORI ?></td>
                  </tr>
                <?php } ?>
                
              </tbody>
            </table>
          </div>
          
      </div>
    </div>
  </div>
</div>
<!-- start modal -->
<div id="modal_notif_revisi" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm modal_custom">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align:center">Notifikasi</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <h1 class="text-center"><?php echo $jml_berita_telah_direvisi; ?></h1>
                <h4 class="text-center">BERITA TELAH DIREVISI</h4>
              </div>
              
              <div class="modal_action">
                <!--button type="submit" class="btn btn-success" name="submit">Simpan</button><span>&nbsp;</span-->
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>

              </div>
            </div>
            <!--div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div-->
          </div>
          <!--input type="hidden" name="att01" id="att01" value=""/-->
        </div>
      </div>
<!-- end modal -->
<script>
$(document).ready(function(){
  <?php if ($jml_berita_telah_direvisi!=0){
    echo "$('#modal_notif_revisi').modal('show');";   
  }
  ?>
});
</script>