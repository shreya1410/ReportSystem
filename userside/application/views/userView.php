<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>user!</title>
  <?php  linkCSS("assets/css/style.css"); ?>
</head>
<body>
<h1>user view!</h1>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<form action="<?php echo BASEURL; ?>/userController/signup" method="post">
    <input type="text" name="fullName" placeholder="fullname"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
   <input type="password" name="password" placeholder="password"><br><br>
    <input type="submit" value="Register">
</form>

<!--<img src="--><?php //echo BASEURL; ?><!--/assets/img/pic.jpg" alt="" width="700px">-->
<?php linkJS("assets/js/app.js");?>

</body>
</html>