<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-10">

            <div class="card" style="width: 80%;">

                <div class="card-body">
                    <form action="<?=base_url('service/addService')?>" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                        </div>
                        <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="small text-danger"><?= form_error('name') ?></div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Desc</span>
                        </div>
                        <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="small text-danger"><?= form_error('description') ?></div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Detail</label>
                        <textarea class="form-control" name="detail" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="small text-danger"><?= form_error('detail') ?></div>


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">is Active</span>
                        </div>
                        <select class="custom-select">
                            <option selected name="is_active">select menu</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>

                        </select>
                    </div>



                    <button type="submit"  href=""class="btn btn-primary">save</button>
                </div>
</form>
            </div>
        </div>

        <div class="col-2">
            <div class="card" style="width: 20%;">

            </div>

        </div>


    </div>

</div>
<!-- /.container-fluid -->




</div>
<!-- End of Main Content -->
