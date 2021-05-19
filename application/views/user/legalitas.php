<div class="container mt-3">

    <h3><?= $tittle; ?></h3>
    <hr>
    <?= $this->session->flashdata('message'); ?>

    <div class="row justify-content-center my-3">
        <div class="col-md">
            <ul class="list-group">
                <li class="list-group-item">Nama : <strong> Qonita Tour & Travel
                    </strong></li>
                <li class="list-group-item">SK Umroh : <strong> D/853/2011</strong></li>
                <li class="list-group-item">SK Haji : <strong> D/496/2012</strong></li>
                <li class="list-group-item">Alamat : <strong> Jl. Kapitan III. No. 54 Sukatani, Depok. 16454. Indonesia</strong></li>
                <li class="list-group-item">Telp/Fax : <strong> +6221 87 44620</strong></li>
                <li class="list-group-item">HP : <strong> +62812 946 2617</strong></li>
                <li class="list-group-item">Email : <strong> qonitaumroh@gmail.com</strong></li>
                <li class="list-group-item">Website : <strong> www.qonita-tavel.com</strong></li>
            </ul>
        </div>
    </div>

</div>

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