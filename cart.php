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
    $_SESSION['cart-content'] . =',';
    $_SESSION['cart_content'] .=$GET['pid'];
  }
}
?>
<!-- BODY ABOVE -->
<?php include 'footer.php'; ?>
