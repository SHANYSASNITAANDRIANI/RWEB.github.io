  <div class="container">
		<div class="card">
			<div class="card-header"><h4>Ujian</h4></div>
			<div class="card-body">
			<h6>Harap pilih sesuai jurusan.</h6>
			<hr>
			<br>
			
			 
  <tbody>
 	<table class="table table-bordered">
  <thead>
    <tr>
		<th width="5%">No</th>
		<th>Jurusan</th>
		<th>Jumlah soal</th>
		<th>Lama_waktu</th>

		<th>Nilai_minimal</th>
		<th>Action</th>
	</tr>
  </thead>
  <tbody>
    <?php 
					$no = 1;
					foreach($detail as $row)
					{
						?>
						<tr>
							
								
							
							<td widtd="5%"><?php echo $no++; ?></td>
							
							<td><?php echo $row->jurusan; ?></td>
							<td><?php echo $row->jumlah_soal; ?></td>
							<td><?php echo $row->lama_waktu; ?> Menit</td>
							<td><?php echo $row->nilai_minimal; ?></td>
					
							<td>
							<?php 
								if ($row->status == 1): ?>
							<a href="<?php echo base_url(); ?>index.php/ujian/mulai/<?=$row->jurusan?>" class="btn btn-success" onclick="return confirm('Ingin memulai ujian?');">Mulai</a>
						</td>
						
						</tr>
							<?php endif ?>
							<?php 
								if ($row->status == 0): ?>
							<a href="" class="btn btn-danger" >Nonaktif</a>			
						</td>
						
						</tr>
							<?php endif ?>
								
						<?php
					}
					?>
  </tbody>
</table>

		</div>
	</div>
</div>

	



