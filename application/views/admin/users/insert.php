<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 col-12">
        <div class="card">
          <div class="card-header"><strong><?php echo $c_name ?></strong><small> Tambah Form</small></div>
          <div class="card-body card-block">
            <?php echo form_open("",array("id"=>"form-input")); ?>
            <div class="form-group">
              <label for="input-nama" class="form-control-label">Nama</label>
              <input type="text" id="input-nama" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo set_value("nama") ?>">
              <?php echo form_error("nama") ?>
            </div>
            <div class="form-group">
              <label for="input-username" class="form-control-label">Username</label>
              <input type="text" id="input-username" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo set_value("username") ?>">
              <?php echo form_error("username") ?>
            </div>
            <div class="form-group">
              <label for="input-password" class="form-control-label">Password</label>
              <input type="password" id="input-password" name="password" placeholder="Masukan Password" class="form-control" value="">
              <?php echo form_error("password") ?>
            </div>
            <div class="form-group">
              <label for="input-re-password" class="form-control-label">Ketik Ulang Password</label>
              <input type="password" id="input-re-password" name="re-password" placeholder="Ketik Ulang Password" class="form-control" value="">
              <?php echo form_error("re-password") ?>
            </div>
            <?php echo form_close(); ?>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" form="form-input">
              <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <a href="<?php echo base_url("Admin/".$c_name) ?>" class="btn btn-secondary btn-sm">
              <i class="fa fa-ban"></i> Back
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>