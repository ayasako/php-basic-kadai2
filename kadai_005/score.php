<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         //変数
        $number = 10;
        echo $number * 8;
        echo '<br>';
        echo $number * 6;
        echo '<br>';
        echo $number + 45;
        echo '<br>';
        echo $number * 4;
        echo '<br>';
        echo $number / 0.1;
        echo '<br>';
        echo $number / 0.4;
        echo '<br>';
        echo $number + 70;
        echo '<br>';
        echo $number * 9.5;
        echo '<br>';
        echo $number  + 20;
        echo '<br>';
        echo $number / 60;
        
         ?>
     </p>
     <p>
   <?php
    $number = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
    // 平均を求める
    $score = array_sum($number) / count($number);
    echo $score;
    ?>
 </p>
</body>
 
 </html>