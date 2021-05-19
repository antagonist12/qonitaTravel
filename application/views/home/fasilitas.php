<?= $this->session->flashdata('message'); ?>

<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4> Fasilitas </h4>

    <section class="section-one text-center">
        <div class="container mt-5">
            <div class="mx-3 my-3">
                <h3>Hotel - Hotel <i class="fas fa-star"></i>4</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?= base_url('assets/img/hotel/4_1.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/4_1.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Al Haram Hotel</p>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('assets/img/hotel/4_2.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/4_2.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Azka Al Safa Hotel</h4>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <a href="<?= base_url('assets/img/hotel/4_3.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/4_3.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Rayyana Ajyad Hotel</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('assets/img/hotel/4_4.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/4_4.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Dar Eiman Al Manar Hotel</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-one text-center">
        <div class="container mt-5">
            <div class="mx-3 my-3">
                <h3>Hotel - Hotel <i class="fas fa-star"></i>5</h3>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?= base_url('assets/img/hotel/5_1.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/5_1.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Dallah Taibah Hotel</p>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('assets/img/hotel/5_3.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/5_3.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Pullman Zamzam Hotel</h4>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('assets/img/hotel/5_2.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/5_2.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Dar Royal Inn</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?= base_url('assets/img/hotel/5_4.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/5_4.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Dar Royal Al Eiman Hotel</p>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('assets/img/hotel/5_5.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/5_5.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Royal Noqbah Hotel</h4>
                    </div>
                    <div class="col-md-4">
                        <a href="<?= base_url('assets/img/hotel/5_6.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/hotel/5_6.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
                        <h4>Swissotel Hotel</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

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