<div class="blog-post">
	<?php
		include "admin/koneksi.php";
		$_GET['module']=isset($_GET['module']) ? $_GET['module'] : '';

		//tampilkan 5 berita terbaru
		if($_GET['module'] ==''){
			$sebelum = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
			while($s=mysqli_fetch_array($sebelum)){
				echo "<p><a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></p>";
			}
		}
		elseif ($_GET['module']=='detailberita'){
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