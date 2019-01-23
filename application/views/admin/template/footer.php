<div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p> ©2019 Admin Pemerintahan Desa | Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url("assets_admin/") ?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url("assets_admin/") ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url("assets_admin/") ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/select2/select2.min.js">
    </script>


    <!-- Main JS-->
    <script src="<?php echo base_url("assets_admin/") ?>js/main.js"></script>
    
<!-- Datatables -->
<?php if ($content == "datatables"): ?>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/pdfmake.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url("assets_admin/") ?>vendor/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-datatables').DataTable();
      } );
  </script>
<?php endif ?>

</body>

</html>
<!-- end document-->