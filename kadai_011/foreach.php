<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    
     <p>
         <?php
         //連想配列を作成する
         $personal_data = ['name' => '名前:玉ねぎ', 'price' => '値段:200', 'Production area' => '産地:北海道'];

         // 連想配列$personal_dataの値を1つずつ順番に出力する
         foreach ($personal_data as $value) {
             echo $value . '<br>';
         }
         ?>
     </p>
     <p>
         <?php
         //値を出力する
         $personal_data = ['id' => 'id:1', 'name' => '名前:侍太郎', 'age' => '年齢:30'];

         // 連想配列$personal_dataの値を1つずつ順番に出力する
         foreach ($personal_data as $value) {
             echo $value . '<br>';
         }
         ?>
     </p>
 </body>
 
 </html>