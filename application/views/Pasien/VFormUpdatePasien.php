<!-- Main content -->
<form action="<?php echo site_url('Pasien/UpdateDataPasien'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update Pasien</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label>Nama</label>
                    <br>
                    <input type="hidden" name="nik" value="<?php echo $detail['nik']; ?>">
                    <input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Status</label>
                    <br>
                    <input type="text" name="status" value="<?php echo $detail['status']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>Alamat</label>
                    <br>
                    <input type="text" name="alamat" value="<?php echo $detail['alamat']; ?>">
                  </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->