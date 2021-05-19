<?= $this->session->flashdata('message'); ?>

<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4> Galeri </h4>
    <hr>

    <div class="row">

        <div class="col-md-6 mb-2">
            <a href="<?= base_url('assets/img/gallery/4.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/gallery/4.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
        </div>

        <div class="col-md-6 mb-2">
            <a href="<?= base_url('assets/img/gallery/2.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/gallery/2.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-2">
            <a href="<?= base_url('assets/img/gallery/1.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/gallery/1.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
        </div>

        <div class="col-md-4 mb-2">
            <a href="<?= base_url('assets/img/gallery/0.jpeg'); ?>" target="_blank"><img src="<?= base_url('assets/img/gallery/0.jpeg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
        </div>

        <div class="col-md-4 mb-2">
            <a href="<?= base_url('assets/img/gallery/5.jpg'); ?>" target="_blank"><img src="<?= base_url('assets/img/gallery/5.jpg'); ?>" class="jumbo figure-img img-fluid rounded"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hGKcZbzL_jU"></iframe>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZF7eHdwDL-M"></iframe>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cUCB73Ipfsw"></iframe>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/m0gIrSjhL4Q"></iframe>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jRJK6GoocN4"></iframe>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/spDmVx1l2fI"></iframe>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DF2qKfoGH0E"></iframe>
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



</div>