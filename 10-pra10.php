<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生考試成績</title>
</head>
<style>
    /* 這裡加一點簡單的 CSS，讓表格變漂亮 */
    table {
        border-collapse: collapse; /* 讓邊框合成一條線 */
        width: 60%;
        margin: 20px 0;
        font-family: Arial, sans-serif;
    }
    th, td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9; /* 偶數列換顏色，比較好閱讀 */
    }
    .name-column {
        font-weight: bold;
        background-color: #eef;
    }
</style>
<body>

<?php 
echo "<table border='1'>"; // 加上邊框，讓你看得見格子
   
    // --- 這是你原本的第一部分：手動印科目 ---
    $sj = ["國文","英文","數學","地理","歷史"];
    
    echo "<tr>";           // 開啟標題這一排
    echo "<td>姓名</td>";   // 手動補一格，對齊下面的名字
    echo "<td>$sj[0]</td>"; // 國文
    echo "<td>$sj[1]</td>"; // 英文
    echo "<td>$sj[2]</td>"; // 數學
    echo "<td>$sj[3]</td>"; // 地理
    echo "<td>$sj[4]</td>"; // 歷史
    echo "</tr>";          // 關閉標題這一排

    // --- 第二部分：學生成績資料庫 ---
    $st = [
        "judy"=>[95,64,70,90,84],
        "amo"=>[88,78,54,81,71],
        "john"=>[45,60,68,70,62],
        "peter"=>[59,32,77,54,42],
        "hebe"=>[71,62,80,62,64],
    ];

    // --- 第三部分：你寫的迴圈 ---
    foreach($st as $name => $scorelist){
        echo "<tr>";             // 每一位學生開一排
        echo "<td>$name</td>";   // 印出名字
        
        foreach($scorelist as $one_score){
            // 這裡修正了你原本拼錯的 $one_scoer -> $one_score
            echo "<td>$one_score</td>"; 
        }
        echo "</tr>";            // 每一位學生關一排
    }

echo "</table>";
?>
</body>
</html>