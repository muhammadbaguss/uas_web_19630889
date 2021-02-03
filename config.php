<?php 
$host = "localhost";
$user = "root";
$pass = "";
$DB ="mahasiswa";

$link = new mysqli($host, $user, $pass, $DB);
if($link->connect_error)
{
  echo "Gagal Koneksi MySQL";
}
