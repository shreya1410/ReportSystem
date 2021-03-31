<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>user Dashboard</title>
    <?php include "components/header.php"?>

    <?php linkCSS("assets/dataTables.bootstrap4.min.css"); ?>

</head>
<body>


<?php  include "components/nav.php"?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
<?php include "components/messages.php"?>

<?php include "components/dataTable.php";   ?>


        </div>
    </div>
</div>
<?php  include "components/footer.php"?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<?php  linkJS("assets/jquery.dataTables.min.js");   ?>
<?php    linkJS("assets/dataTables.bootstrap4.min.css"); ?>

</body>
</html>
