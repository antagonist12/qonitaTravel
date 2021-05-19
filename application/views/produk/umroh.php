<?= $this->session->flashdata('message'); ?>

<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4> Paket Umroh </h4>

    <section class="section-one">

        <div class="cotainer">
            <div class="isi">
                <div class="row my-3">
                    <?php foreach ($produk as $umroh) : ?>
                        <div class="col-md-4">
                            <a href="<?= base_url('assets/img/produk/'); ?><?= $umroh['gambar']; ?>" target="_blank">
                                <img src="<?= base_url('assets/img/produk/'); ?><?= $umroh['gambar']; ?>" class="img-fluid img-thumbnail">
                            </a>
                            <div class="label mt-3 text-center">
                                <h5><?= $umroh['nama']; ?></h5>
                                <a href="<?= base_url('produk/detailPaketUmroh/') . $umroh['id_produk']; ?>" class="btn btn-primary button">Detail Paket</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </section>

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