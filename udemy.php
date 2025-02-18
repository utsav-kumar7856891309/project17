<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre><?php
    function e($value){
        return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
    }
     $courses=[
        'german for beginners',
        'French for beginners',
        'soabusg for beginners'
     ];

    $coursesdesc=[
       'learn basic german vocalubry ,grammer ,and everyday phrases.',
       'master fundametal french skills inculding basic voculabry and conversation tehcifque',
       'Acquire essential spannish vocabulary and gain proficiendr in daily coversation '
    ];
    $coursesflags=[
         'this is comes ',
         'this is the came some ',
         'this is correct'
    ];
    $courses=[
        [
            'german for beginners'=>'learn basic german vocabulary ,germer,and everyday phrsase.'
        ],
        [
            'title'=>'frecnh for beginner',
            'desc'=>'Master fundamental french skills including basic voculaby basic and conversation tenique'
        ]
    ];
    foreach($courses as $course){
        var_dump($course);
    }
    ?>
    <?php foreach ($courses as $course): ?>
          <details>
             <summary>
                <?php echo e($course['german for beginners']);?>
                <?php echo e($course['title']);?>
             </summary>
             
             
          </details>
        <?php endforeach;?>
    </pre>
</body>
</html>