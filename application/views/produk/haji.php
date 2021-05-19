<?= $this->session->flashdata('message'); ?>

<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4> Paket <?= $produk['name']; ?> </h4>
    <h3><?= $produk['nama']; ?></h3>

    <section class="section-one">

        <div class="container">
            <div class="isi">

                <div class="row mt-5 justify-content-center">

                    <div class="col-md-4">
                        <a href="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" target="_blank">
                            <img src="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" class="d-block w-100 img">
                        </a>
                    </div>

                    <div class="col-md-7">
                        <h5>Akomodasi</h5>
                        <ul>
                            <li>Hotel Di Madinah, <a href="https://www.gloria-hotels.com/">Gloria</a> </li>
                            <li>Hotel Di Mekah, <a href="https://www.pullman-zamzam-makkah.com/">Pullman</a> </li>
                            <li>Tenda VIP Di Armina</li>
                            <li>Transit Di Apartment</li>
                            <li>Bus VIP Selama Ibadah Haji</li>
                        </ul>

                        <h5>Biaya Tidak Ditanggung</h5>
                        <ul>
                            <li>Pengurusan Dokumen Perjalanan</li>
                            <li>Suntik Meningitis</li>
                            <li>Airport Handling, Asuransi & Lounge Hanya Ditanggung IDR 1.500.000 (Pengeluaran Pribadi Lainnya Diluar Tanggung Jawab Qonita)</li>
                        </ul>

                        <div class="row">
                            <div class="col-md-3 mt-4">
                                <?php if ($produk['stok'] == 0) : ?>
                                    <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                                <?php elseif ($produkTanggal['tanggal'] < date('Y-m-h')) : ?>
                                    <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                                <?php else : ?>
                                    <a href="<?= base_url('produk/pesanPaketHaji/') . $produk['id_produk']; ?>" class="btn btn-primary button" name="pesan">Pesan Tiket</a>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-3 mt-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fasilitasHaji">
                                    Fasilitas Haji
                                </button>
                            </div>

                            <div class="col-md-3 mt-4">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#persyaratanHaji">
                                    Persyaratan Haji
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5">
                    <div class="col-md">
                        <h4>Rencana Perjalanan</h4>
                        <hr>
                        <table class="table table-sm table-bordered table-hover text-center">
                            <caption>List Paket Haji</caption>
                            <thead>
                                <tr>
                                    <th scope="col">Hari Ke-</th>
                                    <th scope="col">Kegiatan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Jakarta - Jeddah - Transit</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Transit</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Transit</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Transit</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Wukuf Arafah - Muzdalifah</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Jumroh Aqobah - Towah Ifadah</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Mina</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Mina</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>Mina</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Transit</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Transit - Makkah</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Mekah</td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Mekah</td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Mekah</td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td>Mekah</td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Mekah</td>
                                </tr>
                                <tr>
                                    <th scope="row">17</th>
                                    <td>Mekah - Madinah</td>
                                </tr>
                                <tr>
                                    <th scope="row">18</th>
                                    <td>Madinah</td>
                                </tr>
                                <tr>
                                    <th scope="row">19</th>
                                    <td>Madinah</td>
                                </tr>
                                <tr>
                                    <th scope="row">20</th>
                                    <td>Madinah</td>
                                </tr>
                                <tr>
                                    <th scope="row">21</th>
                                    <td>Madinah - Jeddah - Jakarta</td>
                                </tr>
                                <tr>
                                    <th scope="row">22</th>
                                    <td>Jakarta</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md">
                        <h4>Fasilitas Paket</h4>
                        <hr>

                        <div class="row">
                            <div class="col-xs-4 col-md-4 mb-3">
                                <img src="<?= base_url('assets/img/partner/saudia.jpg') ?>" alt="Qatar Airways" class="img-fluid img-thumbnail">
                            </div>

                            <div class="col-xs-4 col-md-4 mb-3">
                                <a href="<?= base_url('assets/img/hotel/fairmont.jpg') ?>" target="_blank">
                                    <img src="<?= base_url('assets/img/hotel/fairmont.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                </a>
                                <h4>Fairmont Hotel</small>
                            </div>

                            <div class="col-xs-4 col-md-4 mb-3">
                                <a href="<?= base_url('assets/img/hotel/millenium aqeeq.jpg') ?>" target="_blank">
                                    <img src="<?= base_url('assets/img/hotel/millenium aqeeq.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                </a>
                                <h4>Millenium Al - Aqeeq Hotel</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="modal fade" id="fasilitasHaji" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fasilitas Haji</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Tas Troli Bagasi Dan Kabin</li>
                        <li class="list-group-item">Tas Paspor</li>
                        <li class="list-group-item">Tas Serbaguna</li>
                        <li class="list-group-item">Kain Ihram / Mukena Atasan Dan Bergo</li>
                        <li class="list-group-item">Kain Batik Seragam</li>
                        <li class="list-group-item">Buku Doa & Buku Panduan Perjalanan</li>
                        <li class="list-group-item">ID Card</li>
                        <li class="list-group-item">Cover Paspor</li>
                        <li class="list-group-item">Souvenir</li>
                    </ul>
                    <small>(*)Semua Fasilitas Diatas Bersifat Sementara Dan Dapat Berubah Sewaktu-waktu</small>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="persyaratanHaji" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Persyaratan Haji</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Mengisi Formulir Pendaftaran Haji</li>
                        <li class="list-group-item">Membayar DP / Uang Muka Sebesar $6000 USD</li>
                        <li class="list-group-item">Photocopy Kartu Tanda Penduduk & Kartu Keluarga Sebanyak 4 (Empat) Lembar</li>
                        <li class="list-group-item">Photocopy Paspor Sebanyak 3 (Tiga) Lembar Dengan Ketentuan Nama Minimal 3(Tiga) kata contoh : <strong>Gebby Qonita Pareira.</strong> Dan Masih Berlaku Minimal 6 Bulan Dari Tanggal Keberangkatan</li>
                        <li class="list-group-item">Pas Photo Terbaru (Latar Belakang / Background Berwarna Putih Dan Yang Wanita Harus Memakai Hijab Warna) Dengan Ukuran 4x6 Sebanyak 6 (Enam) Lembar Dan Ukuran 3x4 Sebanyak 2(Dua) Lembar</li>
                        <li class="list-group-item">Photocopy Akte Lahir Atau Buku Nikah Sebanyak 2(Dua) Lembar</li>
                        <li class="list-group-item">Surat Kesehatan</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Login Modal -->
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