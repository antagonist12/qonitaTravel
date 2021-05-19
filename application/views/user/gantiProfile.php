<div class="container mt-3">
    <h3><?= $tittle; ?></h3>
    <hr>
    <?= $this->session->flashdata('message'); ?>


    <div class="row my-3">
        <div class="col-md">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input readonly type="email" class="form-control" name="email" id="email" value="<?= $user['email']; ?>">
                            <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $user['name']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="telf">No. Telfon</label>
                            <input type="text" class="form-control" name="telf" id="telf" value="<?= $user['no_telf']; ?>">
                            <?= form_error('telf', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" value="<?= $user['alamat']; ?>" cols="10" rows="3"></textarea>
                            <?= form_error('alamat', '<small class="text-danger pl-1">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="foto" class="col-sm-2 col-form-label">Profile Picture</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label for=" gambar" class="custom-file-label">Pilih Gambar</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row my-2 mx-3">
                                    <div class="col-sm-6">
                                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ganti Profile</button>
                <a href="<?= base_url('user/profile') ?>" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</div>