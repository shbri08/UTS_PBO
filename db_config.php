<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $database = "crud_db"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$database); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".  $conn->connect_error()); //jika tidak terkoneksi maka akan tampil error
  }
?>