<?php
include ("koneksi.php");
$page=isset($_GET['page']) ? $_GET['page'] : '';
$proses=isset($_GET['proses']) ? $_GET['proses'] : '';

if ($page=='user' AND $proses=='hapus'){
  mysqli_query($koneksi,"DELETE FROM ".$page." WHERE id='$_GET[id]'");
  header('location:index.php?page='.$page);
}


elseif ($page=='user' AND $proses=='input'){
  $pass=md5($_POST['pass']);
  mysqli_query($koneksi,"INSERT INTO user (
  								username,
                  password,
                  level) 
	                       VALUES(
                                '$_POST[username]',
                                '$pass',
								'$_POST[level]')");
  header('location:index.php?page='.$page);
  }
  
elseif ($page=='user' AND $proses=='update'){
  $pass=md5($_POST['pass']);
  if ($_POST['pass'] !='') {
    mysqli_query($koneksi,"UPDATE user SET 
                            username   	= '$_POST[username]',
                            password    = '$pass',
							              level	      = '$_POST[level]'  
                           WHERE id 			= '$_POST[id]'");
  }
  else
   mysqli_query($koneksi,"UPDATE user SET 
                            username    = '$_POST[username]',
                            level       = '$_POST[level]'  
                           WHERE id       = '$_POST[id]'"); 
  header('location:index.php?page='.$page);
  }

?>