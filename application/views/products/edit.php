<div class="container pt-5 m">
    <div class="row">
        <div class="col-md-6 offset-md-2">

                    <?php if($this->session->flashdata('status')): ?>
                 <div class="alert alert-success">
                  <?= $this->session->flashdata('status'); ?>
                 </div>
                        <?php endif ?>

            <div class="card">
                <div class="card-header">
           <h4> EDIT DATA MATAKULIAH
               <a href="<?= base_url('products')  ?>"class="btn btn-warning offset-md-3">BACK</a>
           </h4>
                </div>

               <div class="card-body">

   <form action="<?php echo base_url('products/update/'.$product->kd_mk); ?> " method="POST" enctype="multipart/form-data">

                   <div class="form-group">
                                  <label for=""> kd_mk </label>
                                  <input type="text"  value="<?= $product->kd_mk; ?>"  name="kd_mk" class="form-control" placeholder="Masukkan kode Matakuliah" autofocus >
                                  <small><?php echo form_error('kd_mk'); ?> </small>
                              </div>

                              <div class="form-group">
                                  <label for="">nama_mk</label>
                                  <input type="text"  value="<?= $product->nama_mk; ?>" name="nama_mk" class="form-control" placeholder="Masukkan Nama Matakuliah" >
                                  <small><?php echo form_error('nama_mk'); ?> </small>
                              </div>

                              <div class="form-group">
                                  <label for="">sks</label>
                                  <input type="text" value="<?= $product->sks; ?>" name="sks" class="form-control" placeholder="Masukkan SKS">
                                  <small><?php echo form_error('sks'); ?> </small>
                              </div>

                              <div class="form-group">
                                  <label for="">semester</label>
                                  <input type="text" name="semester" value="<?= $product->semester; ?>" class="form-control" placeholder="Masukkan Semester">
                                  <small><?php echo form_error('semester'); ?> </small>
                              </div>

                              <div class="form-group">
                                  <label for="">Tanggal_ambil</label>
                                  <input type="text" value="<?= $product->Tanggal_ambil; ?>" name="Tanggal_ambil" class="form-control" placeholder="Masukkan Tanggal ambil" >
                                  <small><?php echo form_error('Tanggal_ambil'); ?> </small>
                              </div>

                              <div class="form-group">
                                  <label for="">kode_dosen</label>
                                  <input type="text" name="kode_dosen" value="<?= $product->kode_dosen; ?>" class="form-control" placeholder="Masukkan kode dosen">
                                  <small><?php echo form_error('kode_dosen'); ?> </small>
                              </div>

                              <div class="form-group">
                                  <label for="">Sampul</label>
                                  <input type="hidden" name="old_prod_name" value="<?= $product->Sampul ?>">
                                  <input type="file" name="Sampul" class="form-control">
                                  <small><?php if(isset($imageError)) { echo $imageError; } ?> </small>
                              </div>
                        
                              
                              <div class="form-group pt-3">
                               <button type="submit"  name ="product_update" class="btn btn-info px-5">Update</button>
                              </div>

                    </form>

               </div>
            </div>
        </div>

          <div class="col-md-4">
              <img src="<?= base_url('images/'.$product->Sampul)?> "class="w-50" alt="image"> 
          </div>

    </div>
</div>
