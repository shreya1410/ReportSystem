<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>flat_no</th>
        <th>title</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php   if(!empty($data)):       ?>
    <?php    foreach ($data as $d):?>

    <tr>
        <td> <?php echo ucwords($d->name) ?></td>
        <td> <?php echo $d->contact ?></td>
        <td> <?php echo $d->flat_no ?></td>
        <td> <?php echo $d->title ?></td>
        <td> <?php echo $d->description ?></td>
        <td> <a href="<?php  echo BASEURL ;?>/profile/edit_report/<?php echo $d->complain_id;?>"  class="btn btn-warning">Edit</a></td>
        <td> <a href="<?php echo  BASEURL; ?>/profile/delete/<?php echo $d->complain_id; ?>"  class="btn btn-danger">Delete</a></td>
    </tr>
    <?php endforeach;?>
    <?php endif; ?>
    </tbody>
</table>