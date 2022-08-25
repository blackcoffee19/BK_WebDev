<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DS Thanh vien</title>
    <style>
        body{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        h1{
            text-transform: uppercase;
            color: darkblue;
            width: 100%;
        }
        div{
            display: block;
            width: 200px;
            float: left;
            margin: 20px;
        }
        p{
            line-height: 2;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php
    $dstv = array(
        1 => array("hinh/rot.jpeg","Trần Văn Rớt","Sài Gòn",1999),
        2 => array("hinh/hoclai.jpg","Nguyễn Thị Học Lại","Cà Mau",2000),
        3 => array("hinh/luubangl.jpeg","Lưu Bang","Đà Nẵng",1998),
        4 => array("hinh/hangvu.jpeg","Hạng Vũ","Đồng Nai",1998),
        5 => array("hinh/phong.jpg","Âu Dương Phong","Sài Gòn",2000),
        6 => array("hinh/cong.jpg","Hồng Thất Công","Huế",1999)
    );
    ?>
    <h1 align='center'>Danh sách các thành viên</h1>
    <?php
    foreach($dstv as $key => $value){
        echo"<div>";
        echo "<img src='{$value[0]}' height='260px' width='200px'>";
        echo "<p align='center'>{$value[1]}<br>{$value[2]} - {$value[3]}</p>";
        echo "</div>";
    }
    ?>
</body>
</html>