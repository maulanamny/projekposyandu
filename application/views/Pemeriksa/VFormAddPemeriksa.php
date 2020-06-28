<form action="<?php echo site_url('Pemeriksa/AddDataPemeriksa'); ?>" method="post">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Tambah Pemeriksa</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label>Id_periksa</label>
                    <input type="text" class="form-control" placeholder="Masukan ID_PERIKSA" name="Id_periksa">
                  </div>
                  
                  <div>
                  <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukan NAMA" name="Nama">
                      </div>
                      <div>
                  <label>Berat badan</label>
                    <input type="text" class="form-control" placeholder="Masukan BERAT_BADAN" name="Berat badan">
                      </div>
                      <div>
                  <label>Pemeriksaan ke</label>
                    <input type="text" class="form-control" placeholder="Masukan PEMERIKSAAN_KE" name="Pemeriksaan ke">
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