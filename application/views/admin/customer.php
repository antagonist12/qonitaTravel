<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="row">
        <div class="col-lg-12">

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Email Customer</th>
                        <th scope="col">No. Telf Customer</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($customer as $c) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= ucfirst($c['name']); ?></td>
                            <td><?= $c['email']; ?></td>
                            <td><?= $c['no_telf']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/detailCust/') . $c['id_user']; ?>" class="badge badge-info">Detail Customer</a>
                                <!-- <a href="" class="badge badge-success">Edit</a> -->
                                <a href="<?= base_url('admin/hapusCust/') . $c['id_user']; ?>" onclick="return confirm(' Yakin Ingin Di Hapus ?');" class="badge badge-danger">Hapus Customer</a>
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