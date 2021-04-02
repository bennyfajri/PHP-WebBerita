<?php
session_start();
include("koneksi.php");
$page=isset($_GET['page']) ? $_GET['page'] : '';
$proses=isset($_GET['proses']) ? $_GET['proses'] : '';


if ($page=='berita' AND $proses=='hapus'){
  
  $r=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM berita WHERE id_berita=$_GET[id]"));
  $file1=$r['gambar'];
  $file2='./foto_berita/'.$file1;
    unlink($file2);
mysqli_query($koneksi,"DELETE FROM ".$page." WHERE id_berita='$_GET[id]'");
  header('location:index.php?page='.$page);
}


else if ($page=='berita' AND $proses=='input'){
  $lokasi_file    = $_FILES['file_image']['tmp_name'];
  $tipe_file      = $_FILES['file_image']['type'];
  $nama_file      = $_FILES['file_image']['name'];
  $acak           = rand(000000,999999);
  $nama_file_unik = $acak.$nama_file; 
  if (!empty($lokasi_file)){
    
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/jpg"){
      echo "Gagal menyimpan data !!! <br>
            Tipe file <b>$nama_file</b> : $tipe_file <br>
            Tipe file yang diperbolehkan adalah : <b>JPG/JPEG</b>.<br>";
        echo "<a href=javascript:history.go(-1)>Ulangi Lagi</a>";       
    }
    else{
      move_uploaded_file($lokasi_file,"foto_berita/$nama_file_unik");
      mysqli_query($koneksi,"INSERT INTO berita
  								(id_kategori,
                  id_user,
                  judul,
                  gambar,
                  isi_berita) 
	                       VALUES
                                ('$_POST[kategori]',
                                '$_SESSION[iduser]',
                                '$_POST[judul]',
                                '$nama_file_unik',
                                '$_POST[berita]')");
    header('location:index.php?page='.$page);
    }
    }
   else {
    
   mysqli_query($koneksi,"INSERT INTO berita 
                  (id_kategori,
                  id_user,
                  judul,
                  isi_berita) 
                         VALUES
                                ('$_POST[kategori]',
                                '$_SESSION[iduser]',
                                '$_POST[judul]',
                                '$_POST[berita]')");
  header('location:index.php?page='.$page); 
  }
}
else if ($page=='berita' AND $proses=='update'){
    mysqli_query($koneksi,"UPDATE berita SET 
                            id_kategori   	= '$_POST[kategori]',
                            id_user         = '$_SESSION[iduser]',
                            judul           = '$_POST[judul]',
							              isi_berita	        = '$_POST[berita]'  
                           WHERE id_berita 			  = '$_POST[id]'");
  
  header('location:index.php?page='.$page);
  }

?>