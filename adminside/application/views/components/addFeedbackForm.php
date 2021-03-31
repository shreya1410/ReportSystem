<h2> Add Feedback</h2>
<?php
//var_dump($_GET['complain_id']);
//exit();
//?>

<form action="<?php echo BASEURL ;?>/profile/feedback_report?complain_id=<?php echo $_GET['complain_id'];?>" method="post">
    <div class="form-group">


        <input type="hidden" name="complain_id" value="<?php  echo $_GET['complain_id'];?>">
        <input type="text" name="msg" class="form-control" placeholder="Your msg"
               value="<?php if(!empty($data['msg'])): echo $data['msg']; endif;?>">
        <div class="error">
            <?php  if (!empty($data['msgError'])): echo $data['msgError']; endif;?>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Add feedback">
    </div>

</form>