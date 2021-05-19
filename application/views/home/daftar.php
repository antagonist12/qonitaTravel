<?= $this->session->flashdata('message'); ?>

<div class="container my-3">

    <h3>Qonita Tour & Travel</h3>
    <h4> Daftar Member </h4>
    <hr>

    <div class="daftar mt-4">
        <form method="post" action="<?= base_url('beranda/daftar'); ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email..." autocomplete="off">
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password..." autocomplete="off">
                        <?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password2">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Ulangi Password..." autocomplete="off">
                        <?= form_error('password2', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" autocomplete="off">
                        <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="telf">No. Telfon</label>
                        <input type="text" class="form-control" name="telf" id="telf" placeholder="Masukkan No. Telfon" autocomplete="off">
                        <?= form_error('telf', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Lengkap" cols="10" rows="3"></textarea>
                        <?= form_error('alamat', '<small class="text-danger pl-1">', '</small>'); ?>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <a href="<?= base_url('beranda') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</div>

<!-- Login Modal -->
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
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email..." autocomplete="off">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password..." autocomplete="off">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
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