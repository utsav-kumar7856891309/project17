<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wheater a number is interger is not </title>
</head>
<body>
    <form action="" method="POST">
       enter the interger:
       <input type="number" placeholder="enter any number" name="num">
       <br>
       <br>
       <button type="submit" name="checkint">check if it is interger</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["checkint"])){
            $num=(int)$_POST["num"];
            if(is_int($num)){
                echo "<h1 style='color:green '> the number is int</h1>";
            }else{
                echo "<h1> the number is not int</h1>";
            }
        }
    }
    ?>
</body>
</html>