  <div class="container">
		<div class="card">
			<div class="card-header">Edit Siswa</div>
			<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>index.php/admin/data_mhs/update">
				<div class="form-group">
					<label for="nik">nik</label>
					<input readonly="readonly" type="text"  value="<?php echo $mhs->nik; ?>" class="form-control" id="nik" name="nik">
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" value="<?php echo $mhs->nama; ?>" class="form-control" id="nama" name="nama">
				</div>
				<div>
						<label for="status">Status</label>

						<select name="status" id="status"  >
							<option value="<?= $mhs->status ?>"><?= $mhs->status ?></option>
						  <option value="0">Non Aktif</option>
						  <option value="1">Aktif</option>
						</select>
						
					</div>

				<div>
						<label for="jk">Jenis Kelamin</label>

						<select name="jk" id="jk"  >
							<option value="<?= $mhs->jk ?>"><?= $mhs->jk ?></option>
						  <option value="laki-laki">Laki - Laki</option>
						  <option value="perempuan">Perempuan</option>
						</select>
						
					</div>

					<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" value="<?php echo $mhs->alamat; ?>" class="form-control" id="alamat" name="alamat">
				</div>

					<div class="form-group">
					<label for="no_tlp">No Handphone</label>
					<input type="text" value="<?php echo $mhs->no_tlp; ?>" class="form-control" id="no_tlp" name="no_tlp">
				</div>

					
					<div class="form-group">
					<label for="email">Email</label>
					<input type="text" value="<?php echo $mhs->email; ?>" class="form-control" id="email" name="email">
				</div>			

				<div>
						<label for="jurusan">Jurusan</label>
						<select name="jurusan" id="jurusan">
						  <option value="<?= $mhs->jurusan ?>"><?= $mhs->jurusan?></option>
						  <option value="Teknik Industri">Teknik Industri</option>
						  <option value="Teknik Informatika">Teknik Informatika</option>
						  <option value="Psikologi">Psikologi</option>

						</select>
						
					</div>
								
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>

	