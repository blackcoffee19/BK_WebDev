<?php 
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    if($num1 != "" && $num2 != ""){
    $luong = $num1 * $num2;}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bài tập 2</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div style="background-color: #06283D; border: 1px solid #fff; border-radius: 10px; margin: 100px auto; padding: 20px 40px; width:fit-content; color:#fff; font-size: 1.3rem; font-weight:700;line-height:1.8rem;">
        <?php
        if($num1 == ""|| $num2 == ""){
            echo "<h1 align='center'>Bạn chưa nhập số ngày hoặc số lương</h1>";
            echo "<a href='baitap1.php'>Nhập lại</a>";
        }else{
            echo "<ul type='none'>";
            echo "<li>Số ngày lương là <mark>{$num1}</mark> ngày</li>";
            echo "<li>Lương 1 ngày là <mark>{$num2}</mark> nghìn đồng</li>";
            echo "<li>Lương của bạn là <mark>{$luong}</mark> nghìn đồng</li>";
            echo "</ul>";
        }
        ?>

        </div>
    </body>
</html>