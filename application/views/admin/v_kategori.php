
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
    <div class="card-body">
      <a href="<?php echo site_url('proker/kategori_tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah kategori</a> 
     <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        </section> 
            <section class="content"> 
                <div class="row"> 
                    <div class="col-lg-9"> 
                    <br/> 
                    <br/> 
                    <div class="box box-primary"> 
                    <div class="box-header"> 
                    <h3 class="box-title">Kategori</h3> 
                    </div> 
                    <div class="box-body"> 
                    <table class="table table-bordered"> 
                    <thead> 
                    <tr> 
                    <th width="1%">NO</th> 
                    <th>Kategori</th> 
                    <th>Slug</th> 
                    <th width="10%">OPSI</th> 
                    </tr> 
                    </thead> 
                    <tbody> 
                    <?php 
                    $no = 1; 
                    foreach($kategori as $k){ 
                    ?> 
                    <tr> 
                    <td><?php echo 
                    $no++; ?></td> 
                    <td><?php echo $k->kategori_nama; ?></td> 
                    <td><?php echo $k->kategori_slug; ?></td> 
                    <td> 
                    <a 
                    href="<?php echo base_url().'proker/kategori_edit/'.$k->kategori_id; ?>" class="btn btn-warning 
                    btnsm"> <i class="fa fa-mouse-pointer"></i> </a> 
                    <a 
                    href="<?php echo base_url().'proker/kategori_hapus/'.$k->kategori_id; ?>" onclick="return confirm('bebujur handak dihapus kah?')" class="btn btn-danger 
                    btnsm"> <i class="fa fa-trash"></i> </a> 
                    </td> 
                    </tr> 
                    <?php } ?> 
                    </tbody> 
                    </table> 
                    </div> 
                    </div> 
                    </div> 
                </div> 
            </section> 
            </table>
            </div>
</div>
</div>

<?php $this->load->view("admin/partial/footer.php") ?>
<?php $this->load->view("admin/partial/table.php") ?>

</body>