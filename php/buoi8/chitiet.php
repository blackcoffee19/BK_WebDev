<?php
    echo "<div class='list'>";
    if(isset($_GET["lo"])){
        $ms = $_GET["lo"];
        foreach($ds as $key => $value){
            if($key == $ms){
                echo "<img width='50%' style='margin:120px 20px 10px 20px;' src='".$value[0]."'>";
                echo "<div class='info-div'><h2>".$value[3]."</h2><br><p style='color:red;font-weight:700;'>".$value[4]."</p></div>";
                echo "<div class='overview'><h3>Overview</h3><p style='color:#000;'>".$value[5]."</p></div>";
                echo "<a class='back' href='danhsachxe.php'>Back</a>";
            }
        }
    }
    echo "</div>";
?>