<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 col-12">
        <div class="card">
          <div class="card-header"><strong><?php echo $c_name ?></strong><small> Edit Form</small></div>
          <div class="card-body card-block">
            <?php echo form_open_multipart("",array("id"=>"form-input")); ?>
            <div class="form-group">
              <label for="input-judul" class="form-control-label">Judul</label>
              <input type="text" id="input-judul" name="judul" placeholder="Masukan Judul" class="form-control" value="<?php echo $berita->judul ?>">
              <?php echo form_error("judul") ?>
            </div>
            <div class="form-group">
              <label for="input-tanggal" class="form-control-label">Tanggal</label>
              <input type="date" id="input-tanggal" name="tanggal" placeholder="Masukan tanggal" class="form-control" value="<?php echo $berita->tanggal ?>">
              <?php echo form_error("tanggal") ?>
            </div>
             <div class="form-group">
              <label for="input-konten" class="form-control-label">Konten</label>
              <input type="text" id="input-konten" name="konten" placeholder="Masukan konten" class="form-control" value="<?php echo $berita->konten ?>">
              <?php echo form_error("konten") ?>
            </div>
             <div class="form-group">
             <label for="input-gambar" class="form-control-label">Gambar</label>
              <input type="file" name="gambar" class="form-control">
              <?php echo (isset($error) ? $error : "") ?>
            </div>
             <div class="form-group">
              <label for="input-fk_users" class="form-control-label">Users</label>
              <select name="fk_users" class="form-control" id="input-fk_users">
                <option selected disabled>Pilih Users</option>
                <?php foreach ($this->db->get('users')->result() as $value): ?>
                  <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
                <?php endforeach ?>
              </select>
              <script>$('#input-fk_users').val('<?php echo $berita->fk_users ?>')</script>
              <?php echo form_error("fk_users") ?>
            </div>
            <div class="form-group">
              <label for="input-fk_kementerian" class="form-control-label">Kementerian</label>
              <select name="fk_kementerian" class="form-control" id="input-fk_kementerian">
                <option selected disabled>Pilih Kementerian</option>
                <?php foreach ($this->db->get('kementerian')->result() as $value): ?>
                  <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
                <?php endforeach ?>
              </select>
              <script>$('#input-fk_kementerian').val('<?php echo $berita->fk_kementerian ?>')</script>
              <?php echo form_error("fk_kementerian") ?>
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