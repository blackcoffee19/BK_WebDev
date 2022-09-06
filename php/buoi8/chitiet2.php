<?php
    echo "<div class='list'>";
    if(isset($_GET["lo"])){
        $ms = $_GET["lo"];
        foreach($ds2 as $key => $value){
            if($key == $ms){
                echo "<img width='50%' style='margin:120px 20px 10px 20px;' src='".$value->car_img."'>";
                echo "<div class='info-div'><h2>".$value->car_name."</h2><br><p style='color:red;font-weight:700;'>$".number_format($value->car_price)."</p></div>";
                echo "<div class='overview'><h3>Overview</h3><p style='color:#000;'>".$value->car_info."</p></div>";
                echo "<a class='back' href='danhsachxe2.php'>Back</a>";
            }
        }
    }
    echo "</div>";
?>