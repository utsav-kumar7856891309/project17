<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
       
        var_dump($_POST);
        function e($value){
            return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
        }
           ?>
    </pre>
    <form action="index.php" method="POST">
        <input type="text" name="firstname" value="<?php if(!empty($_POST['firstname'])) echo htmlspecialchars($_POST['firstname'],ENT_QUOTES,'UTF-8');?>"/>
        <input type="submit" value="submit"/>
    </form>
    <?php $course='php course';?>
    <p><?php echo e($course);?></p>
    
</body>
</html>