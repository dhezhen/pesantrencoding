<!-- Begin Page Content -->
<div class="container-fluid overflow-auto">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
    <!-- Content -->
    <?= $this->session->flashdata('message'); ?>
    <a type="button" class="btn btn-outline-primary m-2 " href="<?=base_url('service/addService')?>">Add</a>
<table class="table table-hover border border-primary overflow-auto">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php $a=1;?>
      <?php foreach($services as $s ) : ; ?>
    <tr>
      
      <th scope="row"><?=$a++;?></th>
      <td><?=$s['name'];?> </td>
      <td class="overflow-auto"><?=$s['description'];?></td>
      <td> <img style="width: 100px; height:100px;" class="img-thumbnail"src="<?=base_url('assets/img/service/'.$s['image'])?>" alt=""></td>
      <td class="text-right">
      <button type="button" class="btn btn-info m-2">Detail</button>
      <button type="button" class="btn btn-warning m-2">Edit</button>
      <a href="<?=base_url('service/delete/').$s['id']?>" type="button" class="btn btn-danger m-2">Delete</button>
      </td>
    </tr>
      <?php endforeach;?>
    
  </tbody>
</table>
    <!-- end of Content -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->