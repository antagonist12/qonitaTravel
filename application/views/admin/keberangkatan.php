<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('admin/tambahTanggalProduk'); ?>" class="btn btn-success mb-3">Tambah Tanggal Keberangkatan</a>

            <table class="table table-hover table-responsive-lg text-center justify-content-center">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Paket</th>
                        <th scope="col">Keberangkatan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tanggal as $t) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= ucfirst($t['nama']); ?></td>
                            <td><?= date('d F Y', strtotime($t['tanggal'])); ?></td>
                            <td>
                                <a href="<?= base_url('admin/ubahTanggal/') . $t['id_tanggalberangkat']; ?>" class="badge badge-primary">Ubah Tanggal Keberangkatan</a>
                                <a href="<?= base_url('admin/hapusTanggal/') . $t['id_tanggalberangkat']; ?>" onclick="return confirm('Yakin Ingin Di Hapus ?');" class="badge badge-danger">Hapus Tanggal</a>
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
</div>