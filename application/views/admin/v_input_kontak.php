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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kontak</h6>
            </div>
				 <form class="user" action="<?php echo base_url(). 'kontak/tambah_aksi'; ?>" method="post">
               <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Anda">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" placeholder="Email Anda">
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-user" name="komen" placeholder="Komentar Anda"></textarea>
                </div>
				<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
      
			</form>
        <br>
    <?php echo anchor('kontak/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
				
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
