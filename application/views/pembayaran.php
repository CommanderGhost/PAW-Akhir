<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($pesanan = $this->cart->contents()) {
                    foreach ($pesanan as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "total pesan anda : Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div> <br> <br>
            <h3>Input Alamat Pengiriman Dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">

                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">

                    <label>Nomor Telepon</label>
                    <input type=" text" name="no_telp" placeholder="Nomor Telepon" class="form-control">

                    <div class="form-group">
                        <label>Pilih Bank</label>
                        <select class="form-control">
                            <option>BRI - XXXXX</option>
                            <option>BCA - XXXXX</option>
                            <option>BIN - XXXXX</option>
                            <option>Mandiri - XXXXX</option>

                        </select>
                    </div>

                </div>
                <button type=" submit" class="btn btn-sm btn-primary">Pesan</button>

            </form>
        <?php
                } else {
                    echo "Belum Ada Yang Di Pesan";
                } ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>