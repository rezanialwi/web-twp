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

             <div class="card shadow mb-8">
            <div class="card-header py-8">
              <h6 class="m-0 font-weight-bold text-primary">Data Undangan</h6>
              
            </div>
            <?php echo form_open('fkpsk/search') ?>
                <div class="input-group input-group-sm hidden-xs" style="width: 500px;">
                  <input type="text" name="keyword" class="form-control pull-left" placeholder="Ketik Kata Kunci...">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    <a href="<?php echo site_url('fkpsk/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Data</a>
  <a href="<?php echo site_url('fkpsk/cetak') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
  <i class="fas fa-download fa-sm text-white-50"></i>Cetak Data</a>
                  </div>
                  </div>
                  <?php echo form_close() ?>
	 <div class="card-body">
   
     	
       
  <div class="table-responsive">
     <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead>
		<tr>
			<th>No</th>
			<th>Nama </th>
			<th>Jumlah</th>
			<th>Keterangan</th>
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
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->jumlah ?></td>
     <td><?php
if($u->ket=="Hadir"){
echo "<a href='#' class='btn btn-success btn-icon-split'>
<span class='icon text-white-50'>
  <i class='fas fa-check'></i>
</span>
<span class='text'>Hadir</span>
</a>";
}else{
echo "<a href='#' class='btn btn-danger btn-icon-split'>
<span class='icon text-white-50'>
  <i class='fas fa-info-circle'></i>
</span>
<span class='text'>Tidak Hadir</span>
</a>";
}
?>
</td>
			<td>
          
                  </a>                
                  <a href="<?php echo base_url().'fkpsk/edit/'.$u->id_fkpsk; ?>" class="btn btn-success btn-sm" > <i
class="fa fa-plus"></i> </a>
<a href="<?php echo base_url().'fkpsk/hapus/'.$u->id_fkpsk; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin Hapus Data <?php echo $u->nama ?> ?');"> <i
class="fa fa-trash"></i> </a>
<!-- <a href="<?php echo base_url().'fkpsk/detail/'.$u->id_fkpsk; ?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i> </a> -->
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
