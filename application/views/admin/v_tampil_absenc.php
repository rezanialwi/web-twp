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
              <h6 class="m-0 font-weight-bold text-primary">Data Absensi Calang</h6>
            </div>
            
	 <div class="card-body">
     	<a href="<?php echo site_url('absen_calang/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data</a>
  <a href="<?php echo site_url('absen_calang/cetak') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-download fa-sm text-white-50"></i>Cetak Data</a>
   <a href="<?php echo site_url('absen_calang/laporanpdf') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-download fa-sm text-white-50"></i>Export Data PDF</a>
      <div class="table-responsive">
     <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
		<tr>
			<th>No</th>
			<th>Nama Calang</th>
			<th>Nama Acara</th>
			<th>Jam</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($data as $u){ 
		?>
		 <tbody>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_calang ?></td>
			<td><?php echo $u->nama_proker ?></td>
			<td><?php echo $u->jam ?></td>
			<td><?php echo $u->keterangan ?></td>
			<td>
          
                  </a>
			     <?php echo anchor('absen_calang/edit/'.$u->id_absensi,'<button class="btn ">
                    <i class="fas fa-mouse-pointer"></i>'); ?>
                 <?php echo anchor('absen_calang/hapus/'.$u->id_absensi,'<button class="btn  ">
                    <i class="fas fa-trash"></i>'); ?>
			</td>
		</tr>
		</tbody>
		<?php } ?>
  </table>
  <div class="container">
      <?php echo $pagination ?>
    </div>
   </div>
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
<?php $this->load->view("admin/partial/table.php") ?>

</body>

</html>
