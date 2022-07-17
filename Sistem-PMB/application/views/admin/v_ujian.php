<main role="main" class="container">
<div class="card-header" >Data Soal</div>
<div class="card-body" >
	 <?php 
                if($this->session->flashdata('error') !='')
                {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $this->session->flashdata('error');
                    echo '</div>';
                }
                ?>

                <?php 
                if($this->session->flashdata('success_register') !='')
                {
                    echo '<div class="alert alert-info" role="alert">';
                    echo $this->session->flashdata('success_register');
                    echo '</div>';
                }
                ?>
<a href="<?php echo base_url(); ?>index.php/admin/" class="btn btn-secondary">Back</a>
<a href="<?php echo base_url(); ?>index.php/admin/ujian/tambah" class="btn btn-primary">Create</a>
<!-- <a href="<?php echo base_url(); ?>index.php/testing" class="btn btn-primary">tes</a> -->

<table class="table table-striped">
  <thead>
    <tr>
		<th width="5%">No</th>
		<th>Id</th>
		<th>Jurusan</th>
		<th>Jumlah soal</th>
		<th>Status</th>
		<th>Diedit</th>
		<th>Action</th>
	</tr>
  </thead>
  <tbody>
    <?php 
					$no = 1;

					foreach($soal as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->id; ?></td>
							<td><?php echo $row->jurusan; ?></td>
							<td><?php echo $row->jumlah_soal; ?></td>
							<td><?php 
								if($row->status==1)
									echo "Aktif";
								else
									echo "Nonaktif";
							?></td>
							<td><?php echo $row->diedit; ?></td>
							<td>
							<a href="<?php echo base_url(); ?>index.php/admin/ujian/delete/<?= $row->jurusan?>" class="btn btn-danger" onclick="return confirm('Ingin hapus data?');">Delete</a>

							<a href="<?php echo base_url(); ?>index.php/admin/ujian/edit_detailsoal/<?= $row->jurusan?>" class="btn btn-info">Edit</a>
							<a href="<?=base_url();?>index.php/admin/ujian/soal/<?= $row->jurusan?>" button type="button" class="btn btn-warning">Soal</button></a>
						</td>
						<input type="hidden" name="name_tb" value="$row->jurusan">
						</tr>
						<?php

					}
					?>
  </tbody>
</table>
</div>
</main>
