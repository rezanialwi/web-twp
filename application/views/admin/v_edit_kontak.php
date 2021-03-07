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
              <h6 class="m-0 font-weight-bold text-primary">Edit Data User</h6>
			</div>
			<?php foreach($kontak as $u){ ?>
				 <form class="user" action="<?php echo base_url(). 'kontak/update'; ?>" method="post">
				  <div class="form-group">
                  <input type="hidden" class="form-control form-control-user" name="id"  value="<?php echo $u->id ?>">
                </div>
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nama"value="<?php echo $u->nama ?>">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email"  value="<?php echo $u->email ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="komen" value="<?php echo $u->komen ?>">
                </div>
				<input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
			</form>
      <br>
		 <?php echo anchor('kontak/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
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
