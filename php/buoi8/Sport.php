<?php
    echo '<div class="list">';
    foreach($ds as $key => $value){
        if($value[1] == $_GET["type"] && $value[2] == $_GET["page"]){
            echo "<div style='margin-top:120px;' class='cars'>";
            echo "<img style='border-radius:10px 10px 0 0;width:100%;' src='".$value[0]."' width='300px' height='200px'>";
            echo "<div class='sum'><h3>{$value[3]}</h3>";
            echo "<p style='color:red;font-weight:700;'>{$value[4]}</p>";
            echo "<a class='detail' href='?page=detail&lo=".$key."'>Chi tiết</a></div>";
            echo "</div>";
        }
    }
    echo "</div>";
?>