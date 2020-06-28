<form action="<?php echo site_url('Pasien/AddDataPasien'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Pasien</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label>nik</label>
                    <input type="text" class="form-control" placeholder="Masukan NIK" name="nik">
                  </div>
                  
                  <div>
                  <label>nama</label>
                    <input type="text" class="form-control" placeholder="Masukan NAMA" name="nama">
                      </div>
                      <div>
                  <label>status</label>
                    <input type="text" class="form-control" placeholder="Masukan STATUS" name="status">
                      </div>
                      <div>
                  <label>alamat</label>
                    <input type="text" class="form-control" placeholder="Masukan ALAMAT" name="alamat">
                      </div>
                    </div>
          
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->