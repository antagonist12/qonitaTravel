<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    <div class="row">

        <div class="col-lg-12">
            <!-- Content Column -->
            <div class="row justify-content-center">
                <div class="col-md-4 mx-3 my-3">
                    <a href="<?= base_url('assets/img/produk/') ?><?= $produk['gambar']; ?>" target="_blank">
                        <img class="img-fluid img-thumbnail" src="<?= base_url('assets/img/produk/') ?><?= $produk['gambar']; ?>" alt="paket">
                    </a>
                </div>

                <div class="col-md-6 mx-3 my-3">
                    <h5>Nama Paket : <?= $produk['nama']; ?></h5>
                    <h5>Kategori : <?= $produk['name']; ?></h5>
                    <h5>Stok Tiket : <?= $produk['stok']; ?></h5>
                    <h5>Harga Paket : Rp. <?= number_format($produk['harga']); ?></h5>
                    <h5>Tanggal Keberangkatan Tersedia : </h5>
                    <?php foreach ($tanggal as $t) : ?>
                        <p><?= date('d F Y', strtotime($t['tanggal'])); ?></p>
                    <?php endforeach; ?>
                    <a href="<?= base_url('admin/produk'); ?>" class="badge badge-dark">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
</div>