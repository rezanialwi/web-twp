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
<section class="content">
<div class="card-body">
<div class="row">
<div class="col-lg-6">
<a href="<?php echo base_url().'proker/kategori'; ?>" class="btn btnsm
btn-primary">Kembali</a>
<br/>
<br/>
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title">Kategori</h3>
</div>
<div class="box-body">
<?php foreach($kategori as $k){ ?>
<form method="post" action="<?php echo
base_url('proker/kategori_update') ?>">
<div class="box-body">
<div class="form-group">
<label>Nama
Kategori</label>
<input type="hidden"
name="id" value="<?php echo $k->kategori_id; ?>">
<input type="text"
name="kategori" class="form-control" placeholder="Masukkan nama kategori .." value="<?php echo $k-> kategori_nama; ?>">
<?php echo
form_error('kategori'); ?>
</div>
</div>
<div class="box-footer">
<input type="submit"
class="btn btn-success" value="Update">
</div>
</form>
<?php } ?>
</div>
</div>
</div>
</div>
</div>
</section>
</div>

<?php $this->load->view("admin/partial/footer.php") ?>
<?php $this->load->view("admin/partial/table.php") ?>

</body>
