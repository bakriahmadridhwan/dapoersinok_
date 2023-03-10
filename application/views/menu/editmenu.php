<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="margin-left: -10px;">EDIT MENU MANAGEMENT</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <form action="<?php echo base_url('menu/ubahMenu'); ?>" method="post">
            <div class="row">
                <div class="col-sm-4">
                    <input type="hidden" name="id" value="<?= $user_menu['id'] ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name" value="<?= $user_menu['menu']; ?>">
                    </div>
                </div>
            </div>


            <br>
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="<?= base_url('menu/index'); ?>" class="btn btn-primary">Back</a>
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->