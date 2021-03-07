<head>

  <?php $this->load->view("admin/partial/head.php") ?>

</head>
<body id="page-top">
        <?php $this->load->view("admin/partial/sidebar.php") ?>

<div class="content-wrapper">
    <section class="content-header">
    <h1>
    Artikel
    <small>Edit Artikel Baru</small>
    </h1>
    </section>
    <section class="content">
    <div class="card-body">
    <a href="<?php echo base_url().'proker/artikel'; ?>" class="btn btn-primary">Kembali</a>
    <br/>
    <br/>
    <?php foreach($artikel as $a){ ?>
    <form method="post" action="<?php echo base_url('proker/artikel_update') ?>"
    enctype="multipart/form-data">
    <div class="table-responsive">   
    <div class="row">
    <div class="col-lg-9">
    <div class="box box-primary">
    <div class="box-body">
    <div class="box-body">
    <div class="form-group">
    <label>Judul</label>
    <input type="hidden"
    name="id" value="<?php echo $a->artikel_id; ?>">
    <input type="text"
    name="judul" class="form-control" placeholder="Masukkan judul artikel.." value="<?php echo $a->artikel_judul; ?>">
    <br/>
    <?php echo
    form_error('judul'); ?>
    </div>
    </div>
    <div class="box-body">
    <div class="form-group">
    <label>Konten</label>
    <?php echo
    form_error('konten'); ?>
    <br/>
    <textarea class="form-control" id="editor" name="konten"> <?php echo $a->artikel_konten; ?> </textarea>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
    <div class="box box-primary">
    <div class="box-body">
    <div class="form-group">
    <label>Kategori</label>
    <select class="form-control"
    name="kategori">
    <option value="">- Pilih
    Kategori</option>
    <?php foreach($kategori as
    $k){ ?>
    <option <?php if($a->artikel_kategori == $k->kategori_id){echo "selected='selected'";} ?> value="<?php echo $k->kategori_id
    ?>"><?php echo $k->kategori_nama; ?></option>
    <?php } ?>
    </select>
    <br/>
    <?php echo form_error('kategori'); ?>
    </div>
    <br/><br/>
    <div class="form-group">
    <label>Gambar Sampul</label>
    <img width="100%" class="img-responsive" src="<?php echo base_url().'/uploads/artikel/'.$a->artikel_sampul; 
    ?>">
    <input type="file" name="sampul">

     <!-- file lama -->
    <input type="hidden" name="filelama" value="<?php echo $a->artikel_sampul; ?>">

    <br/>
    <?php 
    if(isset($gambar_error)){
    echo $gambar_error;
    }
    ?>
    <?php echo form_error('sampul'); ?>
    </div>
    <br/><br/>
    <input type="submit" name="status"
    value="Draft" class="btn btn-warning btn-block">
    <input type="submit" name="status"
    value="Publish" class="btn btn-success btn-block">
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
    <?php } ?>
    </div>
    </section>
</div> 



<script src="<?php echo base_url() ?>assets/ckeditor123/ckeditor.js"></script>
<script>

CKEDITOR.replace('editor');
</script> 
<?php $this->load->view("admin/partial/footer.php") ?>
<?php $this->load->view("admin/partial/table.php") ?>

</body>