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
              <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            
	 <div class="card-body">
     	<a href="<?php echo site_url('akun/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data</a>
      <div class="table-responsive">
     <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($admin as $u){ 
		?>
		 <tbody>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->username ?></td>
			<td><?php echo $u->password ?></td>
			<td>
          
                  </a>
			  
                 <?php echo anchor('akun/hapus/'.$u->id,'<button class="btn  ">
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
