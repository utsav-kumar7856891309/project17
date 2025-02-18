<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation </title>
</head>
<body>
    <form method="post" action="">
        Enter the Username:
        <input type="text" name="user" placeholder="enter the name">
        <button type="submit" name="submitform">submit</button>



    </form>
    <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["submitform"])){
            $value=$_POST["user"];
            $namerror=" ";
            if(empty($value)){
                $namerror="user name cannot left black";
                
                echo "<p style='color:red;'>$namerror</p>";
            }
            if(!preg_match("/^[A-Za-z0-9_ ]*$/",$value)){
                 $namerror="usen name must have this type of charcter";
                 $fullname=strlen($namerror);
                 echo "<p style='color:red;'>$fullname</p>";
            }else{
                echo "the username is $value";
            }





        }
    }
    ?>
</body>
</html>