<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('user', '<div class="alert alert-danger" role="danger">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#addNewUser"> Add New user </a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">akses</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($list_user as $ls) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $ls['name']; ?></td>
                            <td><?= $ls['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/editUserAccess/') . $ls['id']; ?>" class="badge badge-warning">change role acces</a>
                                <!-- <a href="< = base_url('admin/edituser/') . $ls['id']; ?>" class="badge badge-success">Edit</a> -->
                                <a href="<?= base_url('admin/deleteuser/') . $ls['id']; ?>" class="badge badge-danger" onclick=" return confirm('Are you sure want to delete this user ?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal Add Role -->

<div class="modal fade" id="addNewUser" tabindex="-1" aria-labelledby="addRoleModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addRoleModelLabel">Add user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/addNewrole') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role_name" placeholder="type new role">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Role Added</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- edit Role -->


<!-- <div class="modal fade" id="changeAcces" tabindex="-1" role="dialog" aria-labelledby="editRoleModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeAcces">Change Role acces</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('admin/changeUserAccess'); ?>">
                    <div class="form-group">
                        <input type="text" value="<? ?>">
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="">select Acces</option>
                            <?php foreach ($list_user as $r) : ?>
                                <option value="<?= $r['id'] ?>"><?= $r['role'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->