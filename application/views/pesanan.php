<div class="container-fluid">
    <h4>list pesanan<h4>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>NO</th>
                    <th>nama wisata</th>
                    <th>Biaya</th>
                    <th>sub-total</th>
                </tr>
                <?php
                $no = 1;
                foreach ($this->cart->contents() as $items) : ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $items['name'] ?></td>
                        <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></td>
                        <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                    </tr>


                <?php endforeach; ?>
                <tr>
                    <td colspan="3"></td>
                    <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
                </tr>
            </table>
            <div align="right">
                <a href="<?php echo base_url('dashboard/hapus_pesanan') ?>">
                    <div class="btn btn-sm btn-danger">Hapus Pesanan</div>
                </a>

                <a href="<?php echo base_url('dashboard/index') ?>">
                    <div class="btn btn-sm btn-primary">Lanjut Pesan</div>
                </a>

                <a href="<?php echo base_url('dashboard/pembayaran') ?>">
                    <div class="btn btn-sm btn-success">Pembayaran</div>
                </a>
            </div>
</div>