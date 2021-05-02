<?php 

$koneksi = mysqli_connect("localhost","root","akoe4212","latihan_json");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$idx = $_POST['idx'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

if (empty($idx)) {
	$sql = mysqli_query($koneksi, "insert into identitas set nama='$nama', alamat='$alamat' ");
}else{
	$sql = mysqli_query($koneksi, "update identitas set nama='$nama', alamat='$alamat' where id='$idx'");
}

if ($sql) {
	echo "success";
}else{
	echo "gagal total";
}

?>
