<form action="<?php echo site_url('Pemberian/AddDataPemberian'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Pemberian</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label>Id_beri</label>
                    <input type="text" class="form-control" placeholder="Masukan ID_BERI" name="id_beri">
                  </div>
                  
                  <div>
                  <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan NAMA" name="nama">
                      </div>
                      <div>
                  <label>Jns pemberian</label>
                    <input type="text" class="form-control" placeholder="Masukan JNS_PEMBERIAN" name="jns_pemberian">
                      </div>
                      <div>
  
                    </div>
          
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->