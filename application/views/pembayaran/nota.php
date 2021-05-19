<?php


if ($_SESSION['id_user'] != $user['id_user']) {

    $this->session->set_flashdata('message', '<script> alert("Error ID Tidak Sama") </script>');
    redirect('user/riwayatTransaksi');
    exit();
}

?>

<?= $this->session->flashdata('message'); ?>
<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4>Nota Pemesanan Paket</h4>
    <hr>

    <section class="section-one">

        <div class="container">

            <div class="isi mt-5">
                <div class="row mt-3">
                    <div class="col-md">
                        <div class="alert alert-primary" role="alert">
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
                        </div>
                    </div>
                </div>

                <div class="table-responsive-md">
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Tanggal Berangkat</th>
                            <th>Jumlah Tiket</th>
                            <th>Harga Paket</th>
                        </tr>

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

                <div class="row">
                    <div class="col-md">
                        <div class="alert alert-dark" role="alert">
                            <h5>Silahkan Melakukan Pembayaran Ke</h5>
                            <p>Membayar DP (uang muka) sebesar minimal <strong>Rp. 5.000.000</strong> ke rekening Qonita Tour & Travel.</p>
                            <p>Cetak bukti pembayaran.</p>
                            <p>Konfirmasi pemesanan anda dengan membawa bukti pembayaran ke kantor Qonita Tour & Travel (Jl. Kapitan III. No. 54 Sukatani, Depok. 16454. Indonesia).
                            </p>
                            <div class="row mt-3">
                                <div class="col-sm">
                                    <h5><strong>BNI</strong></h5>
                                    <p>A/N PT. QONITA ZIKRA SEMESTA</p>
                                    <ul>
                                        <li>BNI IDR: 044-756-2019</li>
                                        <li>BNI USD: 044 756 2086</li>
                                    </ul>
                                </div>
                                <div class="col-sm">
                                    <h5><strong>Mandiri</strong></h5>
                                    <p>A/N PT. QONITA ZIKRA SEMESTA</p>
                                    <ul>
                                        <li>Mandiri KCP Cisalak IDR : 157-000-9999-005</li>
                                        <li>Mandiri KCP Cisalak USD: 157-000-3988-798</li>
                                    </ul>
                                </div>
                                <div class="col-sm">
                                    <h5><strong>BCA</strong></h5>
                                    <p>A/N Hj. Gebby Konita D. SE</p>
                                    <ul>
                                        <li>BCA KCP Cimanggis IDR: 005-1756745</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="<?= base_url('user/ketentuanpembayaran'); ?>">Cek Ketentuan Pembayaran</a>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 button">
                    <div class="col-md">
                        <div class="col-md">
                            <a href="<?= base_url('user/riwayatTransaksi') ?>" class="btn btn-success button">Riwayat Pemesanan</a>
                            <!-- <a href="<?= base_url('produk/cetakNota') ?>" class="btn btn-info button">Cetak Nota</a> -->
                            <a href="<?= base_url('produk/cetakNota/') . $detailpembelian['id_pembelian'] ?>" target="_blank" class="btn btn-info button">Cetak Nota</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

</div>