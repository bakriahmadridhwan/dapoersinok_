<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="margin-left: -5px;">PROFILE</h1>
                </div>
            </div>



        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <!-- <div class="row">
            <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div> -->

        <div class="container">
            <div class="card mb-3 col-lg-8">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo base_url('assets/profile/') . $user['image']; ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><b><?php echo $user['name']; ?></b></h3>
                            <h5 class="card-text"><?php echo $user['email']; ?></h5>
                            <h5 class="card-text"><small class="text-muted">Member since <?php echo date('d F Y', $user['date_created']); ?></small></h5>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary mb-4" href="<?= base_url('user/editProfile'); ?>" role="button">Edit Profil</a>
        </div>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>