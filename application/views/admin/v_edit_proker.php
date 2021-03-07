<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/partial/head.php") ?>

</head>

<body id="page-top">
        <?php $this->load->view("admin/partial/sidebar.php") ?>
    
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">


           
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Proker</h6>
			</div>
			<?php foreach($proker as $u){ ?>
				 <form class="user" action="<?php echo base_url(). 'proker/update'; ?>" method="post">
				  <div class="form-group">
                  <input type="hidden" class="form-control form-control-user" name="id_proker"  value="<?php echo $u->id_proker ?>">
                </div>
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nama_proker"value="<?php echo $u->nama_proker ?>">
                </div>
                <div class="form-group">
                  <input type="date" class="form-control form-control-user" name="tanggal"  value="<?php echo $u->tanggal ?>">
                </div>
				<input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
			</form>
      <br>
		 <?php echo anchor('proker/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
					<?php } ?>
  </div>
	 
          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->

  <!-- End of Page Wrapper -->

<?php $this->load->view("admin/partial/footer.php") ?>

</body>

</html>
