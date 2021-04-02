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
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Kehadiran</h6>
            </div>
            <?php foreach($tiket as $u){ ?>
				 <form class="user" action="<?php echo base_url(). 'tiket_admin/update'; ?>" method="post">
              <div class="form-group">
              <input type="hidden" class="form-control form-control-user" name="id_tiket"  value="<?=$u->id_tiket?>">
              <input type="hidden" class="form-control form-control-user" name="nama"  value="<?=$u->nama?>">
              <input type="hidden" class="form-control form-control-user" name="alamat"  value="<?=$u->alamat?>">
              <input type="hidden" class="form-control form-control-user" name="asal"  value="<?=$u->asal?>">
              <input type="hidden" class="form-control form-control-user" name="telp"  value="<?=$u->telp?>">
              <input type="hidden" class="form-control form-control-user" name="email"  value="<?=$u->email?>">
       
              <div class="form-group">
               <label for="nama"> Keterangan : </label>
                  <input type="text" class="form-control form-control-user" name="ket"  value="Hadir" readonly>
                </div>

                <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
      
			</form>
      <a href="<?php echo base_url().'tiket_admin'; ?>" class="btn btn-danger btn-user btn-block">Kembali</a>     	
        <br>
  
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
