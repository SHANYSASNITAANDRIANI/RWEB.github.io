<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Register Admin</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	</head>
	<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Form Register ADMIN
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
				<form method="post" action="<?php echo base_url(); ?>index.php/admin/register/proses">
					<div class="form-group">
						<label for="NIK">NIK</label>
						<input type="text" class="form-control" name="NIK" id="NIK" placeholder="Masukan NIK">
					</div>
					<div class="form-group">
						<label for="Username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Masukan username">
					</div>
					<div class="form-group">
						<label for="Nama">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Lengkap">
					

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