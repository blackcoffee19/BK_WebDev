<?php
    $dscc= array(
        1 => array("hinh/cho1.jpg","Chó Sói","20000 usd"),
        2 => array("hinh/cho2.jpg", "Chó Rottweiler", "1450 usd"),
        3 => array("hinh/cho3.jpg", "Chó Husky", "2000 usd"),
        4 => array("hinh/cho4.jpg", "Chó Mông Cộc", "1200 usd"),
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