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
 
  </head>
  <body>
    
    

        <form action="" method="GET" class="pt-3"> 
                           <div class="input-group mb-3">
  <input type="text" name="search" autofocus value="<?php if(isset($_GET['search'])){echo $_GET['search']; }?>" class="form-control"  placeholder="Search Data">
     <button type="submit" class="btn btn-primary">Search</button>
</form>



  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="fa fa-plus"></i>
 Tambah Data Matakuliah 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
         <form method="post" action="<?php echo base_url().'koneksi/tambah_aksi'; ?>">
    <div class="form-group">
      <label>Kode matakuliah</label>
      <input type="text" name="kd_mk" class="form-control" >
    </div>

    <div class="modal-body">
         <form method="post" action="<?php echo base_url().'koneksi/tambah_aksi'; ?>">
    <div class="form-group">
      <label>nama matakuliah </label>
      <input type="text" name="nama_mk" class="form-control" >
    </div>

    <div class="modal-body">
         <form method="post" action="<?php echo base_url().'koneksi/tambah_aksi'; ?>">
    <div class="form-group">
      <label>sks</label>
      <input type="text" name="sks" class="form-control" >
    </div>

    <div class="modal-body">
         <form method="post" action="<?php echo base_url().'koneksi/tambah_aksi'; ?>">
    <div class="form-group">
      <label>semester</label>
      <input type="text" name="semesteer" class="form-control" >
    </div>

    <div class="modal-body">
         <form method="post" action="<?php echo base_url().'koneksi/tambah_aksi'; ?>">
    <div class="form-group">
      <label>kode_dosen</label>
      <input type="text" name="kd_dosen" class="form-control" >
</div>

         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>