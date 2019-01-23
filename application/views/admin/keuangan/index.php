<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">

      <div class="col-md-12">
        <?php if ($this->session->flashdata('error_message') != null): ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('error_message'); ?>
          </div>
        <?php endif ?>
        <?php if ($this->session->flashdata('success_message') != null): ?>
          <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success_message'); ?>
          </div>
        <?php endif ?>
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Table <?php echo $c_name ?></strong>
          </div>
          <div class="card-body">
            <a class="btn btn-primary mb-3 ml-3" href="<?php echo base_url("Admin/".$c_name."/insert") ?>"><i class="fa fa-plus"></i> Tambah</a>
            <table id="bootstrap-datatables" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="1px">#</th>
                  <th>Dokumen Perencanaan</th>
                  <th>Tanggal</th>
                  
                  
                  <th width="116px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $key => $value): ?>
                  <tr>
                    <td><?php echo ++$key; ?></td>
                    <td><?php echo $value->dokumen_perencanaan ?></td>
                    <td><?php echo $value->tanggal ?></td>
                    
                    <td>
                      <a class="btn btn-sm btn-success" href="<?php echo base_url("Admin/".$c_name."/update/".$value->id) ?>"><i class="fa fa-pencil"></i> Edit</a>
                      <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete" data-href="<?php echo base_url("Admin/".$c_name."/delete/".$value->id) ?>">
                        <i class="fa fa-trash"></i> Hapus
                      </button>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div><!-- .animated -->
</div>
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modaldeleteLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaldeleteLabel">Konfirmasi Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
         Apakah anda yakin menghapus data ini?
       </p>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
      <a href="#" id="confirm-delete" class="btn btn-danger">Hapus</a>
    </div>
  </div>
</div>
</div>
<script>
  $('#modal-delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    $(this).find('#confirm-delete').attr('href',button.data('href'));
  });
</script>