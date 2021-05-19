<div class="container mt-3">

    <h3><?= $tittle; ?></h3>
    <hr>

    <section class="section-one my-5">
        <div class="row">
            <div class="col-md">
                <h5>Nama Penyetor : <?= $pembayaran['nama_penyetor']; ?></h5>
                <h5>Bank : <?= $pembayaran['bank']; ?></h5>
                <h5>Jumlah Pembayaran : Rp. <?= number_format($pembayaran['jumlah_pembayaran']); ?></h5>
                <h5>Tanggal Pembayaran : <?= date('d F Y', strtotime($pembayaran['tanggal_pembayaran'])); ?></h5>
                <a href="<?= base_url('user/riwayatTransaksi') ?>" class="btn btn-success button">Kembali</a>
            </div>

            <div class="col-md">
                <h5>Bukti Pembayaran</h5>
                <div class="card" style="width: 18rem;">
                    <a href="<?= base_url('assets/img/pembayaran/') . $pembayaran['bukti_pembayaran'] ?>" target="_blank">
                        <img src="<?= base_url('assets/img/pembayaran/') . $pembayaran['bukti_pembayaran'] ?>" class="img-fluid img-thumbnail" alt="Bukti Pembayaran">
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>