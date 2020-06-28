<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kader</h3>

             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
		
			
      <a href="<?php echo site_url('Kader/VFormAddKader'); ?>" class="btn btn-block btn-primary btn-sm">Tambah</a>
		
	
              <table class="table table-hover">
                <tr>
          
                  <th>id_kader</th>
                  <th>nama</th>
                  <th>no_tlp</th>
                  <th>alamat</th>

                </tr>
                
                <?php
	if(!empty($DataKader))
	{
		foreach($DataKader as $ReadDS)
		{
	?>

	<tr>
		
		<td><?php echo $ReadDS->id_kader; ?></td>
    <td><?php echo $ReadDS->nama; ?></td>
    <td><?php echo $ReadDS->no_tlp; ?></td>
    <td><?php echo $ReadDS->alamat; ?></td>

		<td width="5%">
			<a href="<?php echo site_url('Kader/DataKader/'.$ReadDS->id_kader.'/view') ?>">Update</a>
      <td>
      <a href="<?php echo site_url('Kader/DeleteDataKader/'.$ReadDS->id_kader) ?>">Delete</a>
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




