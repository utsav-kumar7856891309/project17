<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number cheker</title>
</head>
<body>
    <h2>Number checker</h2>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>
    <h3>Result:</h3>
    <?php 
     function isprime($num){
        if($num<=1){
            return false;
        }
        for($i=2;$i<=sqrt($num);$i++){
            if($num%$i==0){
                return false;
            }
        }
        return true;
     }
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $number=intval($_POST['number']);
        if($number==0){
            echo "o is neither even odd ,prime nor compostie";
        }else{
            if($number%2==0){
                echo "$number is Even.<br>";
            }else{
                echo "$number is odd.<br>";
            }
            if(isprime($number)){
                echo "$number is a prime number.";
            }else{
                echo "$number is a compostie number.";
            }
        }
     }
    
    
    
    ?>
</body>
</html>