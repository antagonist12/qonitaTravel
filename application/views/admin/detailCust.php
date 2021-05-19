<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>


    <div class="row">

        <div class="col-lg-6">
            <!-- Content Column -->
            <div class="row justify-content-center">
                <div class="col-md-4 mx-3 my-3">
                    <img class="img-fluid" src="<?= base_url('assets/img/profile/') ?><?= $customer['image']; ?>" alt="Foto Cust">
                </div>

                <div class="col-md-6 mx-3 my-3">
                    <h5><?= $customer['name']; ?></h5>
                    <p>Email : <?= $customer['email']; ?></p>
                    <p>No. Telf : <?= $customer['no_telf']; ?></p>
                    <p>Alamat : <?= $customer['alamat']; ?></p>
                    <p><small class="text-muted">Mendaftar Sejak <?= date('d F Y', strtotime($customer['date_created'])); ?></small></p>
                    <a href="<?= base_url('admin/customer'); ?>" class="badge badge-dark">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->
</div>