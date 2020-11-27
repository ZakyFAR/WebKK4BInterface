<?php
  $host = "localhost"; 
  $user = "id15517652_zaky";
  $pass = "ZWWf!hIdXR1H(SlS";
  $nama_db = "id15517652_kk4b"; 
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); 

  if(!$koneksi){ 
    die ("Koneksi  dengan database gagal: ".mysql_connect_error());
  }
?>