<div class="container mt-3">

    <h3><?= $tittle; ?></h3>
    <hr>
    <?= $this->session->flashdata('message'); ?>

    <div class="row text-justify my-3">
        <div class="col-md-6">
            <ul class="mt-4">
                <li>Pendaftaran Umrah Reguler/Plus/Ramadhan dapat dilakukan paling lambat 45 hari sebelum jadwal keberangkatan atau selama kuota masih tersedia, dan pendaftaran dapat ditutup sewaktu-waktu bila kuota sudah penuh.</li>
                <br>
                <li>Pelunasan pembayaran Umrah Reguler/Plus/Ramadhan dan penyerahan kelengkapan dokumen dilakukan paling lambat 45 hari sebelum jadwal keberangkatan.</li>
                <br>
                <li>Apabila calon jamaah membatalkan dan/ atau mengundurkan diri dan/ atau melakukan pergantian nama calon jamaah dikarenakan sakit atau sebab lainnya sebelum pelunasan, maka akan dikenakan biaya administrasi 10% dari uang muka (DP). Apabila calon jamaah membatalkan dan/ atau mengundurkan diri, dan/ atau melakukan pergantian nama calon jamaah dikarenakan sakit atau sebab lainnya setelah melakukan pembayaran pelunasan atau selambat-lambatnya 20 hari sebelum jadwal keberangkatan, maka dikenakan biaya administrasi 10% dari harga Paket yang diambil/ dipilih.</li>
                <br>
                <li>Calon jamaah yang sudah berusia lanjut atau diatas usia 60 tahun, agar didampingi pihak keluarga dan apabila tidak didampingi pihak keluarga, maka wajib melampirkan surat pernyataan sehat dan ijin berangkat dari keluarga.</li>
                <br>
                <li>Calon jamaah wanita yang menikah dan masih berusia dibawah 45 tahun harus melampirkan surat izin suami bila berangkat umrah tanpa didampingi suami.</li>
                <br>
                <li>Bagi jamaah yang menyertakan diri sebagai peserta Asuransi Perjalanan maka apabila sakit dan/atau meninggal dunia selama perjalanan umrah maka segala biaya yang timbul akibat kejadian tersebut ditanggung pihak Asuransi.</li>
                <br>
                <li>Calon jamaah wajib tunduk dan taat terhadap segala Syarat dan Ketentuan dan petunjuk yang ditentukan ole PT. Qonita Zikra Semesta (Qonita Tour & Travel).</li>
            </ul>
        </div>
        <div class="col-md-6">
            <ul>
                <li>
                    A. Bagi calon jamaah yang meninggal dunia, maka pergantian nama calon jamaah tidak dikenakan biaya dengan syarat yang menggantikan adalah keluarga sedarah dan nama pengganti tersebut tercatat didalam Kartu Keluarga almarhum/ alhamarhumah.
                    <br>
                    B. Bagi Calon Jamaah yang Meninggal Dunia apabila yang menggantikan nama calon jamaah adalah kerabat / orang lain yang tidak dalam 1 (satu) Kartu Keluarga dengan Almarhum/ Almarhumah, maka akan dikenakan biaya administrasi sebesar 10% dari harga Paket yang diambil/dipilih.
                </li>
                <br>
                <li>
                    Dalam hal pengajuan VISA, sepenuhnya menjadi kewenangan pihak Kedutaan Besar Arab Saudi. Jika terjadi VISA yang tidak disetujui oleh Kedutaan Besar Arab Saudi dan calon jamaah tersebut ingin tetap diberangkatkan pada jadwal berikutnya, maka segala biaya yang timbul diluar harga Umrah Reguler/Plus/Ramadhan yang diambil, ditanggung oleh calon jamaah. Apabila ada calon jamaah dari salah satu rombongan yang VISA nya tidak disetujui oleh Kedutaan Besar Arab Saudi, maka calon jamaah lain dalam rombongan tersebut yang sudah mendapatkan VISA harus tetap berangkat sesuai jadwal yang sudah ditentukan.
                </li>
                <br>
                <li>
                    Setiap calon jamaah dapat mengalami penundaan atau perubahan jadwal keberangkatan dikarenakan masalah teknis sebanyak-banyaknya 3 (tiga) kali atau selambat-lambatnya 2 (dua) bulan perubahan atau penundaan. Segala biaya domestik atau biaya pribadi yang timbul diluar Paket Umroh Reguler/ Plus/ Ramadhan akibat dari perubahan maupun penundaan tersebut (bila ada), menjadi tanggungan calon jamaah seluruhnya.
                </li>
                <br>
                <li>
                    Jika dalam keadaan Force Majure seperti karena bencana alam, kerusuhan serta suasana mencekam baik di negara asal, negara transit maupun di negara tujuan, maka seluruh biaya tambahan ditanggung oleh Jamaah. Dalam kondisi Force Majure, pihak PT. tidak bertanggung jawab dalam hal pengembalian biaya-biaya yang sudah dikeluarkan, termasuk biaya pengurusan VISA, Tiket, Akomodasi dan biaya lainnya.
                </li>
                <br>
                <li>
                    Syarat ketentuan Umrah Reguler/ Plus/ Ramadhan ini berlaku untuk semua calon jamaah dan tidak terkecuali. Setiap calon jamaah Umrah Reguler/ Plus/ Ramadhan yang sudah mengisi dan menanda-tangani formulir pendaftaran dianggap sudah mengerti dan menyetujui syarat dan ketentuan Umrah Reguler/ Plus/ Ramadhan.
                </li>
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