<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= form_error('name', '<div class="alert alert-danger" role="danger">', '</div>'); ?>
            <?= form_error('url', '<div class="alert alert-danger" role="danger">', '</div>'); ?>
            <?= form_error('icon', '<div class="alert alert-danger" role="danger">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#addNewsosmed"> Add Sosmed </a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1; ?>
                    <?php foreach ($sosmed as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['name']; ?></td>
                            <td><a href="<?= $s['url']; ?>" target="_blank"> <?= $s['url']; ?></a></td>
                            <td><?= $s['icon']; ?></td>
                            <td>
                                <a type="button" class="btn btn-outline-warning" data-toggle="modal" href="" data-target="#editsosmed" data-sosmed_id='<?= $s["id"]; ?>' data-sosmed_icon='<?= $s["icon"]; ?>' data-sosmed_url='<?= $s["url"]; ?>' data-sosmed_name='<?= $s['name']; ?>'>Edit</a>
                                <a class="btn btn-danger" href="<?= base_url('sosmed/deletesosmed/') . $s['id'] ?>" onclick="return confirm('Delete sosmed <?= $s['name'] ?> ?'  )" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="addNewsosmed" tabindex="-1" aria-labelledby="addNewsosmedLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewsosmedLabel">Add sosmed </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('sosmed') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="icon">

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="url">

                    </div>
                    <div class="form-group">
                        <select name="is_active" class="form-control">
                            <option value="1" selected>Active</option>
                            <option value="0">Deactivate</option>
                        </select>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="editsosmed" tabindex="-1" role="dialog" aria-labelledby="editsosmedLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editsosmedLabel">Update sosmed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="sosmed/updatesosmed" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name">
                            <input type="hidden" class="form-control" id="id" name="id" placeholder="name">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="icon">

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="url" name="url" placeholder="url">

                        </div>
                        <div class="form-group">
                            <select name="is_active" class="form-control">
                                <option value="1" selected>Active</option>
                                <option value="0">Deactivate</option>
                            </select>
                        </div>

                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update sosmed</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#editsosmed').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var a = $(event.relatedTarget) // Button that triggered the modal
            var sosmed = a.data('sosmed_name') // Extract info from data-* attributes
            var id = a.data('sosmed_id') // Extract info from data-* attributes
            var url = a.data('sosmed_url') // Extract info from data-* attributes
            var icon = a.data('sosmed_icon') // Extract info from data-* attributes

            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Update ' + sosmed)
            modal.find('#sosmed').val(sosmed)
            modal.find('#id').val(id)
            modal.find('#url').val(url)
            modal.find('#icon').val(icon)
            modal.find('#name').val(sosmed)
        })

    });
</script>