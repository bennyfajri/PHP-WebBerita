<div class="d-flex left-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="index.php">Home</a> / User
        
      </div>

<?php

$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi) {
	case 'list' :
?>
<a href=?page=user&aksi=entri class="btn btn-primary fa fa-plus"> Entri user</a>
<h2>List user</h2>
<table class="table table-bordered table-striped">
	<tr align="center">
		<th>No</th>
		<th>Username</th>
		<th>Level</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no=1;
	include 'koneksi.php';
	$tampil=mysqli_query($koneksi,"SELECT * FROM user order by id ASC");
	while ($data=mysqli_fetch_array($tampil)) {

	?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['level']; ?></td>
		<td align="center"><a href=?page=user&aksi=edit&id=<?php echo $data['id']; ?> class="btn btn-success btn-sm fa fa-pencil"> Edit</a>
			<a href="aksi_user.php?page=user&proses=hapus&id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin akan menghapus data ?');" class="btn btn-danger btn-sm fa fa-trash-o"> Hapus</td> </a>
	</tr>
	<?php
		$no++;
	}
	?>
</table>
<?php
	break;
case 'entri' :	
?>
<a href=?page=user&aksi=list class="btn btn-danger fa fa-table"> List user</a>
<h2>Entri user</h2>

<form role="form" method="POST" action="aksi_user.php?page=user&proses=input">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Username">
	</div>
    <div class="form-group">
		<label>Password</label>
		<input type="password" name="pass" class="form-control" placeholder="password" id="myPass"> 
		<div class="form-group form-check">
		<input type="checkbox" class="form-check-input" onclick="myFunction()">
    	<label class="form-check-label">Show Password</label>
		</div>
	</div>
	<div class="form-group">
		<label>Level</label>
		<select name="level" class="form-control">
		  <option>Administrator</option>
		  <option>Moderator</option>
		  <option>Operator</option>
		</select>
	</div>
	<button type="submit" class="btn btn-primary fa fa-floppy-o"> Simpan</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<?php
	break;
case 'edit' :
include 'koneksi.php';
$ambil=mysqli_query($koneksi,"SELECT * FROM user WHERE id=$_GET[id]");
$r=mysqli_fetch_array($ambil);
?>
<a href=?page=user&aksi=list class="btn btn-danger fa fa-table"> List user</a>
<h2>Edit User</h2>

<form role="form" method="POST" action="aksi_user.php?page=user&proses=update">
	<div class="form-group">
		<label>id user</label>
		<input type="text" name="id" value="<?php echo $r['id'];?>" class="form-control" readonly>
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $r['username'];?>" class="form-control">
	</div>
    <div class="form-group">
		<label>Password</label>
		<input type="password" name="pass" class="form-control" id="myPass"> 
		<div class="form-group form-check">
		<input type="checkbox" class="form-check-input" onclick="myFunction()">
    	<label class="form-check-label">Show Password</label>
		</div>
		<strong>* Kosongkan jika tidak ada perubahan</strong>
		
	</div>
	<div class="form-group">
		<label>Level</label>
		<select name="level" class="form-control">
		  <option>Administrator</option>
		  <option>Moderator</option>
		  <option>Operator</option>
		</select>
	</div>
	<button type="submit" class="btn btn-primary fa fa-floppy-o"> Simpan</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>
<?php
	break;
}
?>
 </div>
<script type="text/javascript">
function myFunction() {
  var x = document.getElementById("myPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>                                