<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 col-12">
        <div class="card">
          <div class="card-header"><strong><?php echo $c_name ?></strong><small> Tambah Form</small></div>
          <div class="card-body card-block">
            <?php echo form_open_multipart("",array("id"=>"form-input")); ?>
            <div class="form-group">
              
              <label for="input-dokumen" class="form-control-label">Dokumen</label>
              <input type="file" id="input-dokumen" name="dokumen" placeholder="Masukan dokumen" class="form-control" value="<?php echo set_value("dokumen") ?>">
              <?php echo form_error("dokumen") ?>
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