<div class="container mt-3">

    <h3>Qonita Tour & Travel</h3>
    <h4> Paket <?= $produk['name']; ?> </h4>
    <h3><?= $produk['nama']; ?></h3>


    <section class="section-one">

        <div class="container">
            <div class="isi">

                <div class="row mt-5 justify-content-center">
                    <div class="col-md-4 mb-3">
                        <a href="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" target="_blank">
                            <img src="<?= base_url('assets/img/produk/'); ?><?= $produk['gambar']; ?>" class="d-block w-100 img">
                        </a>
                    </div>

                    <!-- penjelasan detail tour ( berbeda setiap id ) -->
                    <!-- korea -->
                    <?php if ($produk['id_produk'] == 'PR019') : ?>
                        <div class="col-md-4 mt-3">
                            <h5>Detinasi</h5>
                            <ul>
                                <li>Incheon</li>
                                <li>Nami Islan</li>
                                <li>Mt. Sorak</li>
                                <li>Seoul City Tour</li>
                            </ul>
                            <div class="my-5 mx-5">
                                <?php if ($produk['stok'] == 0 || $tanggal['tanggal'] < date('Y-m-h')) : ?>
                                    <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                                <?php else : ?>
                                    <a href="<?= base_url('produk/pesanPaketTour/') . $produk['id_produk']; ?>" class="btn btn-primary button">Pesan Tiket</a>
                                <?php endif; ?>
                                <a href="<?= base_url('produk/tour') ?>" class="btn btn-warning button">Kembali</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5>Include</h5>
                            <ul>
                                <li>Tiket Pesawat PP Garuda</li>
                                <li>Hotel Bintang 3</li>
                                <li>Makanan Menu <span>Halal</span></li>
                                <li>Transportasi Bus</li>
                            </ul>
                        </div>

                        <!-- turki -->
                    <?php elseif ($produk['id_produk'] == 'PR020') : ?>
                        <div class="col-md-4 mt-3">
                            <h5>Akomodasi</h5>
                            <ul>
                                <li>Hotel Di Adana, <span>Golden Delux</span> </li>
                                <li>Hotel Di Cappadocia, <span>Avrasya / Dinler Nevsehir</span> </li>
                                <li>Hotel Di Pamukkale, <span>Richmond Hotel</span> </li>
                                <li>Hotel Di Kusadasi, <span>Grand Belish</span> </li>
                                <li>Hotel Di Bursa, <span>Tiara Termal</span> </li>
                                <li>Hotel Di Istanbul, <span>Riva Taksim / Lares Park Taksim</span> </li>
                            </ul>

                            <h5>Detinasi</h5>
                            <ul>
                                <li>Adana</li>
                                <li>Nigde</li>
                                <li>Cappadocia</li>
                                <li>Konya</li>
                                <li>Pamukkale</li>
                                <li>Kusadasi</li>
                                <li>Bursa</li>
                                <li>Istanbul</li>
                            </ul>

                            <div class="my-5 mx-5">
                                <?php if ($produk['stok'] == 0 || $tanggal['tanggal'] < date('Y-m-h')) : ?>
                                    <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                                <?php else : ?>
                                    <a href="<?= base_url('produk/pesanPaketTour/') . $produk['id_produk']; ?>" class="btn btn-primary button">Pesan Tiket</a>
                                <?php endif; ?>
                                <a href="<?= base_url('produk/tour') ?>" class="btn btn-warning button">Kembali</a>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <h5>Include</h5>
                            <ul>
                                <li>Ticket Inter'l dengan QR JKT-ADA/SAW-JKT</li>
                                <li>7 Malam menginap di hotel bintang 4</li>
                                <li>Semua Transfer & Slightseeing tours menggunakan bus besar dengan AC & Wi-fi</li>
                                <li>Semua makanan sesuai dengan acara tour</li>
                                <li>Guide Bahasa Indonesia</li>
                                <li>Semua Ticket masuk ke museum sesuai rencana perjalanan</li>
                                <li>Visa Turkey, Tipping Hotel & Restaurant</li>
                                <li>Unlimited air mineral selama di bus</li>
                                <li>Tour Leader dari Jakarta</li>
                            </ul>

                            <h5>Exclude</h5>
                            <ul>
                                <li>Tipping TL, Guide & Driver USD 70/ orang</li>
                                <li>Travel Insurance</li>
                                <li>Pengeluaran Pribadi</li>
                                <li>Porter di Airport</li>
                                <li>Trolley Bag</li>
                            </ul>
                        </div>

                        <!-- west europe -->
                    <?php elseif ($produk['id_produk'] == 'PR021') : ?>
                        <div class="col-md-4 mt-3">
                            <h5>Akomodasi</h5>
                            <ul>
                                <li>Hotel Di Paris, <span>Kyriad Massy Paris</span> </li>
                                <li>Hotel Di Amsterdam, <span>Nh Marquette</span> </li>
                                <li>Hotel Di Frankfurt, <span>Leonardo</span> </li>
                                <li>Hotel Di Luzern, <span>Terase</span> </li>
                                <li>Hotel Di Milan, <span>IH Hotel Milano</span> </li>
                            </ul>
                            <div class="my-5 mx-5">
                                <?php if ($produk['stok'] == 0 || $tanggal['tanggal'] < date('Y-m-h')) : ?>
                                    <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                                <?php else : ?>
                                    <a href="<?= base_url('produk/pesanPaketTour/') . $produk['id_produk']; ?>" class="btn btn-primary button">Pesan Tiket</a>
                                <?php endif; ?>
                                <a href="<?= base_url('produk/tour') ?>" class="btn btn-warning button">Kembali</a>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h5>Detinasi</h5>
                            <ul>
                                <li>France</li>
                                <li>Belgium</li>
                                <li>Holland</li>
                                <li>Germany</li>
                                <li>Switzerland</li>
                                <li>Italy</li>
                            </ul>
                        </div>

                        <div class="col-md mt-3">
                            <h4>Rencana Perjalanan</h4>
                            <hr>
                            <table class="table table-sm table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>Hari Ke-</th>
                                        <th>Kegiatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Jakarta - Abu Dhabi</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Abu Dhabi - Paris</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Paris Full Day Tour</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Paris - Brussel - Amsterdam</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Amsterdam Full Day Tour</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Amsterdam - Cologne - Frankfurt</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Frankfurt- Luzern</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Switzerland - Mt. Titlis - Milan</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Milan - Airport</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Abu Dhabi - Jakarta</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php elseif ($produk['id_produk'] == 'PR022') : ?>
                        <div class="col-md-4 mt-3">
                            <h5>Detinasi</h5>
                            <ul>
                                <li>Morocco </li>
                                <li>Spain </li>
                            </ul>
                            <div class="my-5 mx-5">
                                <?php if ($produk['stok'] == 0 || $tanggal['tanggal'] < date('Y-m-h')) : ?>
                                    <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                                <?php else : ?>
                                    <a href="<?= base_url('produk/pesanPaketTour/') . $produk['id_produk']; ?>" class="btn btn-primary button">Pesan Tiket</a>
                                <?php endif; ?>
                                <a href="<?= base_url('produk/tour') ?>" class="btn btn-warning button">Kembali</a>
                            </div>
                        </div>

                    <?php elseif ($produk['id_produk'] == 'PR023') : ?>
                        <div class="col-md-4 mt-3">
                            <h5>Detinasi</h5>
                            <ul>
                                <li>Jordan </li>
                                <li>Jerusalem </li>
                                <li>Cairo </li>
                            </ul>
                            <div class="my-5 mx-5">
                                <?php if ($produk['stok'] == 0 || $tanggal['tanggal'] < date('Y-m-h')) : ?>
                                    <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                                <?php else : ?>
                                    <a href="<?= base_url('produk/pesanPaketTour/') . $produk['id_produk']; ?>" class="btn btn-primary button">Pesan Tiket</a>
                                <?php endif; ?>
                                <a href="<?= base_url('produk/tour') ?>" class="btn btn-warning button">Kembali</a>
                            </div>
                        </div>

                    <?php elseif ($produk['id_produk'] == 'PR025') : ?>
                        <div class="col-md-4 mt-3">
                            <h5>Detinasi</h5>
                            <ul>
                                <li>Tokyo </li>
                                <li>Mt. Fuji </li>
                                <li>Nagoya </li>
                                <li>Kyoto </li>
                                <li>Osaka </li>
                            </ul>
                            <div class="my-5 mx-5">
                                <?php if ($produk['stok'] == 0 || $tanggal['tanggal'] < date('Y-m-h')) : ?>
                                    <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                                <?php else : ?>
                                    <a href="<?= base_url('produk/pesanPaketTour/') . $produk['id_produk']; ?>" class="btn btn-primary button">Pesan Tiket</a>
                                <?php endif; ?>
                                <a href="<?= base_url('produk/tour') ?>" class="btn btn-warning button">Kembali</a>
                            </div>
                        </div>

                    <?php else : ?>
                        <div class="col-md-4 mt-3">
                            <div class="my-5 mx-5">
                                <?php if ($produk['stok'] == 0 || $tanggal['tanggal'] < date('Y-m-h')) : ?>
                                    <a href="" class="btn btn-danger button" name="pesan">Tiket Habis</a>
                                <?php else : ?>
                                    <a href="<?= base_url('produk/pesanPaketTour/') . $produk['id_produk']; ?>" class="btn btn-primary button">Pesan Tiket</a>
                                <?php endif; ?>
                                <a href="<?= base_url('produk/tour') ?>" class="btn btn-warning button">Kembali</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>


                <!-- fasilitas dari paket-paket tour dibedakan dari idnya -->
                <?php if ($produk['id_produk'] == 'PR020') : ?>
                    <div class="row mt-5">
                        <div class="col-md">
                            <h4>Fasilitas Paket</h4>
                            <hr>

                            <div class="row">
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <img src="<?= base_url('assets/img/partner/qatar-airways-logo-preview.png') ?>" alt="Qatar Airways" class="img-fluid img-thumbnail">
                                </div>

                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/golden_delux.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/golden_delux.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Golden Deluxe Hotel</small>
                                </div>

                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/avrasya hotel.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/avrasya hotel.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Avrasya Hotel</h4>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/richmond pamukkale.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/richmond pamukkale.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Richmond Pamukkale Hotel</h4>
                                </div>

                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/riva taksim.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/riva taksim.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Riva Taksim Hotel</h4>
                                </div>

                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/tiara_termal.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/tiara_termal.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Tiata Termal Hotel</small>
                                </div>

                                <div class="col-xs-3 col-md-3 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/grand belish hotel.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/grand belish hotel.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Grand Belish Hotel</small>
                                </div>
                            </div>
                        </div>

                    </div>

                <?php elseif ($produk['id_produk'] == 'PR021') : ?>
                    <div class="row mt-5">
                        <div class="col-md">
                            <h4>Fasilitas Paket</h4>
                            <hr>

                            <div class="row">
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <img src="<?= base_url('assets/img/partner/turkishAirlines.png') ?>" alt="Turkish Airlines" class="img-fluid img-thumbnail">
                                </div>

                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/kyriad_hotel.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/kyriad_hotel.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Kyriad Massy Paris Hotel</h4>
                                </div>
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/nh marquette.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/nh marquette.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>NH Marquette Hotel</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/leonardo.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/leonardo.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Leonardo Hotel</h4>
                                </div>

                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/terase hotel.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/terase hotel.jpg') ?>" alt="Al - Harram" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>Terase Hotel</h4>
                                </div>
                                <div class="col-xs-4 col-md-4 mb-3">
                                    <a href="<?= base_url('assets/img/hotel/ih hotel milano.jpg') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/hotel/ih hotel milano.jpg') ?>" alt="Dar Royal Eiman" class="img-fluid img-thumbnail">
                                    </a>
                                    <h4>IH Milano Hotel</small>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endif; ?>
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
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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