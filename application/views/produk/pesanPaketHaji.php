<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4> Paket <?= $produk['name']; ?> </h4>
    <h3><?= $produk['nama']; ?></h3>

    <section class="section-one">

        <div class="container">

            <div class="isi">

                <div class="row my-5">

                    <div class="col-md-4">
                        <a href="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" target="_blank">
                            <img src="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" class="d-block w-100 img">
                        </a>
                    </div>

                    <div class="col-md-6 mt-3">

                        <h4>Nama Paket : <?= $produk['nama']; ?></h4>
                        <h4>Tiket Perjalanan Tersedia : <?= $produk['stok']; ?> Tiket</h4>
                        <h4>Harga Paket Perjalanan : Rp. <?= number_format($produk['harga']); ?></h4>

                        <form method="post" action="">

                            <div class="form-group mt-3">
                                <label for="jumbel">Masukkan Jumlah Beli Tiket</label>
                                <input type="number" class="form-control" name="jumbel" id="jumbel" placeholder="Jumlah Beli Tiket">
                                <?= form_error('jumbel', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal Perjalanan</label>
                                <div>
                                    <select class="custom-select mr-sm-2" id="tanggal" name="tanggal">
                                        <option value="" selected>Hari-Bulan-Tahun</option>
                                        <?php foreach ($tanggal as $t) : ?>
                                            <option value="<?= $t['id_tanggalberangkat'] ?>"><?= date('d F Y', strtotime($t['tanggal'])) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Beli Tiket</button>
                                <a href="<?= base_url('produk/haji') ?>" class="btn btn-warning button">Kembali</a>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

<!-- login modal -->
<div class="modal fade" id="masukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Qonita Travel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('beranda/userLogin'); ?>">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <a href="<?= base_url('beranda/daftar'); ?>" class="badge badge-info">Daftar Member</a> |
                <a href="<?= base_url('beranda/lupaPassword'); ?>" class="badge badge-warning">Lupa Password?</a>
            </div>
        </div>
    </div>
</div>