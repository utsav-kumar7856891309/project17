<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic login pages</title>
</head>
<body>
    <h2>Login pages</h2>
    <form method="POST" action="">
        <label for="username">USername:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>

        
    </form>
    <h3>Result:</h3>
    <?php 
     $correctUsername="admin";
     $correctPassword="password123";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if($username===$correctUsername && $password===$correctPassword){
            echo "Login successful! Welcome, $username.";
        }else{
            echo "Invalid username or password ,Plesae try again.";
        }
     }
    
    
    ?>
</body>
</html>