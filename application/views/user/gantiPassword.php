<div class="container mt-3">

    <h3><?= $tittle; ?></h3>
    <hr>
    <?= $this->session->flashdata('message'); ?>

    <div class="row">
        <div class="col-md">
            <form action="<?= base_url('user/gantiPassword') ?>" method="post">
                <div class="form-group row">
                    <label for="passwordLama" class="col-sm-2 col-form-label">Password Sekarang</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passwordLama" name="passwordLama" placeholder="Masukkan Password Sekarang">
                        <?= form_error('passwordLama', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passwordBaru" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passwordBaru" name="passwordBaru" placeholder="Masukkan Password Baru">
                        <?= form_error('passwordBaru', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passwordBaru2" class="col-sm-2 col-form-label">Ulangi Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passwordBaru2" name="passwordBaru2" placeholder="Ulangi Password Baru">
                        <?= form_error('passwordBaru2', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ganti Password!</button>
                        <a href="<?= base_url('user/profile') ?>" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>