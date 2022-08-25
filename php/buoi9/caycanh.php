<?php
    $dscc= array(
        1 => array("hinh/ca1.jpg","Cây cần sa","200000 usd"),
        2 => array("hinh/ca2.jpeg", "Cây phát tài", "140 usd"),
        3 => array("hinh/ca3.jpg", "Cây nguyệt quế", "200 usd"),
        4 => array("hinh/ca4.jpg", "Cây đa", "1200 usd"),
    );
    foreach($dscc as $cx)
    {
    echo "<div class='product'>";
    echo  "<div style='text-align:center'><img src='".$cx[0]."' width='100%' height='150'></div>";
    echo  "<div style='margin-left:10px; float:left'>".$cx[1]."<br>".$cx[2]."</div>";
    echo  "<div style='float:right; margin-right:10px; margin-top:10px'>
                <a href='#' style='border:1px solid blue; border-radius:7px; padding:5px;text-decoration:none'>Chi tiết</a></div>";
    echo "</div>";
    }
               
?>