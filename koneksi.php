<?php
  $host = "localhost"; 
  $user = "	id15508476_root";
  $pass = "Xby~a-rX!qVt5L]1";
  $nama_db = "id15508476_crud"; 
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); 

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>