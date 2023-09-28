<!DOCTYPE html>
<html lang="en">
<?php
    include('includes/head.php');
?>
<?
if (isset($_GET)) {
  include_once("php/msg.php");
}
?>
<body>

    <?php
        include('includes/header.php');
        include('modules/index.php');
        include('includes/footer.php');
        include('includes/scripts.php');
        include('includes/redes.php');   
    ?>

</body>

</html>