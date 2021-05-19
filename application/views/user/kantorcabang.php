<div class="container mt-3">

    <h3><?= $tittle; ?></h3>
    <hr>
    <?= $this->session->flashdata('message'); ?>

    <div class="row text-justify my-5 mx-5 justify-content-center">
        <div class="col-md-7">
            <h2>Makasar</h2>
            <ul class="list-group">
                <li><strong>Pondok Nurul Eski</strong></li>
                <span>Jl. Printis Kemerdekaan No. 07 Tamalanrea Indah.</span>
            </ul>
            <br>
            <h2>Bangka</h2>
            <ul class="list-group">
                <li><strong>Yusmeri</strong></li>
                <span>Jl. Kalamaya II, Pangkal Pinang-Babel.</span>
            </ul>
            <br>
            <h2>Yogyakarta</h2>
            <ul class="list-group">
                <li><strong>Altech Ticketing</strong></li>
                <span>Jl. Laksda Adi Sucipto No. 55.</span>
                <li><strong>Tiar Prayoga</strong></li>
                <span>Jl. Turonggo No. 450 , Jaranan Bangun Tapon-Bantul.</span>
            </ul>
            <br>
            <h2>Surabaya</h2>
            <ul class="list-group">
                <li><strong>Sri Endah Nurhayati</strong></li>
                <span>Jl. Mulyo Sari Utara XI No. 18.</span>
                <li><strong>drg. Lila Mutandir</strong></li>
                <span>Jl. Semolowaru Tengah, gg.III No. 12 Semolowaru-Sukolilo.</span>
            </ul>
            <br>
            <h2>Sukabumi</h2>
            <ul class="list-group">
                <li><strong>Ust. Dadang Suherman</strong></li>
                <span>Jl. Sudajaya No.7 , Sukajaya.</span>
            </ul>
        </div>

        <div class="col-md-4">
            <h2>Bekasi</h2>
            <ul class="list-group">
                <li><strong>Mitta/Nani</strong></li>
                <span>Taman Galaxi Timur D28.</span>
            </ul>
            <br>
            <h2>Palembang</h2>
            <ul class="list-group">
                <li><strong>Khairunisyah</strong></li>
                <span>Jl. Demang Lebar Daun No. 49.</span>
            </ul>
            <br>
            <h2>Jakarta</h2>
            <ul class="list-group">
                <li><strong>H. Syarifuddin/ Hj. Nurhayati</strong></li>
                <span>Komplek Kostrad Jl. Darma Putra 3 No. 21 Kebayoran Lama Selatan-Jaksel.</span>
            </ul>
            <br>
            <h2>Bali</h2>
            <ul class="list-group">
                <li><strong>Sukardono</strong></li>
                <span>Jl. Jendral Sudirman, No. 18, Seririt-Singaraja.</span>
            </ul>
            <br>
            <h2>Cakung</h2>
            <ul class="list-group">
                <li><strong>Iskandar JPM</strong></li>
                <span>Jl. Raya Cakung KM. 21 No. 115 , Rawa Terate.</span>
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