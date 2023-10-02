<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_011</title>
 </head>
 
 <body>
     <p>
         <?php
         $score = [
             '名前' => '玉ねぎ',
             '値段' => 200,
             '産地' => '北海道'
         ];
 
         foreach ($score as $key => $value) {
            
            echo "{$key}：{$value}<br>";
         }
         ?>
     </p>

     <p>
         <?php
         $score = [
             'id' => 1,
             '名前' => '侍太郎',
             '年齢' => 30,
         ];
         
          foreach ($score as $key => $value) {
             echo "{$key}：{$value}<br>";
         }
         ?>
     </p>

 </body>
 
 </html>