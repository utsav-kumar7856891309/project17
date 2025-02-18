<?php 
$inventory = isset($_POST['inventory_data']) ? json_decode($_POST['inventory_data'], true) : [];
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])){
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
   if(!empty($name) && $quantity>0 && $price>0){
       $inventory[]=[
        'id'=>count($inventory)+1,
        'name'=>$name,
        'quantity'=>$quantity,
        'price'=>$price

       ];
   }
 
}
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['update'])){
     $id=(int)$_POST['id'];
     $quantity=(int)$_POST['quantity'];
     $price=(float)$_POST['price'];
     foreach($inventory as $item){
        if($item['id']==$id){
            $item['quantity']=$quantity;
            $item['price']=$price;
            break;
        }
     }
     unset($item);
     

}
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['delete'])){
     $id=(int)$_POST['id'];
     $newInventory=[];
     foreach($invenotry as $item){
        if($item['id']!=$id){
            $newInventory[]=$item;
        }
     }
     $invenotry=$newInventory;
}












?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invenotry Managenet</title>
</head>
<body>
    <h1>Inventory management</h1>
    <h3>Adding item in inventory</h3>
    <form method="POST" action="">
       Name: <input placeholder="enter a value" type="text" name="name" required>
       Quantity:<input type="number" name="quantity" required>
       Price:<input type="number" step="0.01" name="price" required>
       <button type="submit" name="add">Add items</button>


    </form>
    <h3>Update Item</h3>
    <form method="POST">
        ID:<input type="number" name="id" required>
        New Quantity:<input type="number" name="quantity" required>
        New Price:<input type="number" step="0.01" name="price" required>
        <button type="submit" name="update">Update Item</button>
    </form>
    
    
    <h3>Delete Item</h3>
   <form method="POST">
    ID: <input type="number" name="id" required>
    <button type="submit" name="delete">Delete Item</button>
</form>
<h3>Inventory List</h3>
<?php if (!empty($inventory)) : ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php foreach ($inventory as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= htmlspecialchars($item['name']) ?></td>
                <td><?= $item['quantity'] ?></td>
                <td>$<?= number_format($item['price'], 2) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <p>No items in inventory.</p>
<?php endif; ?>

</body>
</html>
</body>
</html>