<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>字串取代</h2>
<p>將”aaddw1123”改成”*********"</p>
<h2>字串分割</h2>
<p>將"this, is, a, book”依”,”切割後成為陣列</p>
<h2>字串組合</h2>
<p>將"this, is, a, book”依”,”切割後成為陣列</p>
<?php 
$str="aaddw1123adsfsdfasdf";
$str=str_replace(["a","d","w",1,2,3],"*",$str);
echo $str;
echo"<br>";
echo str_replace("*",mb_strlen($str),$str);
?>

<H2></H2>
<P></P>
<?php 
$str="this, is,a,book";
$arr=explode(",",$str);
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
<H2></H2>
<?php 
$str=join(" ",$arr);
echo $str;
?>

</body>
</html>