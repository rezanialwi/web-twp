<head>

  <?php $this->load->view("admin/partial/head.php") ?>

</head>
<body id="page-top">
        <?php $this->load->view("admin/partial/sidebar.php") ?>


<div class="content-wrapper"> 
<section class="content-header"> 
<h1> 
Kategori 
<small> Artikel</small> 
</h1> 

</section>
<div class="card-body">
<a href="<?php echo base_url().'proker/kategori'; ?>" class="btn btn-sm btn-primary">Kembali</a> 
<div class="table-responsive">
<section class="content"> 
<div class="row"> 
<div class="col-lg-6"> 
<br/> 
<br/> 
<div class="box box-primary"> 
<div class="box-header"> 
<h3 class="box-title">Kategori</h3> 
</div> 
<div class="box-body"> 
<form method="post" action="<?php echo 
base_url('proker/kategori_aksi') ?>"> 
<div class="box-body"> 
<div class="form-group"> 
<label>Nama 
Kategori</label> 
<input type="text" 
name="kategori" class="form-control" placeholder="Masukkan nama kategori .."> 
<?php echo 
form_error('kategori'); ?> 
</div> 
</div> 
<div class="box-footer"> 
<input type="submit" class="btn btn-success" value="Simpan"> 
</div> 
</form> 
</div> 
</div> 
</div> 
</div> 
</div> 
</section>

</div>
</div>


<?php $this->load->view("admin/partial/footer.php") ?>
<?php $this->load->view("admin/partial/table.php") ?>

</body>