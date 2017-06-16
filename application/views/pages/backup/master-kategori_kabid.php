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
        <li><a href="<?php echo site_url('kabid/master-reward') ?>">Master Reward</a></li>
        <li><a href="<?php echo site_url('kabid/master-pegawai') ?>">Data Pegawai</a></li>
        <li class="active"><a>Master Kategori</a></li>
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
        <li><a href="<?php echo site_url('kabid/master-reward') ?>">Master Reward</a></li>
        <li><a href="<?php echo site_url('kabid/master-pegawai') ?>">Data Pegawai</a></li>
        <li class="active"><a>Master Kategori</a></li>
        <li><a href="<?php echo site_url('kabid/hasil-reward') ?>">Hasil Reward</a></li>
        <li><a href="<?php echo site_url('kabid/laporan-bulanan') ?>">Rekapitulasi Bulanan</a></li>
        <li><a href="<?php echo site_url('kabid/laporan-tahunan') ?>">Rekapitulasi Tahunan</a></li>
        <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
      </ul>
      <br>
    </div>

    <div class="col-sm-9 konten">
      <div class="row">
        <div class="col-sm-12">
          <div>
          <h3 class="text-center" style="padding-bottom:17px;padding-top: 12px;">Master Kategori</h3>
          <div class="action_button1"><a class="btn btn-sm btn-primary" href="#" onclick="showAddKategori()">BUAT BARU +</a></div>
          </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr style="background-color:#bfe2ff">
              <th>No.</th>
              <th>Kategori Berita</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="isi_tabel">
            <?php $start=1; foreach ($kategori_aktif as $data_pegawai) { ?>
            <tr>
              <td><?php echo $start++ ?></td>
              <td><?php echo $data_pegawai->NAMA_KATEGORI ?></td>
              <td class="text-center"><a href="#" onclick="showEditKategori('<?php echo $data_pegawai->ID_KATEGORI; ?>','<?php $nama_kategori = $data_pegawai->NAMA_KATEGORI; echo rawurlencode($nama_kategori); ?>')" class="btn btn-sm btn-warning">Edit</a>&nbsp;<a href="#" onclick="showDeleteKategori('<?php echo $data_pegawai->ID_KATEGORI; ?>','<?php $nama_kategori = $data_pegawai->NAMA_KATEGORI; echo rawurlencode($nama_kategori); ?>')" class="btn btn-sm btn-danger">Hapus</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div></div>
    </div>
  </div>
</div>
<!-- start modal -->
<div id="modal_edit_kategori" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm modal_custom">
<form id="form_app01" method="POST" action="<?php echo site_url('kabid/editKategori') ?>">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align:center">Edit Data</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Nama Kategori</label>
                <input class="form-control" type="text" id="nama_kategori" name="nama_kategori" autofocus/>
              </div>
              
              <div class="modal_action">
                <input type="hidden" name="id_kategori" id="id_kategori" value=""/>
                <button type="submit" class="btn btn-success" name="submit">Simpan</button><span>&nbsp;</span>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>

              </div>
            </div>
            <!--div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div-->
          </div>
          <!--input type="hidden" name="att01" id="att01" value=""/-->
</form>
        </div>
      </div>
<!-- end modal -->
<!-- start modal -->
<div id="modal_hapus_kategori" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm modal_custom">
<form id="form_app01" method="POST" action="<?php echo site_url('kabid/hapusKategori') ?>">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align:center">Perhatian</h4>
            </div>
            <div class="modal-body">
              <p class="modal_paragraph">Apa anda akan menghapus kategori berita <strong id="kategori_hapus"></strong> ?</p>
              
              <div class="modal_action">
                <input type="hidden" name="id_kategori1" id="id_kategori1" value=""/>
                <button type="submit" class="btn btn-success" name="submit">Ya</button><span>&nbsp;</span>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>

              </div>
            </div>
          </div>
          <!--input type="hidden" name="att01" id="att01" value=""/-->
</form>
        </div>
      </div>
<!-- end modal -->
<!-- start modal -->
<div id="modal_tambah_kategori" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm modal_custom">
<form id="form_app01" method="POST" action="<?php echo site_url('kabid/saveKategori') ?>">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align:center">Tambah Data</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Nama Kategori</label>
                <input class="form-control" type="text" id="nama_kategori_baru" name="nama_kategori_baru" autofocus/>
              </div>
              
              <div class="modal_action">
                <button type="submit" class="btn btn-success" name="submit">Simpan</button><span>&nbsp;</span>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>

              </div>
            </div>
            <!--div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div-->
          </div>
          <!--input type="hidden" name="att01" id="att01" value=""/-->
</form>
        </div>
      </div>
<!-- end modal -->
<script>
function showAddKategori(){
  $('#modal_tambah_kategori').modal('show');
};
function showEditKategori(id,kategori){
  $('#modal_edit_kategori').modal('show');
  $('#id_kategori').val(id);
  $('#nama_kategori').val(kategori);
};
function showDeleteKategori(id,kategori){
  $('#modal_hapus_kategori').modal('show');
  $('#id_kategori1').val(id);
  $('#kategori_hapus').html(kategori);
};
$(document).ready(function(){
  var dev_height = $(window).height();
  var modal_height = (dev_height-(0.7*dev_height));
  $('.modal_custom').css("margin-top",modal_height+"px");

  $('#kalender').datetimepicker({
    timepicker:false,
  format:'d.m.Y',
  inline:true,
  lang:'id'
  });
});
</script>