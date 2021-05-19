<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <form method="post" action="">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" id="id" placeholder="Id Kategori" value="<?= $kategori['id_kat'] ?>">
                </div>

                <div class="form-group">
                    <label for="kategori">Nama Kategori</label>
                    <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Nama Kategori" value="<?= $kategori['name'] ?>" autocomplete="off">
                    <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Ubah Kategori</button>
                    <a href="<?= base_url('admin/kategori') ?>" class="btn btn-primary">Kembali</a>
                </div>
            </form>

        </div>
    </div>

    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
</div>