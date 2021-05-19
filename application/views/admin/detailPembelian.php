<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="row">
        <div class="col-md mt-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Keterangan Pembeli</h5>
                    <p class="card-text">Nama : <?= $detailPembeli['name']; ?></p>
                    <h6 class="card-subtitle mb-2 text-muted">Email : <?= $detailPembeli['email']; ?></h6>
                    <p class="card-text">No. Telepon : <?= $detailPembeli['no_telf']; ?></p>
                    <p class="card-text">Alamat : <?= $detailPembeli['alamat']; ?></p>
                    <p class="card-text">Kode Pembelian : <strong><?= $detailPembelian['kode_pembelian']; ?></strong></p>
                </div>
            </div>
            <a href="<?= base_url('admin/lapTransaksi') ?>" class="btn btn-info mt-3">Kembali</a>
        </div>
    </div>



    <div class="table-resposinve">
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Jumlah Pembayaran</th>
                    <th scope="col">Jumlah Beli</th>
                    <th scope="col">Harga Paket</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $detailPembelian['namaPaket']; ?></td>
                    <td>Rp. <?= number_format($jumlahBayar['jumlah_pembayaran']); ?></td>
                    <td><?= $detailPembelian['jumbel'] ?> Tiket</td>
                    <td>Rp. <?= number_format($detailPembelian['hargaPaket']); ?></td>
                </tr>
                <?php $i++; ?>
                <tr>
                    <td colspan="4">Total Pembelian</td>
                    <td>Rp. <?= number_format($detailPembelian['total_pembelian']); ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-md mt-3">
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <h5 class="card-title">Keterangan Penumpang</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Tanggal Berangkat : <?= date('d F Y', strtotime($detailPembelian['tglBerangkat'])); ?></h6>
                    <?php $i = 1; ?>
                    <?php foreach ($detailPembelian2 as $dp2) : ?>
                        <p class="card-text">Penumpang Ke - : <?= $i; ?></p>
                        <p class="card-text">Nama penumpang : <?= $dp2['namaPenumpang']; ?></p>
                        <p class="card-text">NIK Penumpang : <?= $dp2['nikPenumpang']; ?></p>
                        <p class="card-text">No. Telepon Penumpang : <?= $dp2['telfPenumpang']; ?></p>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->