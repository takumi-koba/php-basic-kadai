<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            function up_two_arguments($nums, $a){
                if ($nums == $a){
                    return 0;
                }
                return ($nums < $a)? -1 : 1;
            }

            function down_two_arguments($nums, $a){
                if ($nums == $a){
                    return 0;
                }
                return ($nums > $a)? -1 : 1;
            }

                    // ソートする配列を宣言
            $nums = [15, 4, 18, 23, 10 ];
            echo '昇順にソートします。<br>';
            usort($nums, "up_two_arguments");

            foreach($nums as $key => $value){
                echo "$value<br>";
            }


            echo "降順にソートします<br>";
            usort($nums, "down_two_arguments");

            foreach($nums as $key => $value){
                echo "$value<br>";
            }
 
        ?>
    </p>
</body>

</html>