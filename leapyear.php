<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><marquee>leap year checker</marquee></h1>
    <form action="" method="POST">
        Enter any number:
        <input type="number" name="year"
        placeholder="enter a number"required>
        <br>
        <button type="submit" name="checkleap">check for a leap year</button>


    </form>
    <?php 
   if($_SERVER["REQUEST_METHOD"]=="POST"){
     if(isset($_POST["checkleap"])){
        $year=$_POST["year"];
        if(($year%400==0)||($year%4==0 && $year%100!==0)){
            echo "the number is leap year";
        }else{
            echo "this is year is not a leap year";
        }
     }
   }





    ?>
   
</body>
</html>