<div class="judul">
    <div class="row">
        <div class="col-md">
            <img src="<?= base_url('assets/img/qonitaq.png') ?>" alt="logo Qonita">
        </div>
        <div class="col-md">
            <h1>Laporan Pemesanan Paket</h1>
        </div>
    </div>
</div>



<div class="table-responsive">
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tgl. Pembelian</th>
                <th>Nama Pembeli</th>
                <th>Nama Paket</th>
                <th>Tgl. Keberangkatan</th>
                <th>Total Pembelian Tiket</th>
                <th>Total Pembayaran</th>
                <th>Status Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($laporan as $l) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= date('d F Y', strtotime($l['tgl_pembelian'])); ?></td>
                    <td><?= $l['name']; ?></td>
                    <td><?= $l['namaPaket']; ?></td>
                    <td><?= date('d F Y', strtotime($l['tglBerangkat'])); ?></td>
                    <td><?= $l['jumbel']; ?></td>
                    <td><?= "Rp. " . number_format($l['total_pembelian']) . ",-"; ?></td>
                    <td><?= $l['status_pembelian']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>