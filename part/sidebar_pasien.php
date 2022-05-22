<?php
$judul = "HOSTYKING";
$pecahjudul = explode(" ", $judul);
$acronym = "";

foreach ($pecahjudul as $w) {
  $acronym .= $w[0];
}
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <img src="assets/img/Logo.png" alt="logo" width="35" class="rounded-box">
      <a href="http://localhost/App-HOSTYKING/dash_pasien.php"><?php echo $judul; ?></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html"><?php echo $acronym; ?></a>
    </div>
    <ul class="sidebar-menu">
      <li <?php echo ($page == "Dashboard Pasien") ? "class=active" : ""; ?>><a class="nav-link" href="dash_pasien.php"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
      <li class="menu-header">Menu</li>

       <li <?php echo ($page == "Booking Fasilitas") ? "class=active" : ""; ?>><a class="nav-link" href="booking_pasien.php"><i class="fas fa-stethoscope"></i> <span>Booking Fasilitas</span></a></li>
      <li <?php echo ($page == "Riwayat Pemeriksaan Pasien" || @$page1 == "det") ? "class=active" : ""; ?>><a class="nav-link" href="riwayat_pasien.php"><i class="fas fa-user-injured"></i> <span>Riwayat Pemeriksaan</span></a></li>

      <li <?php echo ($page == "Data Pegawai") ? "class=active" : ""; ?>><a href="pegawai_pasien.php" class="nav-link"><i class="fas fa-users"></i> <span>Data Pegawai</span></a></li>
      <li <?php echo (@$page1 == "ruang") ? "class=active" : ""; ?>><a href="ruangan_pasien.php" class="nav-link"><i class="fas fa-bed"></i> <span>Detail Ruangan</span></a></li>
      
       <li <?php echo ($page == "Data Foto Rotgen Saya" || @$page1 == "detrot") ? "class=active" : ""; ?>><a class="nav-link" href="rotgen_pasien.php"><i class="fas fa-skull"></i> <span>Foto Rotgen</span></a></li>
      <li <?php echo ($page == "Data Obat") ? "class=active" : ""; ?>><a class="nav-link" href="obat_pasien.php"><i class="fas fa-briefcase-medical"></i> <span>Obat</span></a></li>
  </aside>
</div>