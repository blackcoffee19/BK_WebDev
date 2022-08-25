<?php
    $dscc= array(
        1 => array("hinh/c1.jpg","Cá Mập","500 usd"),
        2 => array("hinh/c2c.jpg", "Cá Sấu", "450 usd"),
        3 => array("hinh/c3c.jpg", "Cá Ngừ", "1000 usd"),
        4 => array("hinh/c4.jpg", "Cá Kiếm", "5000 usd"),
    );
    foreach($dscc as $ca)
    {
    echo "<div class='product'>";
    echo  "<div style='text-align:center'><img src='".$ca[0]."' width='100%' height='150'></div>";
    echo  "<div style='margin-left:10px; float:left'>".$ca[1]."<br>".$ca[2]."</div>";
    echo  "<div style='float:right; margin-right:10px; margin-top:10px'>
                <a href='#' style='border:1px solid blue; border-radius:7px; padding:5px;text-decoration:none'>Chi tiết</a></div>";
    echo "</div>";
    }
               
?>