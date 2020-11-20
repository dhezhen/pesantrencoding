<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <?= $this->session->flashdata('message'); ?>
                </div>
            </div>

            <form method="post" action="<?= base_url('user/changepassword'); ?>">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="current_password" name="current_password" class="form-control" id="current_password">
                    <div class="small text-danger"><?= form_error('current_password'); ?></div>

                </div>

                <div class="form-group">
                    <label for="new_password1">New Password</label>
                    <input type="password" name="new_password1" class="form-control" id="new_password1" placeholder="New Password">
                    <div class="small text-danger"><?= form_error('new_password1'); ?></div>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Repeat Password</label>
                    <input type="password" name="new_password2" class="form-control" id="new_password2" placeholder="Repeat Password">
                    <div class="small text-danger"><?= form_error('new_password2'); ?></div>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
        </div>
    </div>
    </form>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->