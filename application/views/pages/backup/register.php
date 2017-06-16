<style type="text/css">
body{
  background: url('<?php echo base_url("assets/img/Logo_RRI_watermark.jpg") ?>') repeat;
  background-size: 120px;
}
</style>
<div class="container-fluid">
  <div class="row content reg_01" style="height:100%;">
    <div class="col-sm-12" style="width:100%;text-align:center;margin-top:30px;"><h2>REGISTRASI REPORTER REDAKSI</h2></div>
    <form method="post" action="register/doRegister" enctype="multipart/form-data">
    <div class="col-sm-12" style="padding:30px 30px">
      <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" autofocus/>
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <select class="form-control" name="jabatan" id="jabatan">
              <option>Reporter</option>
              <option>Redaksi</option>
            </select>
          </div>
          <div class="form-group">
            <label>Status Pegawai</label>
            <select class="form-control" name="status" id="status">
              <option>PNS</option>
              <option>PBPNS</option>
            </select>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="username"/>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password"/>
          </div>
      
    </div>
    <!--div class="col-sm-6" style="padding-top:40px;padding-right:20px">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Upload Foto</h3></div>
        <div class="panel-body">
          <div class="profile_picture_container">
            <img src="assets/img/person.png" width="200px"/>
          </div>
          <div class="form-group" style="width:100%;text-align:center">
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" name="file" style="display: none;" accept="audio/*">
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
          </div>
        </div>
      </div>
      
    </div-->
    <div class="text-center form-group" ><button class="btn btn-lg btn-success">Registrasi</button></div>
    </form>
    
    
  </div>
</div>