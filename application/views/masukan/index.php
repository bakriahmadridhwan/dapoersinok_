<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="margin-left: -15px;">RESPON MANAGEMENT</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <?php date_default_timezone_set('Asia/Jakarta'); ?>

    <!-- Main content -->
    <section class="suggest">

        <div class="row">
            <div class="col-lg col-sm">


                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                <!-- <?= $this->session->flashdata('message'); ?> -->

                <h3>Suggestion</h3>

                <h6><b>Jumlah Data : </b><?= $total_suggest; ?></h6>

                <div class="table-responsive" style="height: 250px;">
                    <table class="table table-hover table-head-fixed">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Suggest</th>
                                <th scope="col">Date_Created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($suggest as $s) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $s['sugg']; ?></td>
                                    <td><?= date('d F Y | H:i:s', $s['date_created']); ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>user/hapusData/<?= $s['id']; ?>" class="badge badge-danger tombol-hapus">delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <hr class="mt-5">
            </div>
        </div>
    </section>



    <section class="contact">

        <div class="row">
            <div class="col-lg col-sm">

                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
                <!-- <?= $this->session->flashdata('message'); ?> -->

                <h3>Messages</h3>
                <h6><b>Jumlah Data : </b><?= $total_message; ?></h6>

                <div class="table-responsive" style="height: 250px;">
                    <table class="table table-hover table-head-fixed">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col-3">Message</th>
                                <th scope="col">Date_Created</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1; ?>
                            <?php foreach ($message as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?php echo $m['name']; ?></td>
                                    <td><?php echo $m['email']; ?></td>
                                    <td class="col-3"><?php echo $m['pesan'] ?></td>
                                    <td><?php echo date('d F Y | H:i:s', $m['date_created']); ?></td>
                                    <td><a href="<?= base_url() ?>user/hapusMess/<?= $m['id']; ?>" class="badge badge-danger tombol-hapus">delete</a></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- /.content -->

</div>
<!-- /.content-wrapper -->