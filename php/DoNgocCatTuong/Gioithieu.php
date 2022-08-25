<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <style>
        div{
            display: flex;
            flex-direction: row;
            width: 100%;
            font-size: 1.2rem;
        }
        ul{
            width: 70%;
        }
    </style>
</head>
<body>
    <?php
        $tg = array("Đỗ Ngọc Cát Tường","Nữ","0919941037","23/47/78 Nguyễn Hữu Tiến, phường Tây Thạnh, Q.Tân Phú, TP.HCM","hinh/IMG.jpg");
    ?>
    <h1 align="center"><font color="red"><b>THÔNG TIN TÁC GIẢ</b></font></h1>
    <div>
        <?php 
            echo "<ul>";
                echo "<li>Họ và Tên: ".$tg[0]."</li>";
                echo "<li>Giới tính: ".$tg[1]."</li>";
                echo "<li>Điện thoại: ".$tg[2]."</li>";
                echo "<li>Địa chỉ: ".$tg[3]."</li>";
            echo "</ul>";
            echo "<img src='{$tg[4]}' width='20%'>";
            ?>
    </div>
    
</body>
</html>