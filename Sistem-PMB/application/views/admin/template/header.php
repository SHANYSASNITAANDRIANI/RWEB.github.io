
<!DOCTYPE html>
<html>
<head>
	<title>Portal Admin</title>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.5.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>

	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>	Portal Mahasiswa</title>
</head>
<body >
    <?php 

    $name=$this->session->userdata('nama'); ?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark" >
    <!-- Brand -->
    <a style="margin-left=:20px;" class="navbar-brand"  href="<?php echo base_url(); ?>index.php/admin">PORTALKU</a>


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