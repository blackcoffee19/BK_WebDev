<?php
    $dscc= array(
        1 => array("hinh/ht1.jpg","Chuột màu trắng sọc","20 usd"),
        2 => array("hinh/ht2.jpg", "Chuột màu vàng", "50 usd"),
        3 => array("hinh/ht3.jpg", "Chuột Sapphire", "70 usd"),
        4 => array("hinh/ht4.jpg", "Chuột cống", "1200 usd"),
    );
    foreach($dscc as $ch)
    {
    echo "<div class='product'>";
    echo  "<div style='text-align:center'><img src='".$ch[0]."' width='100%' height='150'></div>";
    echo  "<div style='margin-left:10px; float:left'>".$ch[1]."<br>".$ch[2]."</div>";
    echo  "<div style='float:right; margin-right:10px; margin-top:10px'>
                <a href='#' style='border:1px solid blue; border-radius:7px; padding:5px;text-decoration:none'>Chi tiết</a></div>";
    echo "</div>";
    }
               
?>