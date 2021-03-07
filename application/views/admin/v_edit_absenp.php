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
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Absen Pengurus</h6>
			</div>
			<?php foreach($absensi_pengurus as $u){ ?>
				 <form class="user" action="<?php echo base_url(). 'absen_pengurus/update'; ?>" method="post">
				  <div class="form-group">
                  <input type="hidden" class="form-control form-control-user" name="id_absensi"  value="<?php echo $u->id_absensi ?>">
                </div>
               <div class="form-group">
               <label for="alamat"> Nama Anda :</label>
                  <input type="text" class="form-control form-control-user" name="nama_pengurus"value="<?php echo $u->nama_pengurus ?>">
                </div>
                <div class="form-group">
                  	<div class="col-sm-15">
                <?php
                   echo form_dropdown('id_proker', array('Pilih Acara', '1'=>'Study Pentas 2020', '2'=>'Anniversary TWP 2020'), $u->id_proker, "class='form-control'");
                        ?>
                      </div>
                </div>
                
                 <div class="form-group">
                    	<div class="col-sm-15">
                <?php
                   echo form_dropdown('keterangan', array('Pilih Status Anda', 'Hadir'=>'Hadir', 'Izin'=>'Izin', 'Alfa'=>'Alfa'), $u->keterangan, "class='form-control'");
                        ?>
                      </div>
                </div>

				<input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
			</form>
      <br>
		 <?php echo anchor('absen_pengurus/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
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
