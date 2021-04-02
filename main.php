<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="assets/css/themes.css">


</head>
<body>
	<div class="blog-post">
		<?php
			include "admin/koneksi.php";
			$_GET['module']=isset($_GET['module']) ? $_GET['module'] : '';

			//tampilkan 5 berita terbaru
			if($_GET['module'] ==''){
				$terkini = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC");

				while($t=mysqli_fetch_array($terkini)){
					$u = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$t[id_user]'");
					$nu=mysqli_fetch_array($u);
					echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
					echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";

					if($t['gambar']!=''){
						echo "<img src='admin/foto_berita/$t[gambar]' width=200 height=100 hspace=10 border=0 align=left>";
					}

					//tampilkan hanya sebagian berita
					$isi_berita = htmlentities(strip_tags($t['isi_berita'])); 	//membuat paragraf pada isi berita da mengabaikan tag html
					$isi = substr($isi_berita, 0,210); //ambil sebanyak 210 karakter
					$isi = substr($isi_berita, 0,strrpos($isi," ")); //spasi

					echo "<p><br>$isi ... <a class=btn href=?module=detailberita&id=$t[id_berita]>Selengkapnya</a> <br><hr color=white><br><br></p>";
				}
			}
			elseif ($_GET['module']=='detailberita'){
				$detail = mysqli_query($koneksi,"SELECT * FROM berita WHERE id_berita = '$_GET[id]'");
				$d = mysqli_fetch_array($detail);
				$u = mysqli_query($koneksi,"SELECT * FROM user WHERE id = '$d[id_user]'");
				$nu = mysqli_fetch_array($u);

				
				if($d['gambar']!=''){
					echo "<img src='admin/foto_berita/$d[gambar]' width=800 height=400 hspace=10 border=0 align=left>";
				}
				echo "<a href=?module=detailberita&id=$d[id_berita]><h2>$d[judul]</h2></a>";
				echo "<p class='blog-post-meta'>$d[tgl_posting] | by : $nu[username]</p>";
				echo "<p>$d[isi_berita]</p>";
				?>
				<div class="jumbotron">
					<div>
						<h2 class="display-4">Komentar</h2>
					</div>
					<div>
						<form role="form" method="POST" action="">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" class="form-control" placeholder="Username">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" placeholder="Username">
							</div>
							<div class="form-group">
								<label>Komentar</label>
								<textarea name="komentar" placeholder="komentar anda" class="form-control" rows="5"></textarea>
							</div>
							<button type="submit" class="btn btn-default" name="btnsubmit"> Submit</button>
						</form>
					</div>
				</div>
				<div class="jumbotron">
					<?php
						$tampil = mysqli_query($koneksi, "SELECT * FROM komentar WHERE id_berita = $_GET[id]");
						while($tam = mysqli_fetch_array($tampil)){
							echo "<p>$tam[nama] : $tam[isi_komentar]</p>";	
						}
						
						
					?>
				</div>
				<?php
				if(isset($_POST['btnsubmit'])){
					include "koneksi.php";
					$komentar = mysqli_query($koneksi,"INSERT INTO komentar
  								(id_berita,
				                  nama,
				                  email,
				                  isi_komentar) 
					                       VALUES
				                                ('$_GET[id]',
				                                '$_POST[nama]',
				                                '$_POST[email]',
				                                '$_POST[komentar]')");
					if ($komentar) {
						echo "<script> alert('Berhasil menambahkan komentar')</script>";
					}
				}
				echo "<b>[ <a href=javascript:history.go(-1)>Kembali</a> ]</p>";
			}
			elseif($_GET['module'] =='b_terbaru'){
                $sebelum = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
                while($s=mysqli_fetch_array($sebelum)){
                echo "<p><a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></p>";
                    }
            }
            elseif($_GET['module'] =='k_terbaru'){
                $komentar1 = mysqli_query($koneksi,"SELECT nama,judul,komentar.id_berita FROM komentar join berita where komentar.id_berita = berita.id_berita ORDER BY id_komentar DESC LIMIT 5");
                    $namaBerita = mysqli_query($koneksi,"SELECT * FROM berita");
                    while($s=mysqli_fetch_array($komentar1)){
                            echo "<p><h5>$s[nama] di </h5><a href=?module=detailberita&id=$s[id_berita]>$s[judul]<br></a></p>";
                     }
            }
			elseif ($_GET['module']=='teknologi'){
				$terkini = mysqli_query($koneksi,"SELECT * FROM berita where id_kategori=1");

				while($t=mysqli_fetch_array($terkini)){
					$u = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$t[id_user]'");
					$nu=mysqli_fetch_array($u);
					echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
					echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";

					if($t['gambar']!=''){
						echo "<img src='admin/foto_berita/$t[gambar]' width=200 height=100 hspace=10 border=0 align=left>";
					}

					//tampilkan hanya sebagian berita
					$isi_berita = htmlentities(strip_tags($t['isi_berita'])); 	//membuat paragraf pada isi berita da mengabaikan tag html
					$isi = substr($isi_berita, 0,210); //ambil sebanyak 210 karakter
					$isi = substr($isi_berita, 0,strrpos($isi," ")); //spasi

					echo "<br><p>$isi ... <a class=btn href=?module=detailberita&id=$t[id_berita]>Selengkapnya</a> <br><hr color=white></p><br><br><br>";
				}
			}
			elseif ($_GET['module']=='kesehatan'){
				$terkini = mysqli_query($koneksi,"SELECT * FROM berita where id_kategori=2");

				while($t=mysqli_fetch_array($terkini)){
					$u = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$t[id_user]'");
					$nu=mysqli_fetch_array($u);
					echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
					echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";

					if($t['gambar']!=''){
						echo "<img src='admin/foto_berita/$t[gambar]' width=200 height=100 hspace=10 border=0 align=left>";
					}

					//tampilkan hanya sebagian berita
					$isi_berita = htmlentities(strip_tags($t['isi_berita'])); 	//membuat paragraf pada isi berita da mengabaikan tag html
					$isi = substr($isi_berita, 0,210); //ambil sebanyak 210 karakter
					$isi = substr($isi_berita, 0,strrpos($isi," ")); //spasi

					echo "<p>$isi ... <a class=btn href=?module=detailberita&id=$t[id_berita]>Selengkapnya</a> <br><hr color=white></p><br><br><br>";
				}
			}
			elseif ($_GET['module']=='sport'){
				$terkini = mysqli_query($koneksi,"SELECT * FROM berita where id_kategori=6");

				while($t=mysqli_fetch_array($terkini)){
					$u = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$t[id_user]'");
					$nu=mysqli_fetch_array($u);
					echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
					echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";

					if($t['gambar']!=''){
						echo "<img src='admin/foto_berita/$t[gambar]' width=200 height=100 hspace=10 border=0 align=left>";
					}

					//tampilkan hanya sebagian berita
					$isi_berita = htmlentities(strip_tags($t['isi_berita'])); 	//membuat paragraf pada isi berita da mengabaikan tag html
					$isi = substr($isi_berita, 0,210); //ambil sebanyak 210 karakter
					$isi = substr($isi_berita, 0,strrpos($isi," ")); //spasi

					echo "<p>$isi ... <a class=btn href=?module=detailberita&id=$t[id_berita]>Selengkapnya</a> <br><hr color=white></p><br><br><br>";
				}
			}
			elseif ($_GET['module']=='politik'){
				$terkini = mysqli_query($koneksi,"SELECT * FROM berita where id_kategori=7");

				while($t=mysqli_fetch_array($terkini)){
					$u = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$t[id_user]'");
					$nu=mysqli_fetch_array($u);
					echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
					echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";

					if($t['gambar']!=''){
						echo "<img src='admin/foto_berita/$t[gambar]' width=200 height=100 hspace=10 border=0 align=left>";
					}

					//tampilkan hanya sebagian berita
					$isi_berita = htmlentities(strip_tags($t['isi_berita'])); 	//membuat paragraf pada isi berita da mengabaikan tag html
					$isi = substr($isi_berita, 0,210); //ambil sebanyak 210 karakter
					$isi = substr($isi_berita, 0,strrpos($isi," ")); //spasi

					echo "<p>$isi ... <a class=btn href=?module=detailberita&id=$t[id_berita]>Selengkapnya</a> <br><hr color=white></p><br><br><br>";
				}
			}
			elseif ($_GET['module']=='travel'){
				$terkini = mysqli_query($koneksi,"SELECT * FROM berita where id_kategori=8");

				while($t=mysqli_fetch_array($terkini)){
					$u = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$t[id_user]'");
					$nu=mysqli_fetch_array($u);
					echo "<a href=?module=detailberita&id=$t[id_berita]><h2 class='blog-post-title'>$t[judul]</h2></a>";
					echo "<p class='blog-post-meta'>$t[tgl_posting] | by : $nu[username]</p>";

					if($t['gambar']!=''){
						echo "<img src='admin/foto_berita/$t[gambar]' width=200 height=100 hspace=10 border=0 align=left>";
					}

					//tampilkan hanya sebagian berita
					$isi_berita = htmlentities(strip_tags($t['isi_berita'])); 	//membuat paragraf pada isi berita da mengabaikan tag html
					$isi = substr($isi_berita, 0,210); //ambil sebanyak 210 karakter
					$isi = substr($isi_berita, 0,strrpos($isi," ")); //spasi

					echo "<p>$isi ... <a class=btn href=?module=detailberita&id=$t[id_berita]>Selengkapnya</a> <br><hr color=white></p><br><br><br>";
				}
			}
		?>
	</div>
</body>
</html>
