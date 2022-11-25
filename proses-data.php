<?php

$isbn=$_POST['isbn'];
$judul=$_POST['judul'];
$jenis=$_POST['jenis'];
$tahun_terbit=$_POST['tahun_terbit'];
$penerbit=$_POST['penerbit'];
$pengarang=$_POST['pengarang'];

include "koneksi.php";

$simpan=$koneksi->query("insert into buku(isbn,judul,jenis,tahun_terbit,penerbit,pengarang)values ('$isbn', '$judul', '$jenis', '$tahun_terbit', 'penerbit','pengarang')");

if($simpan==true){

    header("location:tampil-data.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>