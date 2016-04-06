<?php include 'header.php'; ?>
<?php include 'database.php';?>
<!-- BODY BELOW -->
<div class="container">
  <div class="row">

    <?php

    $query = "SELECT * FROM cart_producten";
    $query_result = $con->query( $query);
    $results_array = $query_result->fetchAll(PD::FETCH_ASSOC);
    if($database_config['debug']){
      echo "<pre>";
      print_r( $database_config);
      echo "</pre>";
    }

    foreach ( $result_array as $product) {
      ?>
      <div class="col-md-r col-x-12 productlisting">
        <h2><?php echo $product['name'];?></h2>
        <p> € <?php echo $product['price'];?></p>
        <a href="./cart.php?pid=<?php echo $product['id']; ?>">Add to cart</a>
      </div>
      <?php
    }
    ?>

  </div>
</div>
<!-- BODY ABOVE -->
<?php include 'footer.php'; ?>
