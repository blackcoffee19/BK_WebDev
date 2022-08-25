<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thiết Giao diện</title>
    <style>
        .menu {width:100%; background-color:#000000; border-radius:5px; height:70px}
        .logo {color:#FFFFFF; margin-left:50px; line-height:70px;
               font-family:Segoe UI Black; float:left;
        }
        .item {font-family:segoe ui; list-style:none; float:right; margin-top:20px; margin-right:20px}
        .item li {display:inline; margin-right:30px;}
        .item li a {color:#FFFFFF;text-decoration:none}
        .section {width:90%; margin:0px auto;min-height:200px;}
        .banner  {width:40%; float:left; margin-top:10px; margin-left:10px;}
        .intro   {width:57%; float:right; margin-top:10px;}
        .intro a {margin-left:30px; text-decoration:none; border:2px solid blue; 
                  padding:10px; border-radius:5px; float:right; margin-top:30px}
        .content {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width:100%;
            margin:0px auto;
            min-height:200px;
        }
        .product {width:22%; min-height:200px; float:left; border:1px dashed #D8D8D8;margin:10px}
    </style>
</head>
<body>
<div>
    <div class="menu">
        <div class="logo">Cửa Hàng Lubumex</div>
        <ul class="item">
            <li><a href="?pro=ca">Cá cảnh</a></li>
            <li><a href="?pro=cho">Chó cảnh</a></li>
            <li><a href="?pro=cay">Cây cảnh</a></li>
            <li><a href="?pro=ch">Chuột Hamster</a></li>
            <li><a href="?pro=lich">Xem lịch</a></li>
        </ul>
        <div style="clear:both">
            
        </div>
    </div>
    <div class="section">
            <div class="banner">
                <img src="hinh/banner.jpg" width="250px" height="252px" alt="Cây phong thuỷ">
            </div>
            <div class="intro">
                <div style="text-align:center">
                     <img src="hinh/cuahang_cacanh.png" width="40%" alt="cửa hàng">
                     <a href="#"> Thư góp ý </a>
                </div>
                <p>Kênh mua sắm cây cảnh và phụ kiện với hàng ngàn lựa chọn giúp thỏa mãn nhu cầu trang trí nhà cửa, văn phòng, bàn làm việc... Ngoài ra Cây Cảnh Store còn nhận thiết kế, thi công trồng cây xanh,bảo dưỡng cây xanh..</p>
            </div>
    </div>
    <div class="content">
            <?php
                if (isset($_GET["pro"]))
                {
                    $pro = $_GET["pro"];
                    switch($pro)
                    {
                        case "ca":  require("cacanh.php"); break;
                        case "cho": require("chocanh.php"); break;
                        case "cay": require("caycanh.php"); break;
                        case "ch": require("Hamsters.php"); break;
                        case "lich": require("BTON02.php");break;
                    }

                }
                else
                { 
                    require("cacanh.php");
                }
                
            ?>
    </div>
</div>
</div>
</body>
</html>