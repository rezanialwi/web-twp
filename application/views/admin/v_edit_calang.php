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
              <h6 class="m-0 font-weight-bold text-primary">Edit Data Calang</h6>
            </div>
                	
                   <form action="<?=base_url()?>calang/updatedata" method="post" enctype="multipart/form-data" class="user">
              
                 <div class="form-group">
                    <label for="nama"> NIM : </label>
                  <input type="text" class="form-control form-control-user" name="nim"  value="<?=$data->nim?>" disabled>
                </div>
               <div class="form-group">
                  <label for="nama"> Nama Lengkap : </label>
                  <input type="text" class="form-control form-control-user" name="nm_pendaftar"  value="<?=$data->nm_pendaftar?>">
                </div>
                <div class="form-group">
								<label for="nama"> Jurusan : </label>
				    	<div class="col-sm-15">
                <?php
                   echo form_dropdown('jurusan', array('Pilih Jurusan', 'Elektro'=>'Elektro', 'Mesin'=>'Mesin',
                      'Sipil'=>'Sipil', 'Akuntansi'=>'Akuntasnsi', 'Administrasi Bisnis'=>'Administrasi Bisnis'), $data->agama, "class='form-control'");
                        ?>
                      </div>
							</div>
                 <div class="form-group">
                 <label for="nama"> Prodi : </label>
                  <input type="text" class="form-control form-control-user" name="prodi" value="<?=$data->prodi?>">
                </div>
                 <div class="form-group">
                 <label for="nama"> Tempat Lahir : </label>
                  <input type="text" class="form-control form-control-user" name="tmp_lahir" value="<?=$data->tmp_lahir?>">
                </div>
                 <div class="form-group">
                 <label for="nama"> Tanggal Lahir : </label>
                  <input type="date" class="form-control form-control-user" name="tgl_lahir" value="<?=$data->tgl_lahir?>">
                </div>
                <div class="form-group">
                <label for="nama"> Alamat: </label>
                  <input type="text" class="form-control form-control-user" name="alamat" value="<?=$data->alamat?>">
                </div>
                <div class="form-group">
                <label for="nama"> No WA: </label>
                  <input type="number" class="form-control form-control-user" name="no_wa" value="<?=$data->no_wa?>">
                </div>
                <div class="form-group">
								<label for="alamat"> Agama :</label>
								 <div class="col-sm-15">
                       <?php
                          echo form_dropdown('agama', array('Pilih Agama', 'Islam'=>'Islam', 'Protestan'=>'Protestan',
                           'Katolik'=>'Katolik', 'Hindu'=>'Hindu'), $data->agama, "class='form-control'");
                        ?>
                      </div>
							</div>
							
						<div class="form-group">
              <label for="nama"> Jenis Kelamin: </label>
								  <div class="col-sm-15">
                       <?php
                          echo form_dropdown('jenkel', array('Pilih Gender', 'laki-laki'=>'Laki-Laki', 'perempuan'=>'Perempuan'), $data->jenkel, "class='form-control'");
                        ?>
                      </div>
							</div>
                <div class="form-group">
                <label for="nama"> Pengalaman Organisasi: </label>
                  <textarea class="form-control form-control-user" name="organisasi" ><?=$data->organisasi?></textarea>
                </div>
                <div class="form-group">
                 <label for="nama"> Pengalaman Berkesenian: </label>
                  <textarea class="form-control form-control-user" name="berkesenian"><?=$data->berkesenian?></textarea>
                </div>
                <div class="form-group">
                 <label for="nama"> Minat Anda: </label>
                  <textarea class="form-control form-control-user" name="minat" > <?=$data->minat?></textarea>
                </div>

                      
                  <div class="form-group">
                   <label for="nama"> Foto Anda: </label>
                  <input type="file" class="form-control form-control-user" name="fotopost">
                </div>

                
          <!-- file lama -->
          <input type="hidden" name="filelama" value="<?=$data->foto?>">
          <!-- ID -->
  
				<input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
      
			</form>
            	
        <br>
    <?php echo anchor('calang/index','<button class="btn btn-danger btn-user btn-block">Kembali</button>'); ?>
			
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
