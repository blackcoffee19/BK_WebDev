<?php
    $json = json_decode($_GET["jsonstr"]);
    $i = 1;
    $quan = 1;
    $sum= 0;
    echo "<div class='list container row' style='margin-top:120px;'><div class='col-md-2 col-lg-4'></div><div class='col-md-10 col-lg-8'><table class='table' id='pay'><caption><h1>Your order</h1></caption>";
    echo "<tr><th scope='col'>No</th><th scope='col'>Name</th><th scope='col'>Quantity</th><th scope='col'>Price</th></tr>";
    $j = 0;
    while($j < count($json)){
        $json[$j]->quan = 1;
        $k = $j+1;
        while($k<count($json)){
            if($json[$j]->name == $json[$k]->name){
                $json[$j]->quan++;
                array_splice($json,$k,1);
            }else{
                $k++;
            };
        };
        $j++;
    };
    foreach($json as $obj){
        echo "<tr><th scope='col'>$i</th><td>$obj->name</td><td>$obj->quan</td><td>$ ".number_format($obj->price)."</td></tr>";
        $i++;
        $sum += $obj->quan*$obj->price;
    };
    echo "<tr><td colspan='2' style='color:red; font-weight:700;text-align:center;'>Total</td><td colspan='2' style='color:red; font-weight:700;text-align:center;'>$".number_format($sum)."</td></tr>";
    echo "</table></div></div>";
?>