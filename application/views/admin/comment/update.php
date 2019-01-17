<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 col-12">
        <div class="card">
          <div class="card-header"><strong><?php echo $c_name ?></strong><small> Edit Form</small></div>
          <div class="card-body card-block">
            <?php echo form_open("",array("id"=>"form-input")); ?>
            <div class="form-group">
              <label for="input-nama" class="form-control-label">Nama</label>
              <input type="text" id="input-nama" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo $comment->nama ?>">
              <?php echo form_error("nama") ?>
            </div>
            <div class="form-group">
              <label for="input-email" class="form-control-label">Email</label>
              <input type="text" id="input-email" name="email" placeholder="Masukan email" class="form-control" value="<?php echo $comment->email ?>">
              <?php echo form_error("email") ?>
            </div>
            <div class="form-group">
              <label for="input-pesan" class="form-control-label">Pesan</label>
              <input type="text" id="input-pesan" name="pesan" placeholder="Masukan pesan" class="form-control" value="<?php echo $comment->pesan ?>">
              <?php echo form_error("pesan") ?>
            </div>
            <div class="form-group">
              <label for="input-berita" class="form-control-label">Berita</label>
              <input type="text" id="input-berita" name="berita" placeholder="Masukan berita" class="form-control" value="<?php echo $comment->berita ?>">
              <?php echo form_error("berita") ?>
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