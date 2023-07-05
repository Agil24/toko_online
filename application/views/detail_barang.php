<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4 ml-4 mr-4">
                        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Produk</td>
                                <td><strong><?php echo $brg->nama_brg ?></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brg->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>
                                    <strong>
                                        <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.') ?></div>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a href="<?php echo base_url('') ?>">
                                        <div class="btn btn-sm btn-secondary">Kembali</div>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>