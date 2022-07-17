<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PROFIL</title>
</head>
<body >
	<?php foreach($profil as $row){ ?>
	<div class="card" style="width: 35rem; margin: 30px;">
 	<table class="table table-sm">
  	<thread>
  		<tr>
  			<th>
  				NIK
  			</th>
  			<th>
  				:
  			</th>
  			<th>
  				<?= $row->nik; ?>
  			</th>
  		</tr>
  		<tr>
  			<th>
  				Nama
  			</th>
  			<th>
  				:
  			</th>
  			<th>
  				<?= $row->nama; ?>
  			</th>
  		</tr>

  		<tr>
  			<th>
  				Jenis Kelamin
  			</th>
  			<th>
  				:
  			</th>
  			<th>
  				<?= $row->jk; ?>
  			</th>
  		</tr>

  		<tr>
  			<th>
  				Jurusan
  			</th>
  			<th>
  				:
  			</th>
  			<th>
  				<?= $row->jurusan; ?>
  			</th>
  		</tr>

  		<tr>
  			<th>
  				Alamat
  			</th>
  			<th>
  				:
  			</th>
  			<th>
  				<?= $row->alamat; ?>
  			</th>
  		</tr>

  		<tr>
  			<th>
  				No Telfon
  			</th>
  			<th>
  				:
  			</th>
  			<th>
  				<?= $row->no_tlp; ?>
  			</th>
  		</tr>

  		<tr>
  			<th>
  				Email
  			</th>
  			<th>
  				:
  			</th>
  			<th>
  				<?= $row->email; ?>
  			</th>
  		</tr>
  	</thread>
</table>
</div>
<?php } ?>

</body>
</html>