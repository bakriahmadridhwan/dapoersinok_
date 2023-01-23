<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="margin-left: -10px;">CHANGE PASSWORD</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-lg">

                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('messages'); ?>"></div>
                <div style="margin-left: -10px; padding-right: 0px;" class="col-sm-5">
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <form action="<?= base_url('user/changepassword'); ?>" method="post" class="col-sm-5">

                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password">
                                <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="new_password1">New Password</label>
                                <input type="password" class="form-control" id="new_password1" name="new_password1">
                                <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="new_password2">Repeat Password</label>
                                <input type="password" class="form-control" id="new_password2" name="new_password2">
                                <?php echo form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-warning">Change</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->




</div>
<!-- /.content-wrapper -->