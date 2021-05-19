<div class="container mt-3">

    <h3><?= $tittle; ?></h3>
    <?= $this->session->flashdata('message'); ?>

    <div class="row justify-content-center my-3">
        <div class="col-md mt-5">
            <h3>Cara Pembayaran</h3>
            <hr>
            <ul class="list-group">
                <li>Silahkan lengkapi data diri anda di pendaftaran</li>
                <li>Pilih Paket Perjalanan yang dikehendaki</li>
                <li>Membayar DP (uang muka) sebesar minimal <strong>Rp. 5.000.000</strong> ke rekening Qonita Tour & Travel</li>
                <li>Cetak bukti pembayaran atau nota</li>
                <li>Konfirmasi pemesanan anda dengan membawa bukti pembayaran ke kantor Qonita Tour & Travel (Jl. Kapitan III. No. 54 Sukatani, Depok. 16454. Indonesia)</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md mt-5">
            <h3>Segala Bentuk Pembayaran Harus Dilakukan Melalui Transfer Rekening</h3>
            <hr>
            <ul class="list-group">
                <li>A/N PT. QONITA ZIKRA SEMESTA</li>
                <span>BNI IDR: 044-756-2019</span>
                <span>BNI USD: 044 756 2086</span>
                <li>A/N PT. QONITA ZIKRA SEMESTA</li>
                <span>Mandiri KCP Cisalak IDR : 157-000-9999-005</span>
                <span>Mandiri KCP Cisalak USD: 157-000-3988-798</span>
                <li>A/N Hj. Gebby Konita D. SE </li>
                <span>BCA KCP Cimanggis IDR: 005-1756745</span>
                <li>Qonita Tour & Travel tidak menerima "konversi" antara mata uang USD dengan rupiah atau sebaliknya.</li>
                <li>DP untuk setiap paket minimal <strong>Rp. 5.000.000</strong></li>
            </ul>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md mt-5">
            <h3>Pembatalan Keberangkatan Haji & Umroh Dan Tour</h3>
            <hr>
            <ul class="list-group">
                <li>DP tidak mengikat harga dan tidak bisa dikembalikan</li>
                <li>Pembatalan 3 minggu sebelum keberangkatan dikembalikan 75% dari harga paket setelah dikurangi DP</li>
                <li>Pembatalan 2 minggu sebelum keberangkatan dikembalikan 50% dari harga paket setelah dikurangi DP</li>
                <li>Pembatalan 1 minggu sebelum keberangkatan dikembalikan 25% dari harga paket setelah dikurangi DP</li>
                <li>Bus VIP selama ibadah Haji</li>
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