<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pemberian</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
    
      
      <a href="<?php echo site_url('Pemberian/VFormAddPemberian'); ?>" class="btn btn-block btn-primary btn-sm">Tambah</a>
    
  
              <table class="table table-hover">
                <tr>
          
                  <th>id_beri</th>
                  <th>Nama</th>
                  <th>jns_pemberian</th>
                 
                </tr>
                
                <?php
  if(!empty($DataPemberian))
  {
    foreach($DataPemberian as $ReadDS)
    {
  ?>

  <tr>
    
    <td><?php echo $ReadDS->id_beri; ?></td>
    <td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->jns_pemberian; ?></td>
    
    <td width="5%">
      <a href="<?php echo site_url('Pemberian/DataPemberian/'.$ReadDS->id_beri.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Pemberian/DeleteDataPemberian/'.$ReadDS->id_beri) ?>">Delete</a>
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




