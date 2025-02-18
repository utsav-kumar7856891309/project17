<!-- <?php
  $inventory=["zen"=>["quantity"=>10,"price"=>2000],"maruti"=>["quantity"=>5,"price"=>2500000],"fiat"=>["quantity"=>7,"price"=>23000]];
  function printinventory($inventory){
    foreach($inventory as $itemname=>$details){
      echo "<li> $itemname : Quantity = {$details ['quantity']}, Price = {$details['price']}</li>";
      echo "<br>";
    }
  }
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $action=$_POST["action"];
    $itemname=$_POST[""];
    $quantity=$_POST[""];
    $price=$_POST[""];
    switch($action){
      case '';
      case '';
        case '';
          case '';
    }
  }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <h1>INVENTORY MANAGEMENT</h1>

  <form action="" method="POSt">
    <h4>ADDING ITEM</h4>
    <input type="text" name="item" placeholder="Item Name">
    <input type="number" name="quntity" placeholder="Item Quantity">
    <input type="number" name="price" placeholder="Item Price">
    <input type="hidden" name="action" value="update">
    <input type="submit" name="additem" value="UPDATE MY ITEM">
  </form>

  <form action="" method="POST">
    <h4>DELETING ITEM</h4>
    <input type="text" name="item" placeholder="Item Name">
    <input type="hidden" name="action" value="delete">
    <input type="submit" name="additem" value="DELETE MY ITEM">
  </form>

  <form action="" method="POST">
    <input type="hidden" name="action" value="total">
    <input type="submit" name="total" value="TOTAL">
  </form>

</body>
</html> -->
<?php 
echo "Today  date is ";
$today=date("d/m/y");
echo $today;
?>