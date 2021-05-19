<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="row">
        <div class="col-lg-7">

            <?= $this->session->flashdata('message'); ?>

            <form method="post" action="<?= base_url('admin/tambahTanggalProduk') ?>" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label for="produk">Paket Tersedia</label>
                            <div>
                                <select class="custom-select mr-sm-2" id="produk" name="produk">
                                    <option value="" selected>Pilih Paket...</option>
                                    <?php foreach ($produk as $pro) : ?>
                                        <option value="<?= $pro['id_produk'] ?>"><?= $pro['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('produk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Keberangkatan</label>
                    <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal Paket" name="tanggal">
                    <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <button type="submit" class="btn btn-success" name="tambah">Tambah Tanggal</button>
                <a href="<?= base_url('admin/keberangkatan') ?>" class="btn btn-warning">Kembali</a>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
</div>