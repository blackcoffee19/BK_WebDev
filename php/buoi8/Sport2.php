<?php
    echo '<div class="list">';
    foreach($ds2 as $key => $value){
        if($value->car_class == $_GET["type"] && $value->car_brand == $_GET["page"]){
            echo "<div style='margin-top:120px;' class='cars'>";
            echo "<img style='border-radius:10px 10px 0 0;width:100%;' src='".$value->car_img."' width='300px' height='200px'>";
            echo "<div class='sum'><h3>{$value->car_name}</h3>";
            echo "<p style='color:red;font-weight:700;'>{$value->car_price}</p>";
            echo "<a class='detail' href='?page=detail&lo=".$key."'>Chi tiết</a></div>";
            echo "</div>";
        }
    }
    echo "</div>";
?>