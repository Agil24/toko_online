<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Total Belanja Anda</h4>
                    <div class="text-center btn-sm btn-success">
                        <?php
                        $grand_total = 0;
                        if ($keranjang = $this->cart->contents()) {
                            foreach ($keranjang as $item) {
                                $grand_total = $grand_total + $item['subtotal'];
                            }
                            echo "<h4>Total Belanja Anda : Rp." . number_format($grand_total, 0, ',', '.');
                        ?>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="text-center mb-4">Input Alamat Pengiriman dan Pembayaran</h3>

                    <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>No. Handphone</label>
                            <input type="text" name="no_hp" placeholder="Nomor Handphone Anda" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jasa Pengiriman</label>
                            <select class="form-control">
                                <option>GRAB</option>
                                <option>GOJEK</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih Pembayaran</label>
                            <select class="form-control">
                                <option>Transfer Bank</option>
                                <option>Gopay</option>
                                <option>Dana</option>
                                <option>Link Aja</option>
                                <option>Shopeepay</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Pesan</button>
                        </div>
                    </form>
                <?php
                        } else {
                            echo "<p class='text-center'>Keranjang Belanja Anda Masih Kosong</p>";
                        }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>