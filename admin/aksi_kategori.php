<?php
include ("koneksi.php");
$page=isset($_GET['page']) ? $_GET['page'] : '';
$proses=isset($_GET['proses']) ? $_GET['proses'] : '';

if ($page=='kategori' AND $proses=='hapus'){
  mysqli_query($koneksi,"DELETE FROM ".$page." WHERE id='$_GET[id]'");
  header('location:index.php?page='.$page);
}


elseif ($page=='kategori' AND $proses=='input'){
  mysqli_query($koneksi,"INSERT INTO kategori (
  								nama_kategori,
                  keterangan) 
	                       VALUES(
                                '$_POST[nama_kat]',
                                '$_POST[keterangan]')");
  header('location:index.php?page='.$page);
  }
  
elseif ($page=='kategori' AND $proses=='update'){
    mysqli_query($koneksi,"UPDATE kategori SET 
                            nama_kategori = '$_POST[nama_kat]',
                            keterangan     = '$_POST[keterangan]' 
                           WHERE id 			= '$_POST[id]'");

  header('location:index.php?page='.$page);
  }

?>