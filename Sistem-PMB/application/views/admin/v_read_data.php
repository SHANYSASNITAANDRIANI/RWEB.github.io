<main role="main" class="container">
<div class="card-header" >Data Mahasiswa</div>
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
<a href="<?php echo base_url(); ?>index.php/admin/create_datamhs/" class="btn btn-primary">Create</a>
<!-- <a href="<?php echo base_url(); ?>index.php/testing" class="btn btn-primary">tes</a> -->

<table class="table table-striped">
  <thead>
    <tr>
		<th width="5%">No</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Email</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
  </thead>
  <tbody>
    <?php 
					$no = 1;
					foreach($siswa as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->nama; ?></td>
							<td><?php echo $row->jurusan; ?></td>
							<td><?php echo $row->email; ?></td>
							<td><?php 
								if($row->status==1)
									echo "Aktif";
								else
									echo "Nonaktif";
							?></td>
							<td>
							<a href="<?php echo base_url(); ?>index.php/admin/data_mhs/delete/<?= $row->nik?>" class="btn btn-danger" onclick="return confirm('Ingin hapus data?');">Delete</a>
							<a href="<?php echo base_url(); ?>index.php/admin/data_mhs/edit/<?= $row->nik?>" class="btn btn-info">Edit</a>
						</td>
						
						</tr>
						<?php
					}
					?>
  </tbody>
</table>
</div>
</main>
