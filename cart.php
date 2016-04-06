<?php include 'header.php'; ?>
<?php include 'database.php';?>
<!-- BODY BELOW -->
<?php

session_start();
if (isset ( $_GET['pid'])){
  if (!isset( $_SESSION['cart-content'])){
    $_SESSION['cart_content'] = $_GET['pid'];
  }
  else{
    $_SESSION['cart-content'] .=',';
    $_SESSION['cart_content'] .=$GET['pid'];
  }
}

if (isset ($_GET['empty'])){
  session_destroy();
  header('location:cart.php');
}

if ($database_config['debug']){
  echo "<pre>";
  print_r ($_SESSION);
  echo "</pre>";
}
?>
<!-- BODY ABOVE -->
<?php include 'footer.php'; ?>
