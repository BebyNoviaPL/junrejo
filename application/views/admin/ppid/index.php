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
                  <th>Visi</th>
                  <th>Misi</th>
                  <th>Struktur Organisasi</th>
                  <th>Tugas dan Fungsi</th>
                 

                  <th width="116px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $key => $value): ?>
                  <tr>
                    <td><?php echo ++$key; ?></td>
                    <td><?php echo $value->visi ?></td>
                    <td><?php echo $value->misi ?></td>
                    <td><?php echo $value->struktur ?></td>
                    <td><?php echo $value->tugas ?></td>
                    
                   
                    <td>
                      <a class="btn btn-sm btn-success" href="<?php echo base_url("Admin/".$c_name."/update/".$value->id) ?>"><i class="fas fa-edit"></i>Edit</a>
                     
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

</div>
<script>
  $('#modal-delete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    $(this).find('#confirm-delete').attr('href',button.data('href'));
  });
</script>