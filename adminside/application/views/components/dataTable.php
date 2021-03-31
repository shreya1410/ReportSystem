<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>flat_no</th>
        <th>title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Feedback</th>
        <th>Reply</th>
    </tr>
    </thead>
    <tbody>
    <?php   if(!empty($data)):  ?>
    <?php    foreach ($data as $d):?>

    <tr>

        <td> <?php echo ucwords($d->name) ?></td>
        <td> <?php echo $d->contact ?></td>
        <td> <?php echo $d->flat_no ?></td>
        <td> <?php echo $d->title ?></td>
        <td> <?php echo $d->description ?></td>
        <td style="width: 1000px; ">
            <select name="status" class="form-control" />
                <option value="">OPEN</option>
                <option value="open">open</option>
                <option value="in process">in process</option>
                <option value="completed">completed</option>
            </select>
        </td>

        <td> <a href="<?php  echo BASEURL.'/profile/reportForm?complain_id='.$d->complain_id ;?>">   Feedback</a></td>
<!--        <td> <a href="--><?php //echo  BASEURL; ?><!--/profile/reportForm">Feedback</a></td>-->
        <td> <a href="<?php echo  BASEURL; ?>/profile/delete">Reply</a></td>
    </tr>
    <?php endforeach;?>
    <?php endif; ?>
    </tbody>


</table>