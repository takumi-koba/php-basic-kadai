<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_007</title>
</head>

<body>
    <p>
        <?php
        $grocery_data = ['name'=>'onion','price'=>200,'weight'=>160];
        
        print_r ($grocery_data);
        echo $grocery_data['name'];
        ?>
    </p>
</body>