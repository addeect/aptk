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
        <li><a href="<?php echo site_url('kabid/master-kategori') ?>">Master Kategori</a></li>
        <li><a href="<?php echo site_url('kabid/hasil-reward') ?>">Hasil Reward</a></li>
        <li><a href="<?php echo site_url('kabid/laporan-bulanan') ?>">Rekapitulasi Bulanan</a></li>
        <li class="active"><a>Rekapitulasi Tahunan</a></li>
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
        <li><a href="<?php echo site_url('kabid/master-kategori') ?>">Master Kategori</a></li>
        <li><a href="<?php echo site_url('kabid/hasil-reward') ?>">Hasil Reward</a></li>
        <li><a href="<?php echo site_url('kabid/laporan-bulanan') ?>">Rekapitulasi Bulanan</a></li>
        <li class="active"><a>Rekapitulasi Tahunan</a></li>
        <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
      </ul>
      <br>
    </div>

    <div class="col-sm-9 konten">
      <form target="_blank" method="get" action="<?php echo site_url('kabid/cetakLaporanTahunan') ?>">
      <div class="row">
        <div class="col-sm-12">
          <div>
            <h3 class="text-center">Laporan Tahunan</h3>
          </div>

          <div class="row">
            <div class="col-sm-8">
              <canvas class="form-group" id="chart_laporan_bulanan" style="width:500px;height:200px"></canvas>
              <div class="form-group text-center"><label>Reporter Dengan Jumlah Berita Tertinggi</label></div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Pilih Tahun</label>
                <select class="form-control" name="tahun">
                  <option value="2016" selected>2016</option>
                  <option value="2017" >2017</option>
                </select>
              </div>
              <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Rekap" />
          </div>
            </div>
          </div>
          
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/Chart.bundle.min.js') ?>"></script>
<script>
$(document).ready(function(){
  //--- CHART JS -----------
  var data_laporan_bulanan = {
        labels: [
            "Vito",
            "Jojo"
        ],
        datasets: [
            {
                data: [2,5],
                backgroundColor: [
                    "#FF6384",
                    "#36A2EB"
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    "#36A2EB"
                ]
            }]
    };
    var config_laporan_bulanan = {
            type: 'pie',
            data: data_laporan_bulanan,
            options: {
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var allData = data.datasets[tooltipItem.datasetIndex].data;
                        var tooltipLabel = data.labels[tooltipItem.index];
                        var tooltipData = allData[tooltipItem.index];
                        var total = 0;
                        for (var i in allData) {
                            total += allData[i];
                        }
                        var tooltipPercentage = Math.round((tooltipData / total) * 100);
                        return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
                    }
                }
            }
        }
    };
    var chart_laporan_bulanan = new Chart(document.getElementById("chart_laporan_bulanan"), config_laporan_bulanan);
        document.getElementById("chart_laporan_bulanan").onclick = function(evt){
            var activePoints3 = chart_laporan_bulanan.getElementsAtEvent(evt);
            var firstPoint3 = activePoints3[0];
            //if (firstPoint !== undefined)
            //var kategori = 'regular';
            //var target = config_laporan_bulanan.data.labels[firstPoint3._index];
            //window.location.href = "monitoring-durasi-down.php?kategori="+kategori+"&sesuai="+target+"&target=<?php echo $target_regular; ?>";
        };

//   $('#kalender').datetimepicker({
//     timepicker:false,
//   format:'d.m.Y',
//   inline:false,
//   lang:'id'
// });
});
</script>