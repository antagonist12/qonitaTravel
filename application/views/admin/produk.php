<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('admin/tambahProduk'); ?>" class="btn btn-success mb-3">Tambah Paket</a>


            <table class="table table-hover table-responsive-lg text-center justify-content-center">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Stok Paket</th>
                        <th scope="col">Harga Paket</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>

                    <?php foreach ($produk as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= ucfirst($p['nama']); ?></td>
                            <td><?= ucfirst($p['name']); ?></td>
                            <td><?= number_format($p['stok']); ?> Tiket</td>
                            <td>Rp. <?= number_format($p['harga']); ?></td>
                            <td>
                                <a href="<?= base_url('admin/detailProduk/') . $p['id_produk']; ?>" class="badge badge-info">Detail Paket</a>
                                <a href="<?= base_url('admin/ubahProduk/') . $p['id_produk']; ?>" class="badge badge-warning">Ubah Paket</a>
                                <!-- <a href="" class="badge badge-success">Edit</a> -->
                                <a href="<?= base_url('admin/hapusProduk/') . $p['id_produk']; ?>" onclick="return confirm('Yakin Ingin Di Hapus ?');" class="badge badge-danger">Hapus Paket</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
</div>