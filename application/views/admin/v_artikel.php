
<head>

  <?php $this->load->view("admin/partial/head.php") ?>

</head>
<body id="page-top">
        <?php $this->load->view("admin/partial/sidebar.php") ?>


<div class="content-wrapper">
    <section class="content-header">
    <h1>
    Artikel
    <small>Manajemen Artikel</small> 
    </h1>
    </section>
    <section class="content">
        <div class="card-body">
            <div class="row">
            <div class="col-lg-12">
            <a href="<?php echo base_url().'proker/artikel_tambah'; ?>"
            class="btn btn-sm btn-primary">Buat artikel baru</a>
            <br/>
            <br/>
            <div class="box box-primary">
            <div class="box-header">
            <h3 class="box-title">Artikel</h3>
            </div>
            <div class="box-body">
             <div class="table-responsive">
     <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
            <tr>
            <th width="1%">NO</th>
            <th>Tanggal</th>
            <th>Artikel</th>
            <th>Kategori</th>
            <th
            width="10%">Gambar</th>
            <th>Status</th>
            <th width="15%">OPSI</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach($artikel as $a){
            ?>
            <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo date('d/m/Y H:i', strtotime($a->artikel_tanggal)); ?></td>
            <td> <?php echo $a->artikel_judul; ?>
            <br/>
            <small class="text-muted"> <?php echo base_url()."".$a->artikel_slug; ?>
            </small>
            </td>
             
            <td><?php echo $a->kategori_nama; ?></td>
            <td><img
            width="100%" class="img-responsive" src="<?php echo base_url().'/uploads/artikel/'.$a->artikel_sampul;
            ?>"></td>
            <td>
            <?php
            if($a->artikel_status=="publish"){
            echo "<span class='label label-success'>Publish</span>";
            }else{
            echo "<span class='label label-danger'>Draft</span>";
            }
            ?>
            </td>
            <td>
            <a
            target="_blank" href="<?php echo base_url().'blog/detail/'.$a->artikel_slug;?>" class="btn btn-success btn-sm"> <i
            class="fa fa-eye"></i> </a>
            <a
            href="<?php echo base_url().'proker/artikel_edit/'.$a->artikel_id; ?>" class="btn btn-warning btn-sm"> <i
            class="fa fa-mouse-pointer"></i> </a>
            <a
            href="<?php echo base_url().'proker/artikel_hapus/'.$a->artikel_id; ?>" class="btn btn-danger btn-sm"> <i
            class="fa fa-trash" onclick="return confirm('bebujur handak dihapus kah ini ?')"></i> </a>
            </td>
            </tr>
            <?php } ?>
            </tbody>
            </div>
            </table>
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