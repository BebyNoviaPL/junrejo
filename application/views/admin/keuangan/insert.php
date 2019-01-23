<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 col-12">
        <div class="card">
          <div class="card-header"><strong><?php echo $c_name ?></strong><small> Tambah Form</small></div>
          <div class="card-body card-block">
            <?php echo form_open_multipart("",array("id"=>"form-input")); ?>
            <div class="form-group">
              <label for="input-tahun" class="form-control-label">tahun</label>
              <input type="text" id="input-tahun" name="tahun" placeholder="Masukan tahun" class="form-control" value="<?php echo set_value("tahun") ?>">
              <?php echo form_error("tahun") ?>
            </div>
            <div class="form-group">
              <label for="input-dokumen_perencanaan" class="form-control-label">dokumen_perencanaan</label>
              <input type="file" id="input-dokumen_perencanaan" name="dokumen_perencanaan" placeholder="Masukan dokumen_perencanaan" class="form-control" value="<?php echo set_value("dokumen_perencanaan") ?>">
              <?php echo form_error("dokumen_perencanaan") ?>
            </div>
            <div class="form-group">
              <label for="input-apbdesa" class="form-control-label">apbdesa</label>
              <input type="file" id="input-apbdesa" name="apbdesa" placeholder="Masukan apbdesa" class="form-control" value="<?php echo set_value("apbdesa") ?>">
              <?php echo form_error("apbdesa") ?>
            </div>
            <div class="form-group">
              <label for="input-laporan_keuangan" class="form-control-label">laporan_keuangan</label>
              <input type="file" id="input-laporan_keuangan" name="laporan_keuangan" placeholder="Masukan laporan_keuangan" class="form-control" value="<?php echo set_value("laporan_keuangan") ?>">
              <?php echo form_error("laporan_keuangan") ?>
            </div>
            <div class="form-group">
              <label for="input-infografis_apbd" class="form-control-label">infografis_apbd</label>
              <input type="file" id="input-infografis_apbd" name="infografis_apbd" placeholder="Masukan infografis_apbd" class="form-control" value="<?php echo set_value("infografis_apbd") ?>">
              <?php echo form_error("infografis_apbd") ?>
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