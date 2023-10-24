<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="<?php echo base_url(); ?>asset/jquery.min.js"></script>

    <title> DATABASE CODEIGNITER</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid pt-3 pb-4 ms-4">
    <a class="navbar-brand" href="#">Database Codeigniter</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav offset-md-6">
        <a class="nav-link active" aria-current="page" href="<?= base_url('products'); ?>">Home</a>
        <a class="nav-link" href="<?= base_url('products/add'); ?>">Tambah Data</a>
        <a class="nav-link" href="<?= base_url('products/import'); ?>">Import Data Excel</a>
        <a class="nav-link" href="<?= base_url('login/logout'); ?>">Logout</a>
       
      </div>
    </div>
  </div>
</nav>