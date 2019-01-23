<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 col-12">
        <div class="card">
          <div class="card-header"><strong><?php echo $c_name ?></strong><small> Tambah Form</small></div>
          <div class="card-body card-block">
            <?php echo form_open_multipart("",array("id"=>"form-input")); ?>
            
            <div class="form-group">
            <label for="input-jenis_layanan" class="form-control-label">jenis_layanan</label>
              <input type="text" id="input-jenis_layanan" name="jenis_layanan" placeholder="Masukan jenis_layanan" class="form-control" value="<?php echo set_value("jenis_layanan") ?>">
              <?php echo form_error("jenis_layanan") ?>
             </div>
              <div class="form-group">
            <label for="input-dokumen" class="form-control-label">dokumen</label>
              <input type="text" id="input-dokumen" name="dokumen" placeholder="Masukan dokumen" class="form-control" value="<?php echo set_value("dokumen") ?>">
              <?php echo form_error("dokumen") ?>
             </div>
                 <div class="form-group">
            <label for="input-syarat" class="form-control-label">syarat</label>
              <input type="text" id="input-syarat" name="syarat" placeholder="Masukan syarat" class="form-control" value="<?php echo set_value("syarat") ?>">
              <?php echo form_error("syarat") ?>
             </div>
              <div class="form-group">
            <label for="input-biaya" class="form-control-label">biaya</label>
              <input type="text" id="input-biaya" name="biaya" placeholder="Masukan biaya" class="form-control" value="<?php echo set_value("biaya") ?>">
              <?php echo form_error("biaya") ?>
             </div>
                 <div class="form-group">
            <label for="input-proses" class="form-control-label">proses</label>
              <input type="text" id="input-proses" name="proses" placeholder="Masukan proses" class="form-control" value="<?php echo set_value("proses") ?>">
              <?php echo form_error("proses") ?>
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