<div class="content-wrapper" id="wrapper">
    <div id="content-wrapper">

        <div class="container-fluid">

            <div class="row mb-2 content-header">
                <div class="col-sm-6">
                    <h1 style="margin-left: -10px;">EDIT PROFILE</h1>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <form action="<?= base_url('user/editProfile'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-2"><b>Gambar</b></div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="<?= base_url('assets/profile/') . $user['image']; ?>" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="custom-file upload">
                                            <label for="image">Select a file:</label>
                                            <input class="text-wrap" type="file" id="image" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-warning">Update</button>
                                <a href="<?= base_url('user/tampilkanProfil') ?>" class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /.content-wrapper -->

    </div>
</div>
<!-- /#wrapper -->

</body>