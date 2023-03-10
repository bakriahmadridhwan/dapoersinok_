<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <h3><b>Admin</b>PAGE</h3>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?= $this->session->flashdata('message'); ?>

            <form action="<?= base_url('auth') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo set_value('email'); ?>" required>
                    <?php echo form_error('email'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                    <?php echo form_error('password'); ?>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <!-- <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div> -->
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="bungkus mt-4">
                <!-- <p class="mb-1">
                    <a href="<?= base_url('auth/forgot') ?>">I forgot my password</a>
                </p> -->
                <!-- <p class="mb-0">
                    <a href="<?= base_url('auth/registration') ?>" class="text-center">Register a new membership</a>
                </p> -->
                <p class="mb-0">
                    <a href="<?= base_url('landing') ?>" class="text-center">Go to website</a>
                </p>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->