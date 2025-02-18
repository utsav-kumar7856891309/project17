<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vowel Counter</title>
</head>
<body>
  <form action="" method="POST">
    Enter any string:
    <input type="text" name="str" placeholder="Enter the string" required>
    <br>
    <button type="submit" name="vowcount">Count Vowels</button>
  </form>

  <?php
  //verify the server request method
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["vowcount"])){
      $str=$_POST["str"];
      function countvow($str){ //user defined function
        //variable declaration
        $count=0;
        $vow=["a","e","i","o","u"];
        $strtolow=strtolower($str);
        for($i=0; $i<strlen($strtolow); $i++){
          if(in_array($strtolow[$i],$vow)){
            $count=$count+1;
          }
        }
        return $count;
      }

      $count = countvow($str);
      echo "<h1> The Count Of Vowel is $count</h1>";
      
    }
  }
  ?>

</body>
</html>