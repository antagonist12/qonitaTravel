<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-md-11">
            <form action="<?= base_url('admin/gantiPassword') ?>" method="post">
                <div class="form-group row">
                    <label for="passwordLama" class="col-sm-2 col-form-label">Password Sekarang</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="passwordLama" name="passwordLama">
                        <?= form_error('passwordLama', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passwordBaru" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="passwordBaru" name="passwordBaru" placeholder="Masukkan Password Baru">
                        <?= form_error('passwordBaru', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passwordBaru2" class="col-sm-2 col-form-label">Ulangi Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="passwordBaru2" name="passwordBaru2" placeholder="Ulangi Password Baru">
                        <?= form_error('passwordBaru2', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Change Password</button>
                        <a href="<?= base_url('admin/profile') ?>" class="btn btn-warning">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->