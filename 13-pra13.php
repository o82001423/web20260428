<!DOCTYPE html>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>已知西元1024年為甲子年</title>
</head>
<body>
    
<H1>已知西元1024年為甲子年,請設計一支程式,可以接受任一西元年份,輸出對應的天干地支的年别。(利用迴圈)</H1>
    <ul>
        <li>天干:甲乙丙丁戊己庚辛壬癸</li>
        <li>地支:子丑寅卯辰巳午未申酉戌亥</li>
        <li>天干地支配對:甲子、乙丑、丙寅....甲戌、乙亥、丙子、</li>
    </ul>
    <?php 
    // 1. 設定要查詢的年份
    $year = 2026;

    // 2. 準備兩個「圓盤」袋子
    // 天干袋子（10個字）
    $heavenly_stem = ["甲","乙","丙","丁","戊","己","庚","辛","壬","癸"];
    // 地支袋子（12個字）
    $earthly_brabches = ["子","丑","寅","卯","辰","巳","午","未","申","酉","戌","亥"];

    // 3. 計算這一年距離「甲子年 (西元1024年)」過了幾年
    // 為什麼減1024？因為那年剛好是甲子年，是我們計算的起點
    $diff = $year - 1024;

    // 4. 算出這一年在 60 年一循環的「甲子週期」中是第幾個
    $idx = $diff % 60;

    // 5. 找出對應的字
    // 天干每10年轉一圈，所以用 10 取餘數
    $sky = $heavenly_stem[$idx % 10];
    
    // 地支每12年轉一圈，所以用 12 取餘數
    // 【修正點】這裡我們把算出來的結果存進 $earthly
    $earthly = $earthly_brabches[$idx % 12];

    // 6. 把結果印出來
    // 【修正點】記得最後這裡也要用 $earthly，名字才對得起來喔！
    echo "西元{$year}年是{$sky}{$earthly}年。";
?>
</body>
</html>

