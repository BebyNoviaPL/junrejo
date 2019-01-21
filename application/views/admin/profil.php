<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
          <div class="card-header"><strong>Profil Desa</strong><small> </small></div>
          <div class="card-body card-block">
            <?php echo form_open("Admin/Dashboard/profil_proses",array("id"=>"form-input")); ?>
            <div class="form-group">
              <label for="input-desa" class="form-control-label">Profil</label>
              <textarea name="desa" class="form-control" rows="10"><?php echo $this->Profil_m->getData("desa") ?></textarea>
              <?php echo form_error("desa") ?>
            </div>
            <?php echo form_close(); ?>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm" form="form-input">
              <i class="fa fa-dot-circle-o"></i> Submit
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>