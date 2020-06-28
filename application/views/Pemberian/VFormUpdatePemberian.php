<!-- Main content -->
<form action="<?php echo site_url('Pemberian/UpdateDataPemberian'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Pemberian</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label>Nama</label>
                    <br>
                    <input type="hidden" name="id_beri" value="<?php echo $detail['id_beri']; ?>">
                    <input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Jenis Pemberian</label>
                    <br>
                    <input type="text" name="jns_pemberian" value="<?php echo $detail['jns_pemberian']; ?>">
                  </div>
                  


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->