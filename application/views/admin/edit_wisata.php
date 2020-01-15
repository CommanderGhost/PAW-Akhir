<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Data Wisata</h3>

    <?php foreach ($wisata as $wst) : ?>

        <form method="post" action="<?php echo base_url() . 'admin/data_wisata/update' ?>">

            <div class="for-group">
                <label>Nama Wisata</label>
                <input type="text" name="nama_wisata" class="form-control" value="<?php echo $wst->nama_wisata ?>">
            </div>

            <div class="for-group">
                <label>Alamat Wisata</label>
                <input type="hidden" name="id_wisata" class="form-control" value="<?php echo $wst->id_wisata ?>">
                <input type="text" name="alamat_wisata" class="form-control" value="<?php echo $wst->alamat_wisata ?>">
            </div>

            <div class="for-group">
                <label>Lokasi Wisata</label>
                <input type="text" name="lokasi_wisata" class="form-control" value="<?php echo $wst->lokasi_wisata ?>">
            </div>

            <div class="for-group">
                <label>Biaya Wisata</label>
                <input type="text" name="biaya_wisata" class="form-control" value="<?php echo $wst->biaya_wisata ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-2">Simpan</button>

        </form>

    <?php endforeach; ?>

</div>