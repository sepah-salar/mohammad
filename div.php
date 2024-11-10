<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mi.css">
</head>
<body dir="rtl">
<header>
    <div id="header">
        <span id="bala">شرکت بازی سازی سوپرسل</span>
    </div>
</header>

<nav>
        <ul>
               <li><a href="mahsolat">محصولات</a></li>
               <li><a href="tasavir">تصاویر</a></li>
               <li><a href="frosh">خرید و فروش</a></li>
               <li><a href="rahnama">راهنما</a></li>
        </ul>
</nav>

<main>
    <div id="chap">
        <span id="vasat1">راست</span>
    </div>
    <div id="rast">
        <span id="vasat2">چپ</span>
    </div>
</main>

<footer>
        <div id="tozihat" >
        <span>توضیحات</span>
        </div>
</footer>
<nav id="manabe">
    <span id="manae">منابع</span>
    <?php
    $city[0]="ریاضی";
    $city[1]="فارسی";
    $city[2]="علوم";
    $city[3]="تاریخ";
    ?>
    <select>
<?php
for($i=0;$i<=count($city)-1;$i++){
    echo("<option>".$city[$i]."</option>" );
}
?>
    </select>

</nav>

</body>
</html>