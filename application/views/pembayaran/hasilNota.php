<div class="judul">
    <div class="row">
        <div class="col-md">
            <img src="<?= base_url('assets/img/qonitaq.png') ?>" alt="logo Qonita">
        </div>
        <div class="col-md">
            <h1>Nota Pembelian</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm">
        <h5>Keterangan Pembelian</h5>
        <h6>Pemesanan Ke - <strong><?= $pembelian['id_pembelian']; ?></strong> </h6>
        <h6>Tanggal Pembelian <?= date('d F Y', strtotime($pembelian['tgl_pembelian'])); ?></h6>
        <p>Kode Pembelian = <strong><?= $pembelian['kode_pembelian']; ?></strong></p>
    </div>
    <div class="col-sm">
        <h5>Keterangan Pelanggan</h5>
        <h6>Nama : <?= $user['name']; ?></h6>
        <h6>E-mail : <?= $user['email']; ?></h6>
        <h6>No. Telepon : <?= $user['no_telf']; ?></h6>
    </div>
</div>

<div class="table-responsive">
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Paket</th>
                <th>Tanggal Berangkat</th>
                <th>Jumlah Tiket</th>
                <th>Harga Paket</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 1; ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $detailpembelian['namaPaket']; ?></td>
                <td><?= date('d M Y', strtotime($detailpembelian['tglBerangkat'])); ?></td>
                <td><?= $detailpembelian['jumbel']; ?> Tiket</td>
                <td>Rp. <?= number_format($detailpembelian['hargaPaket']); ?></td>
            </tr>
            <?php $nomor++; ?>

            <tr>
                <th colspan="4">Total Pemesanan</th>
                <th>Rp. <?= number_format($pembelian['total_pembelian']); ?></th>
            </tr>
        </tbody>
    </table>
</div>

<div class="row">
    <?php $nomor = 1; ?>
    <?php foreach ($detailpembelian2 as $dp) : ?>
        <div class="col-md">
            <div class="penumpang my-3 mx-3">
                <h5>Keterangan Penumpang</h5>
                <h6>Penumpang Ke - : <?= $nomor; ?> </h6>
                <h6>Nama Penumpang : <?= $dp['namaPenumpang']; ?></h6>
                <h6>NIK Penumpang : <?= $dp['nikPenumpang']; ?></h6>
                <h6>No. Telepon Penumpang : <?= $dp['telfPenumpang']; ?></h6>
            </div>
        </div>
        <?php $nomor++; ?>
    <?php endforeach; ?>
</div>