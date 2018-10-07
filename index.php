<?php require_once ("./init.php"); ?>


<!DOCTYPE html>
<html lang="en">
<?php require_once("./inc/head.php"); ?>
<body class="home">

<!-- no navbar on the home page -->
<?php
if($router->getCurrentRoute() != '/'){
    // we are not on the landing page
    include_once ("./inc/navbar.php");
}
if($router->getCurrentRoute() == '/'){
    // we are on the home page show the landing page content
    include_once ('./inc/home.php');
}
?>

<div class="content">
    <?php
//    var_dump($router->getCurrentRoute());
//    var_dump($router->getRoutes());
//    var_dump($router->getControllers());
//    var_dump($router->getRouteController($router->getCurrentRoute()));
//    var_dump($router->validateCurrentRoute());
    ?>
</div>

<?php require_once('./inc/footer.php'); ?>
</body>