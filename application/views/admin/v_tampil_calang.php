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
              <h6 class="m-0 font-weight-bold text-primary">Data Calang</h6>
            </div>
          

	 <div class="card-body">
       <a href="<?php echo site_url('calang/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data</a>
  <a href="<?php echo site_url('cetak_calang/cetak_pdf') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-download fa-sm text-white-50"></i>Cetak Data</a>
  
      <div class="table-responsive">
     <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Calang</th>
            <th>Minat</th>
            <th>Foto</th>
			<th>Action</th>
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($data as $data):?>
		 <tbody>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data->nim ?></td>
			<td><?php echo $data->nm_pendaftar ?></td>
			<td><?php echo $data->minat ?></td>
            <td><img width="50" src="<?php echo base_url(); ?>uploads/calang/<?php echo $data->foto ?>"></td>
			<td>
          
                  </a>
			     <?php echo anchor('calang/edit/'.$data->nim,'<button class="btn" > 
                    <i class="fa fa-mouse-pointer"></i>'); ?>
                 <?php echo anchor('calang/delete/'.$data->nim,'<button class="btn  ">
                    <i class="fas fa-trash"></i>'); ?>
                    
                    <?php echo anchor('cetak_calang/cetak_id/'.$data->nim,'<button class="btn " >
                    <i class="fas fa-print"></i>'); ?>
                   
			</td>
		</tr>
		</tbody>
		 <?php endforeach; ?>
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
