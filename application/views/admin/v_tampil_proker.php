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
              <h6 class="m-0 font-weight-bold text-primary">Data Proker</h6>
            </div>
          

	 <div class="card-body">
       <a href="<?php echo site_url('proker/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data</a>

  
      <div class="table-responsive">
     <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
		<tr>
			<th>No</th>
			<th>No_Anggota</th>
			<th>Nama Pengurus</th>
			<th>Action</th>
		</tr>
</thead>
		<?php 
		$no = 1;
		foreach($data as $data):?>
		 <tbody>
		<tr>
      <input type="hidden" name="id_proker" value="<?php echo $data->id_proker?>">
			<td><?php echo $no++ ?></td>
			<td><?php echo $data->nama_proker ?></td>
			<td><?php echo $data->tanggal ?></td>
			<td>
          
                  </a>
			     <?php echo anchor('proker/edit/'.$data->id_proker,'<button class="btn" > 
                    <i class="fa fa-mouse-pointer"></i>'); ?>
                 <?php echo anchor('proker/delete/'.$data->id_proker,'<button class="btn  ">
                    <i class="fas fa-trash"></i>'); ?>
                   
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
