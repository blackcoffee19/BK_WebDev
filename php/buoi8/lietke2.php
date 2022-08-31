<?php
    if($_REQUEST["p"] == ""){
        $jsonstr = '';
        echo "<div class='list'>";
        echo "<h1 align='center' id='banner'>GARAGE</h1>";
        foreach($ds2 as $key => $value){
            $jsonobj = array("name" => $value->car_name,"price"=> $value->car_price );
            $jsonstr = json_encode($jsonobj);
            echo "<div class='cars'>";
            echo "<img style='border-radius:10px 10px 0 0;width:100%;' src='".$value->car_img."' width='300px' height='200px'>";
            echo "<div class='sum'><h3>{$value->car_name}</h3>";
            echo "<p style='color:red;font-weight:700;'>$".number_format($value->car_price)."</p>";
            echo "<div class='btt'><a class='detail' href='?page=detail&lo=".$key."'>Chi tiết</a>";
            echo "<button onclick='addToCart($jsonstr)' class='cart-bt'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart-plus' viewBox='0 0 16 16'><path d='M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z'/><path d='M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/></svg</button>";
            echo "</div></div></div>";
        }
    } else {
        $p = $_REQUEST["p"];
        echo "<div class='list2'>";
        echo "<form method='get' style='width:100%; text-align:center;'>";
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>';
        echo "<input style='margin-top:20px;margin-bottom:50px;width:50%;margin-left:20px;outline-color:#FFFFFF;' type='text' placeholder='Search' value=".$p." id='search' name='p' onkeyup='searching(this.value)'></form>";
        $len = strlen($p);
        foreach($ds2 as $key => $value){
            $name = explode(" ",$value->car_name);
            foreach($name as $w){
            for($i = 0;$i<=strlen($w)-$len;$i++){
                $w2 = substr($w,$i,$i+$len);
                if(strcasecmp($p, $w2) == 0){
                    echo "<div class='cars'>";
                    echo "<img style='border-radius:10px 10px 0 0;width:100%;' src='".$value->car_img."' width='300px' height='200px'>";
                    echo "<div class='sum'><h3>{$value->car_name}</h3>";
                    echo "<p style='color:red;font-weight:700;'>$".number_format($value->car_price)."</p>";
                    echo "<div class='btt'><a class='detail' href='?page=detail&lo=".$key."'>Chi tiết</a>";
                    echo "<button onclick='addToCart({$key})' class='cart-bt'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart-plus' viewBox='0 0 16 16'><path d='M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z'/><path d='M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/></svg</button></div></div>";
                    echo "</div>";
                }
            }}
        }
        
    };
?>