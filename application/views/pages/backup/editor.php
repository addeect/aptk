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
      <span class="menu_item" style="border-bottom: 1px solid #337ab7;"><a><?php echo $_SESSION['sess_username'] ?></a></span>
      <span class="menu_item">Anda masuk sebagai</span>
      <h2>Redaksi</h2>
      <h2><a><?php echo $_SESSION['sess_namalok'] ?></a></h2>
      <ul class="nav nav-pills nav-stacked kustom_sidebar">
        <li><a href="<?php echo site_url('redaksi/home') ?>">Home</a></li>
        <li><a href="<?php echo site_url('redaksi/daftar-berita') ?>">Berita</a></li>
        <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
      </ul>
      <br>
    </div>
    <form method="post" enctype="multipart/form-data" name="buat_berita" action="<?php echo site_url('redaksi/koreksi') ?>">

    <div class="col-sm-9 konten">
      <div class="row">
        <div class="col-sm-12">
          <div>
            <h3 class="text-center" style="padding:10px 0 20px 0">Editor Berita</h3>
            <div class="action_button"><button class="btn btn-sm btn-success">SIMPAN</button><span>&nbsp;</span><input type="button" class="btn btn-sm btn-warning" onclick="approve1()" value="APPROVE"></div>
            <div class="action_button1"><a class="btn btn-sm btn-primary" href="<?php echo site_url('redaksi/daftar-berita') ?>">KEMBALI</a></div>
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
<!-- MODAL -->
<!-- #1 MODAL START -->
<!-- Modal #1-->
<div id="modal_approve_berita" class="modal fade" role="dialog">
<div class="modal-dialog modal-sm">
<form id="form_app01" method="POST" action="<?php echo site_url('redaksi/approve_berita') ?>">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title" style="text-align:center">Perhatian</h4>
            </div>
            <div class="modal-body">
              <p class="modal_paragraph">Apa anda akan menyetujui berita ini ?</p>
              <div class="checkbox text-center">
                <label><input type="checkbox" id="yt01" />Termasuk Hot News</label>
              </div>
              <div class="modal_action">
                <input type="hidden" name="id_order" id="id_order" value=""/>
                <button type="submit" class="btn btn-success" name="submit">Ya</button><span>&nbsp;</span>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>

              </div>
            </div>
            <!--div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div-->
          </div>
          <input type="hidden" name="att01" id="att01" value=""/>
</form>
        </div>
      </div>
<!-- #1 MODAL END -->
<script>
function approve1(){
  var id_berita = $('#id_berita').val();
  $('#id_order').val(id_berita);
  $('#modal_approve_berita').modal('show');
};
$(document).ready(function(){
  $("#yt01").change(function() {
          if(this.checked) {
             //$('#panel_rekaman').css("display","block");
             $('#form_app01').attr("action","<?php echo site_url('redaksi/approve_berita_with_hotnews') ?>");
          }
          else{
              //$('#panel_rekaman').css("display","none");
              $('#form_app01').attr("action","<?php echo site_url('redaksi/approve_berita') ?>");
          }
      });
});
</script>