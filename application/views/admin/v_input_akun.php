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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Data User</h6>
            </div>
            <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
				 <form class="user" action="<?php echo base_url(). 'akun/proses'; ?>" method="post">
               <div class="form-group">
                   <label for="alamat"> Username :</label>
                  <input type="text" class="form-control form-control-user" name="username" placeholder="Nama Anda">
                </div>
                <div class="form-group">
                     <label for="alamat"> Password :</label>
                  <input type="password" class="form-control form-control-user" name="password" placeholder="Password Anda">
                </div>
				<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
      
			</form>
        <br>
    <?php echo anchor('akun/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
				
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
