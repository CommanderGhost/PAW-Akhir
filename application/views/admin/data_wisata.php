<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambahbarang"><i class=" fas fa-plus fa-sm"></i>Tambah Wisata</button>
    <table class="table table-bordered mt-2">
        <tr>
            <th>Nomor</th>
            <th>Nama Wisata</th>
            <th>Alamat Wisata</th>
            <th>Lokasi Wisata</th>
            <th>Biaya Wisata</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($wisata as $wst) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $wst->nama_wisata ?></td>
                <td><?php echo $wst->alamat_wisata ?></td>
                <td><?php echo $wst->lokasi_wisata ?></td>
                <td><?php echo $wst->biaya_wisata ?></td>
                <td>
                    <div class="btn-success  btn-sm"><i class="fas fa-search-plus"></i></div>
                </td>
                <td> <?php echo anchor('admin/data_wisata/edit/' . $wst->id_wisata, '<div class="btn-primary  btn-sm"><i class="fas fa-edit"></i></div>') ?>

                </td>
                <td> <?php echo anchor('admin/data_wisata/hapus/' . $wst->id_wisata, '<div class="btn-danger  btn-sm"><i class="fas fa-trash"></i></div>') ?>

                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<div class="modal fade" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA WISATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_wisata/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">nama Tempat Wisata </label>
                        <input type="text" name="nama_wisata" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">alamat wisata </label>
                        <input type="text" name="alamat_wisata" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">lokasi wisata </label>
                        <input type="text" name="lokasi_wisata" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">biaya wisata </label>
                        <input type="text" name="biaya_wisata" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">gambar wisata </label>
                        <input type="file" name="gambar_wisata" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>

        </div>
    </div>
</div>