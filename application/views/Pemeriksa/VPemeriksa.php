<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pemeriksa</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
    
      
      <a href="<?php echo site_url('Pemeriksa/VFormAddPemeriksa'); ?>" class="btn btn-block btn-primary btn-sm">Tambah</a>
    
  
              <table class="table table-hover">
                <tr>
          
                  <th>id_periksa</th>
                  <th>Nama</th>
                  <th>berat_badan</th>
                  <th>pemeriksaan_ke</th>
                
                </tr>
                
                <?php
  if(!empty($DataPemeriksa))
  {
    foreach($DataPemeriksa as $ReadDS)
    {
  ?>

  <tr>
    
    <td><?php echo $ReadDS->id_periksa; ?></td>
    <td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->berat_badan; ?></td>
    <td><?php echo $ReadDS->pemeriksaan_ke; ?></td>

    <td width="5%">
      <a href="<?php echo site_url('Pemeriksa/DataPemeriksa/'.$ReadDS->id_periksa.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Pemeriksa/DeleteDataPemeriksa/'.$ReadDS->id_periksa) ?>">Delete</a>
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




