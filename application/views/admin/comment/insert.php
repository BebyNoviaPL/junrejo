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
              <label for="input-no_tlpn" class="form-control-label">no_tlpn</label>
              <input type="text" id="input-no_tlpn" name="no_tlpn" placeholder="Masukan no_tlpn" class="form-control" value="<?php echo set_value("no_tlpn") ?>">
              <?php echo form_error("no_tlpn") ?>
            </div>
            <div class="form-group">
              <label for="input-pesan" class="form-control-label">Pesan</label>
              <input type="text" id="input-pesan" name="pesan" placeholder="Masukan pesan" class="form-control" value="<?php echo set_value("pesan") ?>">
              <?php echo form_error("pesan") ?>
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