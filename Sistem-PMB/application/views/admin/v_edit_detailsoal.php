  <div class="container">
		<div class="card">
			<div class="card-header">Edit Detail Soal</div>
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
			<form method="post" action="<?php echo base_url(); ?>index.php/admin/ujian/update_detail">
				
				<div class="form-group">
					
					<input  type="hidden"  value="<?php echo $soal->id; ?>" class="form-control" id="id" name="id">
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<input  type="text" readonly=""  value="<?php echo $soal->jurusan; ?>" class="form-control" id="jurusan" name="jurusan">
				</div>
				<div class="form-group">
					<label for="lama waktu">lama waktu</label>
					<input  type="text" value="<?php echo $soal->lama_waktu; ?>" class="form-control" id="lama waktu" name="lama waktu">
				</div>
				<div class="form-group">
					<label for="nilai minimal">nilai minimal</label>
					<input  type="text" value="<?php echo $soal->nilai_minimal; ?>" class="form-control" id="nilai minimal" name="nilai minimal">
				</div>
				<div class="form-group">
					<label for="nsoal">Jumlah soal</label>
					<input type="text" value="<?php echo $soal->jumlah_soal; ?>" class="form-control" id="nsoal" name="nsoal">
				</div>
				<div>
						<label for="status">Status</label>

						<select name="status" id="status"  >
							<option value="<?= $soal->status ?>"><?php if($soal->status==1)
							{
								echo "Aktif";
							} 
							else echo "Nonaktif";?></option>
						  <option value="0">Non Aktif</option>
						  <option value="1">Aktif</option>
						</select>
						
					</div>

								
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>

	