<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩電腦選號</title>
</head>
<body>
    <h2>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h2>
    <ul>
        <li>使用亂數函式rand($a,$b)來產生號碼</li>
        <li>將產生的號碼順序存入陣列中</li>
        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
        <li>完成選號後將陣列內容印出</li>
    </ul>
    <?php 
    $lotto=[];
    while(count($lotto)<6){
    $tmp=rand(1,38);
        echo "$tmp ,";
    if(!in_array($tmp,$lotto)){
        $lotto[]=$tmp;
       /* echo "<pre>";
        print_r($lotto);
        echo"</pre>";*/
        }
     echo "<br>";
     }
     echo "<hr>";
    foreach($lotto as $num){
        echo "$num ,";
    }
    echo "<br>特別號:";
    echo rand(1,8);
    ?>
</body>
</html>