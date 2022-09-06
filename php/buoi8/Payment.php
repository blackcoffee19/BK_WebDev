<?php
    $json = json_decode($_GET["jsonstr"]);
    $i = 1;
    $quan = 1;
    $sum= 0;
    $login=$_GET["login"];
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
    if($login == "true"){
        echo "<tr><td colspan='2' class='text-center'><a style='color:red !important; text-shadow:0 0 3px #ffffff;' href='danhsachxe2.php?login=true'><< Back to home</a></td><td colspan='2'><button id='cus_order' class='btn btn-primary' style='width:fit-content; height: fit-content;text-shadow:none;'>Order</button></td></tr>";
    }else{
        echo "<tr><td colspan='2' class='text-center'><a style='color:red !important; text-shadow:0 0 3px #ffffff;' href='danhsachxe2.php?'><< Back to home</a></td><td><a class='btn btn-success' style='width:fit-content; height:fit-content;' href='danhsachxe2.php?page=Login&type=Login'>Login</a></td><td><a class='btn btn-success' style='width:fit-content; height:fit-content;' href='danhsachxe2.php?page=Login&type=Signin'>Sign in</a></td>";
    };
    echo "</table></div></div>";
    echo "<div id='input_infor' class='container-fluid' style='display:none'><div class='row mt-3 mb-3 ml-0 mr-0'><div class='col-md-2 col-lg-4'></div><form style='border:1px solid #000;border-radius:10px;' class='col-md-8 col-lg-4 cus_form' method='post'><table class='table'>";
    echo "<tr><td><label class='mb-3' for='cus_name'>Name:</td><td><input type='text' name='cus_name' placeholder='Enter receiver' required></td></tr>";
    echo "<tr><td><label class='mb-3' for='Tele'>Telephone:</td><td><input type='text' name='tele' placeholder='Enter receiver phone number' required></td></tr>";
    echo "<tr><td><label class='mb-3' for='address'>Address:</td><td><input type='text' name='address' placeholder='Enter address' required></td></tr>";
    echo "<tr><td><label class='mb-3' for='other'>Other:</td><td><textarea name='other'></textarea></td></tr>";
    echo "<tr><td colspan='2' class='text-center'><input type='submit' class='btn btn-primary' name='submit' style='width:fit-content; height:fit-content;' value='Submit'></td></tr>";
    echo "</table></form><div class='col-md-2 col-lg-4'></div></div></div>";
?>