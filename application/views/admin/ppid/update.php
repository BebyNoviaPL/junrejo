<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 col-12">
        <div class="card">
          <div class="card-header"><strong><?php echo $c_name ?></strong><small> Edit Form</small></div>
          <div class="card-body card-block">
            <?php echo form_open_multipart("",array("id"=>"form-input")); ?>
            <div class="form-group">
              <label for="input-visi" class="form-control-label">visi</label>
              <input type="text" id="input-visi" name="visi" placeholder="Masukan visi" class="form-control" value="<?php echo $ppid->visi ?>">
              <?php echo form_error("visi") ?>
            </div>
            
             <div class="form-group">
              <label for="input-misi" class="form-control-label">misi</label>
              <input type="text" id="input-misi" name="misi" placeholder="Masukan misi" class="form-control" value="<?php echo $ppid->misi ?>">
              <?php echo form_error("misi") ?>
            </div>
             <div class="form-group">
              <label for="input-tugas" class="form-control-label">tugas</label>
              <input type="text" id="input-tugas" name="tugas" placeholder="Masukan tugas" class="form-control" value="<?php echo $ppid->tugas ?>">
              <?php echo form_error("tugas") ?>
            </div>
             <div class="form-group">
             <label for="input-struktur" class="form-control-label">struktur</label>
              <input type="file" name="struktur" class="form-control">
              <?php echo (isset($error) ? $error : "") ?>
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