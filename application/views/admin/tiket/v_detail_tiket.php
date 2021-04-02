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
              <h6 class="m-0 font-weight-bold text-primary">Detail Data Penonton</h6>
            </div>
            <section class="center">
    
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
   <tr>
   <th align="left">ID PENDAFTARAN</th>
   <th>:</th>
   <th align="left" width="80%"><?php echo $detail->id_tiket ?></th>
   </tr>
   <tr>
   <th align="left">Nama Lengkap</th>
   <th>:</th>
   <th align="left" width="80%"><?php echo $detail->nama ?></th>
   </tr>
   <tr>
   <th align="left">ALAMAT</th>
   <th>:</th>
   <th align="left" width="80%"><?php echo $detail->alamat ?></th>
   </tr>
   <tr>
   <th align="left">ASAL KAMPUS / ORGANISASI</th>
   <th>:</th>
   <th align="left" width="80%"><?php echo $detail->asal ?></th>
   </tr>
   <tr>
   <th align="left">NO.TELP / WA</th>
   <th>:</th>
   <th align="left" width="80%"><?php echo $detail->telp ?></th>
   </tr>
   <tr>
   <th align="left">EMAIL</th>
   <th>:</th>
   <th align="left" width="80%"><?php echo $detail->email ?></th>
   </tr>
   <tr>
   <th align="left">KETERANGAN</th>
   <th>:</th>
   <th align="left" width="80%"><?php echo $detail->ket ?></th>
   </tr>
 
                                   </tbody>
                               </table>
                              
                               </section>
        
      <a href="<?php echo base_url().'tiket_admin'; ?>" class="btn btn-danger btn-user btn-block">Kembali</a>     	
        <br>
  
 
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
