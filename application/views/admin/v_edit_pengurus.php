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
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Pengurus</h6>
            </div>
                	
                   <form action="<?=base_url()?>pengurus/updatedata" method="post" enctype="multipart/form-data" class="user">
              <div class="form-group">
               <label for="nama"> No Anggota : </label>
                  <input type="text" class="form-control form-control-user" name="no_anggota"  value="<?=$data->no_anggota?>">
                </div>
              <div class="form-group">
               <label for="nama"> Nama : </label>
                  <input type="text" class="form-control form-control-user" name="nama"  value="<?=$data->nama?>">
                </div>
                 <div class="form-group">
                  <label for="nim"> Nim : </label>
                  <input type="text" class="form-control form-control-user" name="nim"  value="<?=$data->nim?>">
                </div>
                 <div class="form-group">
                 <label for="prodi"> Prodi : </label>
                  <input type="text" class="form-control form-control-user" name="prodi" value="<?=$data->prodi?>">
                </div>
                <div class="form-group">
                  <label for="telp"> No WA: </label>
                  <input type="number" class="form-control form-control-user" name="no_wa" value="<?=$data->no_wa?>">
                </div>
                <div class="form-group">
                <label for="alamat"> Alamat: </label>
                  <input type="text" class="form-control form-control-user" name="alamat" value="<?=$data->alamat?>">
                </div>
                <div class="form-group">
                 <label for="jabatan"> Jabatan: </label>
                  <input type="text" class="form-control form-control-user" name="jabatan" value="<?=$data->jabatan?>">
                </div>
                <div class="form-group">
                   <label for="nama"> Foto Anda: </label>
                  <input type="file" class="form-control form-control-user" name="fotopost">
                </div>

                
          <!-- file lama -->
          <input type="hidden" name="filelama" value="<?=$data->foto?>">
          <!-- ID -->
          <input type="hidden" name="id_pengurus" value="<?=$data->id_pengurus?>">
				<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
      
			</form>
            	
        <br>
    <?php echo anchor('pengurus/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
			
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
