<!-- Main content -->
<form action="<?php echo site_url('Pemeriksa/UpdateDataPemeriksa'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Pemeriksa</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label>Nama</label>
                    <br>
                    <input type="hidden" name="id_periksa" value="<?php echo $detail['id_periksa']; ?>">
                    <input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Berat badan</label>
                    <br>
                    <input type="text" name="berat_badan" value="<?php echo $detail['berat_badan']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Pemeriksaan ke</label>
                    <br>
                    <input type="text" name="pemeriksaan_ke" value="<?php echo $detail['pemeriksaan_ke']; ?>">
                  </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->