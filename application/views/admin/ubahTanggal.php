<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="row">
        <div class="col-lg-7">

            <?= $this->session->flashdata('message'); ?>
            <form method="post" action="">
                <input type="hidden" disabled class="form-control" name="produk" id="produk" placeholder="produk" value="<?= $tanggal['id_produk'] ?>" autocomplete="off">

                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Nama Paket</label>
                                <input type="text" class="form-control" placeholder="Nama produk" value="<?= $produk['nama'] ?>" autocomplete="off" disabled>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Keberangkatan</label>
                    <input type="date" class="form-control" id="tanggal" placeholder="Masukkan tanggal Paket" name="tanggal" value="<?= $tanggal['tanggal'] ?>">
                    <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>


                <button type="submit" class="btn btn-success" name="ubah">Ubah Tanggal</button>
                <a href="<?= base_url('admin/keberangkatan') ?>" class="btn btn-warning">Kembali</a>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
</div>