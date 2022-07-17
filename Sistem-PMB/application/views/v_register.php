<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Register Mahasiswa</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	</head>
	<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Form Register
			</div>
			<div class="card-body">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
				<form method="post" action="<?php echo base_url(); ?>index.php/register/proses">
					<div class="form-group">
						<label for="NIK">NIK</label>
						<input type="text" class="form-control" name="NIK" id="NIK" placeholder="Masukan NIK">
					</div>
					<div class="form-group">
						<label for="Nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Lengkap">
					</div>
					<div>
						<label for="jk">Jenis Kelamin</label>
						<select name="jk" id="jk">
						  
						  <option value="laki-laki">Laki - Laki</option>
						  <option value="perempuan">Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat">
					</div>
					<div class="form-group">
						<label for="no_tlp">No Telepon Aktif</label>
						<input type="text" class="form-control" name="no_tlp" id="no_telp" placeholder="Masukan No no_tlp">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email aktif">
					</div>
					<div>
						<label for="jurusan">Jurusan</label>
						<select name="jurusan" id="jurusan">
						  
						  <option value="Teknik Industri">Teknik Industri</option>
						  <option value="Teknik Informatika">Teknik Informatika</option>
						  <option value="Psikologi">Psikologi</option>
						</select>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="cpassword">Konfirmasi Password</label>
						<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Konfirmasi Password">
					</div>
					
					
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
	</div>		
	</body>
</html>