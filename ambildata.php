<?php 

$koneksi = mysqli_connect("localhost","root","akoe4212","latihan_json");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>

<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>TOMBOL</th>
	</tr>
	<?php 
	$no = 1;
	$sql = mysqli_query($koneksi, 'select * from identitas');
	while ($data=mysqli_fetch_assoc($sql)){
		?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$data['nama']?></td>
			<td><?=$data['alamat']?></td>
			<td><button class="edit" type="button" data-id="<?=$data['id'];?>" data-nama="<?=$data['nama'];?>" data-alamat="<?=$data['alamat'];?>">Edit</button></td>
		</tr>
		<?php 
	}
	?>
</table>