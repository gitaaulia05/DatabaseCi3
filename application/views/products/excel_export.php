
<?php  
header ("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/jpeg');
    header ("Pragma: no-cache");
    header ("Content-type: application/x-msexcel");
    header ("Content-type: application/octet-stream");
    header ("Content-Disposition: attachment; filename=Data_Matakuliah.xls");
?>  

<style type="text/css">
  table,th,td,img{
    border-collapse: collapse;
    padding: 15px;
    margin: 10px;
    color: #000;
    width: 8px;
  height: 8px;
  }


</style>


<table border="1">
      <thead>
        <tr>
        <th>kode matakuliah</th>
        <th> nama matakuliah</th>
        <th> sks</th>
        <th>semester</th>
        <th>Tanggal ambil</th>
        <th>kode dosen</th>
        <th>Sampul</th>
        </tr>
      </thead>
      <?php
        $no = 1;
        if ($data->num_rows() > 0) {
          foreach ($data->result() as $row) {
            ?>
              <tr>
              <td><?php echo $row->kd_mk; ?></td>
                <td><?php echo $row->nama_mk; ?></td>
                <td><?php echo $row->sks; ?></td>
                <td ><?php echo $row->semester; ?></td>
                <td><?php echo $row->Tanggal_ambil;  ?></td>
                <td><?php echo $row->kode_dosen; ?></td>
                <td class="gambar"><img src="<?= base_url('images/' . $row->Sampul) ?> " class="gambar1"></td>
              </tr>

            <?php
          }
        }
      ?>
</table>