<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_007</title>
</head>

<body>
    <p>
        <?php

        $grocery = ['id'=>1,'名前'=>'侍太郎','年齢'=>30];
        
        foreach($grocery as $key => $value){
            echo "{$key}:{$value}<br>";
        }
        ?>
    </p>
</body>