<main role="main" class="container">
<form method="post" action="<?php echo base_url(); ?>index.php/admin/ujian/tampung">
	<div class="form-group">
		<label for="Jurusan">Masukan Jurusan</label>
		<input type="text" class="form-control" name="jurusan" id="Jurusan" placeholder="Masukan Jurusan">
	</div>

	<div class="form-group">
		<label for="nsoal">Masukan jumlah soal</label>
		<input type="text" class="form-control" name="nsoal" id="nsoal" placeholder="Masukan jumlah soal">
	
		<div class="form-group">
		<label for="lama waktu">Masukan lama waktu (menit)</label>
		<input type="text" class="form-control" name="lama_waktu" id="lama waktu" placeholder="Masukan lama waktu">
	</div>

	<div class="form-group">
		<label for="nilai minimal">Masukan nilai minimal</label>
		<input type="text" class="form-control" name="nilai_minimal" id="nilai minimal" placeholder="Masukan nilai minimal">
	</div>
	<div>
		<label for="status">Status</label>
		<select name="status" id="status">
				  
		<option value="1">Aktif</option>
		<option value="0">Nonaktif</option>
		</select>
	</div>
	<button type="submit" class="btn btn-primary">Tambahkan</button>
</form>
