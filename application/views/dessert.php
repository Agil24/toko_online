<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/sliderr1.jpg') ?>" class="d-block w-100" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/sliderr2.jpg') ?>" class="d-block w-100" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/sliderr3.jpg') ?>" class="d-block w-100" alt="Three Slide">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <div class="nav-icon">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </div>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <div class="nav-icon">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </div>
            </a>
        </div>
    </div>
    <div class="row text-center mt-3 mb-3">
        <?php foreach ($dessert as $brg) : ?>
            <div class="card ml-3 mt-2" style="width: 16rem;">
                <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card border-0 mt-2">
                    <h2 class="card-title"><?php echo $brg->nama_brg ?></h2>
                    <h4>Rp.<?php echo number_format($brg->harga, 0, ',', '.') ?></h4>
                </div>
                <div class="card mb-2 mt-2 border-0">
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-success mt-1">Detail</div>') ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>