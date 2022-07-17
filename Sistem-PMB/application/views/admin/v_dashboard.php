<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>	Portal Admin</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark" >
    <!-- Brand -->
    <a class="navbar-brand" href="<?=base_url()?>index.php/admin/">PORTALKU</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('index.php/admin/read_data'); ?>">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>index.php/admin/ujian/">Ujian</a>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>

<legend><h6>Selamat Datang Admin <?php echo $this->session->userdata('nama'); ?></h6></legend>
<a class="text-right" onclick="return confirm('Ingin Log out?')" href="<?php echo base_url(); ?>index.php/login/logout">Logout</a>
<hr>
                

               <p  style="text-align:justify; margin-left: 10px; margin-right: 10px;">
                           Universitas Ahmad Dahlan (UAD) merupakan pengembangan dari Institut Keguruan dan llmu Pendidikan (IKIP) Muhammadiyah Yogyakarta. Institut Keguruan dan llmu Pendidikan Muhammadiyah Yogyakarta sebagai lembaga pendidikan tinggi merupakan pengembangan FKIP Muhammadiyah Cabang Jakarta di Yogyakarta yang didirikan pada tanggal 18 November 1960. FKIP Muhammadiyah merupakan kelanjutan kursus BI Muhammadiyah di Yogyakarta yang didirikan tahun 1957. Pada waktu itu kursus BI memiliki jurusan Ilmu Mendidik, Civic Hukum dan Ekonomi.

Pada tanggal 19 Desember 1994 dengan Surat Keputusan (SK) Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor: 102/D/0/1994 ditetapkan bahwa IKIP Muhammadiyah Yogyakarta beralih fungsi menjadi Universitas Ahmad Dahlan.
               </p>
               
				