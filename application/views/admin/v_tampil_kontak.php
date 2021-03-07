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
              <h6 class="m-0 font-weight-bold text-primary">Data Komentar</h6>
            </div>
            
	 <div class="card-body">
     	<a href="<?php echo site_url('kontak/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data</a>
  <a href="<?php echo site_url('cetak_kontak/index') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-download fa-sm text-white-50"></i>Cetak Data</a>
      <div class="table-responsive">
     <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Komentar</th>
			<th>Action</th>
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($kontak as $u){ 
		?>
		 <tbody>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td><?php echo $u->komen ?></td>
			<td>
          
                  </a>
			     <?php echo anchor('kontak/edit/'.$u->id,'<button class="btn ">
                    <i class="fas fa-mouse-pointer"></i>'); ?>
                 <?php echo anchor('kontak/hapus/'.$u->id,'<button class="btn  ">
                    <i class="fas fa-trash"></i>'); ?>
			</td>
		</tr>
		</tbody>
		<?php } ?>
	</table>
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
