<?php
	include 'koneksi.php';
	$ambil=mysqli_query($koneksi,"SELECT * FROM kategori order by id ASC");
	while ($data=mysqli_fetch_array($ambil)) {
	echo "<option value='$data[id]'>$data[nama_kategori]</option>";
	}
?>
<div class="blog-post">
	<?php
		include "admin/koneksi.php";
		$_GET['module']=isset($_GET['module']) ? $_GET['module'] : '';

		//tampilkan 5 berita terbaru
		if($_GET['module'] ==''){
			$kat = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY id");

			while($t=mysqli_fetch_array($kat)){
				echo "<a href=?module=kategori&id=$t[id]><h4 class='blog-post-title'>$t[nama_kategori]</h4></a>";
			}
		}
		elseif ($_GET['module']=='kategori'){
			$detail = mysqli_query($koneksi,"SELECT * FROM berita WHERE id_berita = '$_GET[id]'");
			$d = mysqli_fetch_array($detail);
			$u = mysqli_query($koneksi,"SELECT * FROM user WHERE id = '$d[id_user]'");
			$nu = mysqli_fetch_array($u);

			echo "<a href=?module=detailberita&id=$d[id_berita]><h2>$d[judul]</h2></a>";
			echo "<p class='blog-post-meta'>$d[tgl_posting] | by : $nu[username]</p>";
			if($d['gambar']!=''){
				echo "<img src='admin/foto_berita/$d[gambar]' width=200 height=100 hspace=10 border=0 align=left>";
			}

			echo "<p>$d[isi_berita]</p>";
			echo "<b>[ <a href=javascript:history.go(-1)>Kembali</a> ]</p>";
		}
	?>
</div>