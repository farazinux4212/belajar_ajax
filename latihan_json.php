<html>
<head>
	<title>Jajal Jquery</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<form id="coba">
	<table class="table-responsive">
		<tr>
			<td>Nama</td>
			<td>
				<input type="text" name="idx" id="idx">
				<input type="text" name="nama" id="nama">
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" id="alamat"></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><button type="button" id="simpan">Simpan</button></td>
		</tr>
	</table>
</form>
<div id="content"></div>

</html>

<script>
	
	$(document).ready(function(){
		// alert('uji coba');
		$.ajax({
			url: 'ambildata.php',
			type: 'GET',
			success: function(hasil){
				$('#content').html(hasil);
				// alert('jajal');
			}
		});
	});
	
	$(document).on('click','#simpan',function(){
		// alert('coba lagi');
		var dataform=$('#coba').serialize();
		$.ajax({
			url: 'nyimpendata.php',
			type: 'POST',
			data: dataform,
			success: function(hasil_simpan){
				// alert(hasil_simpan);
				if (hasil_simpan === 'success') {
					$('#content').hide().fadeIn('slow');
					$('#coba')[0].reset();
					$('#nama').focus();
					// alert('berhasil');
					$.ajax({
						url: 'ambildata.php',
						type: 'GET',
						success: function(hasil){
							$('#content').html(hasil);
						}
					});
				}else{
					alert('gagal nyimpen');
				}
			}
		})
	})

	$(document).on('click', '.edit', function(){
		var id_edit = $(this).attr('data-id');
		var id_nama = $(this).attr('data-nama');
		var id_alamat = $(this).attr('data-alamat');
		// alert(id_edit);
		$('#idx').val(id_edit);
		$('#nama').val(id_nama);
		$('#alamat').val(id_alamat);

	})
</script>