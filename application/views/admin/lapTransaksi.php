<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <a href="<?= base_url('admin/cetakLaporan'); ?>" class="btn btn-success mb-3">Cetak Laporan Keseluruhan</a>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Tanggal Pembelian</th>
                    <th scope="col">Status Pembelian</th>
                    <th scope="col">Total Pembelian</th>
                    <!-- penghapusan resi -->
                    <!-- <th scope="col">Resi Pembelian</th> -->
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1; ?>
                <?php foreach ($laporan as $l) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $l['name']; ?></td>
                        <td><?= $l['nama']; ?></td>
                        <td><?= date('d F Y', strtotime($l['tgl_pembelian'])); ?></td>
                        <td><?= $l['status_pembelian'] ?></td>
                        <td>Rp. <?= number_format($l['total_pembelian']); ?></td>
                        <!-- <td><?= $l['resi_pembelian']; ?></td> -->
                        <td>
                            <a href="<?= base_url('admin/detailPembelian/') . $l['id_pembelian']; ?>" class="badge badge-info">Detail Pembelian</a>

                            <?php if ($l['status_pembelian'] == 'Paid') : ?>
                                <a href="<?= base_url('admin/detailPembayaran/') . $l['id_pembelian']; ?>" class="badge badge-warning">Lihat Pembayaran</a>
                            <?php elseif ($l['status_pembelian'] == 'Lunas DP') : ?>
                                <a href="<?= base_url('admin/detailPembayaran/') . $l['id_pembelian']; ?>" class="badge badge-warning">Lihat Pembayaran</a>
                            <?php elseif ($l['status_pembelian'] == 'Lunas') : ?>
                                <a href="<?= base_url('admin/detailPembayaran/') . $l['id_pembelian']; ?>" class="badge badge-warning">Lihat Pembayaran</a>
                            <?php endif; ?>

                            <!-- <a href="" class="badge badge-success">Edit</a> -->
                            <a href="<?= base_url('admin/hapusPembelian/') . $l['id_pembelian']; ?>" onclick="return confirm('Yakin Ingin Di Hapus ?');" class="badge badge-danger">Hapus Pembelian</a>

                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->