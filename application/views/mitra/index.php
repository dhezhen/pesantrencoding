<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= form_error('name', '<div class="alert alert-danger" role="danger">', '</div>'); ?>
            <?= form_error('image', '<div class="alert alert-danger" role="danger">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#addNewMitra"> Add Mitra </a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1; ?>
                    <?php foreach ($mitra as $m) : ?>

                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $m['name']; ?></td>
                            <td><?= $m['city']; ?></td>
                            <td><img class="thumbnails" src="<?= base_url('assets/img/mitra/') . $m['image']; ?>" alt=""></td>
                            <td>
                                <!-- <a type="button" class="btn btn-outline-warning" data-toggle="modal" href="" data-target="#editMitra" data-mitra_id='<?= $m["id"]; ?>' data-mitra_image='<?= $m["image"]; ?>' data-mitra_city='<?= $m["city"]; ?>' data-mitra_name='<?= $m['name']; ?>'>Edit</a> -->
                                <a class="btn btn-danger" href="<?= base_url('mitra/delete/') . $m['id'] . '/' . $m['image']; ?>" onclick="return confirm('Delete mitra <?= $m['name'] ?> ?'  )" class="badge badge-danger">Delete</a>
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
<div class="modal fade" id="addNewMitra" tabindex="-1" aria-labelledby="addNewMitraLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewMitraLabel">Add mitra </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('mitra') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="city" name="city" placeholder="city">
                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="editMitra" tabindex="-1" role="dialog" aria-labelledby="editMitraLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMitraLabel">Update mitra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="mitra/updatemitra" enctype="multipart/form-data" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name">
                            <input type="hidden" class="form-control" id="id" name="id" placeholder="name">

                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="city" name="city" placeholder="city">
                        </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update mitra</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#editMitra').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var a = $(event.relatedTarget) // Button that triggered the modal
            var mitra = a.data('mitra_name') // Extract info from data-* attributes
            var id = a.data('mitra_id') // Extract info from data-* attributes
            var city = a.data('mitra_city') // Extract info from data-* attributes
            var image = a.data('mitra_image') // Extract info from data-* attributes

            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('Update ' + mitra)
            modal.find('#mitra').val(mitra)
            modal.find('#id').val(id)
            modal.find('#city').val(city)
            modal.find('#image').val(image)
            modal.find('#name').val(mitra)
        })

    });
</script>