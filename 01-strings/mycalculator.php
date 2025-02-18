<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="">
        <label for="num1">enter a number 1:</label>
        <input type="number" placeholder="enter a number 1" name="num1" required>
        <br>
        <br>
        <label for="num2">enter a number 2:</label>
        <input type="number" placeholder="enter a number 2" name="num2" required>
        <br>
        
        <button>
            <input type="submit" name="add" value="+" >
        </button>
        <input type="submit" name="sub" value="-">
        <input type="submit" name="mul" value="*">
        <input type="submit" name="div" value="/">
    </form>
    <?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    if(isset($_POST["add"])){
        $result=$num1+$num2;
        echo " <h1>the result is $result</h1>";
    }
    if(isset($_POST["sub"])){
        $result=$num1-$num2;
        echo " <h1>the result is $result</h1>";
    }
    if(isset($_POST["mul"])){
        $result=$num1*$num2;
        echo " <h1>the result is $result</h1>";
    }
}
?>
</body>
</html>