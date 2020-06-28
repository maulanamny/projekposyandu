<!-- Main content -->
<form action="<?php echo site_url('Kader/UpdateDataKader'); ?>" method="post">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Update kader</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">
                  
                  <div class="form-group">
                    <label>Nama</label>
                    <br>
                    <input type="hidden" name="id_kader" value="<?php echo $detail['id_kader']; ?>">
                    <input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
                  </div>
                  <br>
                  <div>
                    <label>No_tlp</label>
                    <br>
                    <input type="text" name="no_tlp" value="<?php echo $detail['no_tlp']; ?>">
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