<div class="container mt-3">

    <h3><?= $tittle; ?></h3>
    <hr>
    <?= $this->session->flashdata('message'); ?>
    <h3><?= $user['name']; ?></h3>
    <h4>Member Dari : <?= date('d F Y', strtotime($user['date_created'])); ?></h4>

    <div class="table-responsive-md">
        <table class="table table-hover mt-3">
            <tr>
                <th>No.</th>
                <th>Tanggal Pembelian</th>
                <th>Status Pemesanan</th>
                <th>Total Pembelian</th>
                <!-- <th>Resi Pembelian</th> -->
                <th>Aksi</th>
            </tr>
            <?php $nomor = 1; ?>
            <?php foreach ($riwayat as $r) : ?>
                <tr>
                    <td><?= $nomor; ?></td>
                    <td><?= date('d F Y', strtotime($r['tgl_pembelian'])); ?></td>
                    <td><?= $r['status_pembelian']; ?></td>
                    <td>Rp. <?= number_format($r['total_pembelian']); ?></td>
                    <!-- <td>
                            <?php if ($r['status_pembelian'] == 'Paid') : ?>
                                    <?= $r['resi_pembelian']; ?>
                            <?php elseif ($r['status_pembelian'] == 'Lunas') : ?>
                                    <?= $r['resi_pembelian']; ?>
                            <?php else : ?>
                                    <?= $r['resi_pembelian']; ?>
                            <?php endif; ?>
                        </td> -->
                    <td>
                        <a href="<?= base_url('produk/nota/') ?><?= $r['id_pembelian'] ?>" class="btn btn-info btn xs">Nota</a>
                        <?php if ($r['status_pembelian'] == 'Paid') : ?>
                            <a href="<?= base_url('produk/detailPembayaran/') ?><?= $r['id_pembelian'] ?>" class="btn btn-dark btn xs">Detail Pembayaran</a>
                        <?php elseif ($r['status_pembelian'] == 'Lunas DP') : ?>
                            <a href="<?= base_url('produk/detailPembayaran/') ?><?= $r['id_pembelian'] ?>" class="btn btn-dark btn xs">Detail Pembayaran</a>
                        <?php elseif ($r['status_pembelian'] == 'Lunas') : ?>
                            <a href="<?= base_url('produk/detailPembayaran/') ?><?= $r['id_pembelian'] ?>" class="btn btn-dark btn xs">Detail Pembayaran</a>
                        <?php elseif ($r['status_pembelian'] == 'Terjadi Kesalahan') : ?>
                            <a href="<?= base_url('produk/ubahPembayaran/') ?><?= $r['id_pembelian'] ?>" class="btn btn-warning btn xs">Ubah Pembayaran</a>
                        <?php else : ?>
                            <a href="<?= base_url('produk/pembayaran/') ?><?= $r['id_pembelian'] ?>" class="btn btn-success btn xs">Pembayaran</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php $nomor++; ?>
            <?php endforeach; ?>
        </table>
    </div>

</div>