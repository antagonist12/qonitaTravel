<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="row">
        <div class="col-lg-7">

            <?= $this->session->flashdata('message'); ?>

            <form method="post" action="" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="namaproduk">Nama Paket Produk</label>
                            <div>
                                <input type="text" class="form-control" id="namaproduk" placeholder="Masukkan Nama Paket" name="nama" value="<?= $produk['nama'] ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="form-group">
                            <label for="kategori">Kategori Produk</label>
                            <div>
                                <select class="custom-select mr-sm-2" id="kategori" name="kategori">
                                    <option value="" selected>Pilih Kategori...</option>
                                    <?php foreach ($kategori as $kat) : ?>
                                        <?php if ($kat['id_kat'] == $produk['id_kat']) : ?>
                                            <option value="<?= $kat['id_kat'] ?>" selected><?= $kat['name'] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $kat['id_kat'] ?>"><?= $kat['name'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" class="form-control" id="stok" placeholder="Masukkan Stok Tiket" name="stok" value="<?= $produk['stok'] ?>">
                            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Paket" name="harga" value="<?= $produk['harga'] ?>">
                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group row my-4">
                    <div class="col-sm-2">Gambar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/produk/') . $produk['gambar']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label for=" gambar" class="custom-file-label">Pilih Gambar</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="tambah">Ubah Paket</button>
                <a href="<?= base_url('admin/produk') ?>" class="btn btn-warning">Kembali</a>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
</div>