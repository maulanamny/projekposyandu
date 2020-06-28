<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pasien</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
    
      
      <a href="<?php echo site_url('Pasien/VFormAddPasien'); ?>" class="btn btn-block btn-primary btn-sm">Tambah</a>
    
  
              <table class="table table-hover">
                <tr>
          
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Status</th>
                  <th>Alamat</th>
                
                </tr>
                
                <?php
  if(!empty($DataPasien))
  {
    foreach($DataPasien as $ReadDS)
    {
  ?>

  <tr>
    
    <td><?php echo $ReadDS->nik; ?></td>
    <td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->status; ?></td>
    <td><?php echo $ReadDS->alamat; ?></td>

    <td width="5%">
      <a href="<?php echo site_url('Pasien/DataPasien/'.$ReadDS->nik.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Pasien/DeleteDataPasien/'.$ReadDS->nik) ?>">Delete</a>
    </td>
  </tr>
            
         <?php
     }
 }
 ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




