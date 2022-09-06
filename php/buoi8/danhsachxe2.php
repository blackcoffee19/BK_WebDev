<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartague</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet"> 
    <style>
        *{
            margin: 0 auto;
        }
        html{
            font-family: 'Roboto Condensed', Helvetica, sans-serif;
            font-size: 17px;
        }
        h1{
            width: 90%;
            font-family: 'Gugi',cursive;
            font-weight: 700;
            font-size: 2.5rem;
            text-shadow: 0 0 4px #FA6400;
        }
        h1>a{
            width: 100%;
            color: #FFFFFF;
            text-decoration: none;
        }
        /** */
        .remove-btn{
            color: red;
            width: fit-content;
            background-color: #FFFFFF;
            height: fit-content;
            display: contents;
        }
        .list{
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;     
        }
        .list2{
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            margin-top: 100px;
        }
        .cars {
            display: block;
            float: left;
            width: 300px;
            height: 375px;
            margin: 20px;
            box-shadow: 2px 2px 5px #000;
            border: 1px solid grey;
            border-radius: 10px;
        }
        .cars2{
            display: block;
            float: left;
            width: 320px;
            height: 420px;
            margin: 20px;
            box-shadow: 2px 2px 4px #000;
            border: 1px solid grey;
            border-radius: 10px;
        }
        .cars2>img{
            height: 250px;
        }
        .sum::after{
            content: "";
            clear: both;
            display: table;
        }
        .car>img{
            margin-right: 10px;
        }
        .detail{
            background-color: #FA6400;
            font-family: 'Gugi',cursive;
            text-align: center;
            border-radius: 20px;
            font-weight: 700;
            font-size: 1.1rem;
            height: 100%;
            padding-top: 7px;
            width: 50%;
        }
        .detail-hover{
            min-width: 120px;
            min-height: 20px;
            border-color: #FFFFFF;
            background-color: #FB8332;
            box-shadow: 2px 2px 2px #888888;
            color: #FFFFFF;
        }
        a{
            color:#FFFFFF !important;
            text-decoration: none !important;
        }
        .sum{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding:10px 20px;
            height: 170px;
            align-items: center;
        }
        .info{
            display: block;
            float: left;
            margin: 0 auto;
        }
        .info>img{
            width: 300px;
        }
        .info-div{
            width: 40%;
            margin: 120px 20px;
        }
        h2{
            margin: 0;
        }
        #banner{
            width: 80%;
            padding: 5px;
            border: 3px solid #000;
            box-shadow: 2px 2px #FA6400;
        }
        header{
            position: fixed;
            background-color: #000;
            color:#FFFFFF;
            opacity: 0.9;
            z-index: 2;
            width: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            border-bottom: 1px solid orange;
            padding-bottom: 20px;
            padding-top: 20px;
            box-shadow: 0 2px 5px #FA6400;
        }
        .btt{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 40px;
        }
        .cart-bt{
            width: 100px;
            background-color: #FFFFFF;
            color: #000;
            height: 40px;
        }
        button{
            height: 50px;
            width: 50px;
            border: 2px solid white;
            background-color: #000;
            color:#FFFFFF;
            font-size: 20px;
            text-shadow: 0 0 4px;
            box-shadow: 0 0 4px white;
            border-radius: 20px;
        }
        button:hover{
            background-color: #FFFFFF;
            color: #000;
            text-shadow: 0 0 4px #000;
            box-shadow: 0 0 4px #000;
        }
        #menu{
            height: 120px;
            width: 100%;
            display: none;
            background-color: #000;
            color:#FFFFFF;
            font-size: 17px;
            margin: 20px auto;
        }
        table {
            width: 100%;
        }
        th{
            padding-left: 10%;
        }
        .navmenu-list:hover{
            background-color: #FA6400;
        }
        .submenu{
            float: left;
            margin: 0 10% 0 20%;
        }
        .back{
            width: 70px;
            border: 1px solid #FA6400;
            border-radius: 20px;
            box-shadow: 0 0 #FB8332;
            color: #FA6400;
            text-shadow: 0 0 4px #FA6400;
            text-decoration: none;
            text-align: center;
            height: 50px;
            padding-top: 10px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .back:hover{
            background-color: #FB8332;
            color: #FFFFFF;
            text-shadow: 0 0 4px #FA6400;
            box-shadow: 0 0 4px #FB8332;
            border: 1px solid #FFFFFF;
        }
        .overview{
            float: left;
            margin-left: 40px;
        }
        footer{
            border-top: 1px solid black;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 70px;
            text-align: center;
            box-shadow: 0 0  3px black;
            font-size: 1.2rem;
            font-weight: 700;
            background-color: #FFFFFF;
            
        }
        html{
            height: 100%;
        }
        body{
            height: 100%;
        }
        main{
            margin: 0;
            padding-top: 10px;
            transition: all 0.6s ease-in-out 0s;
            transform: translate3d(0px,0px,0px);
            min-height: 91%;
        }
        #bag{
            background-color: #59CE8F;
            color:#000;
            width: 50px;
            height: 50px;
            position: fixed;
            top: 90%;
            left: 91%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }
        #bag-list{
            display: none;
            position: fixed;
            right:20px;
            bottom: 100px;
            width: 400px;
            height: 300px;
            background-color: #FFFFFF;
            border: 1px solid #000;
            border-radius: 20px;
            
        }
        #tb{
            margin-top: 10px;
            width: 80%;
            height: 200px;
            overflow: scroll;
        }
        #payment1, #payment2{
            width: 90%;
            display: flow-root;
            text-align: center;
            font-weight: 600;
            background-color: #59CE8F;
            height: 30px;
            border-radius: 20px;
        }
        .carousel-inner{
            height: 100%;
        }
        .login-page{
            background-image: url("hinh/arknights-bg2.jpeg");
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-origin: border-box;
            background-size: cover;
            height: 100%;
            margin-top: 90px;
            width: 100%;
            padding-top: 20px;
            padding-bottom: 30px;
            position: absolute;
        }
        .login{
            display: flex;
            flex-direction: column;
            top: 20%;
            left: 20%;
            line-height: 2;
            border: 1px solid;
            border-radius: 40px;
            padding: 20px;
            margin-top: 40px;
            border: 3px solid #FA6400;
            width: fit-content;
            background-color: #FFFFFF;
        }
        .login::after{
            content: "";
            clear: both;
            display: table;
        }
        .login:hover{
            outline: 10px solid #FA6400;
            outline-offset: 10px;
            border: none;
        }
        .login input[type=submit]{
            margin-top: 30px;
            text-align: center;
            outline-style: outset;
            background-color: #000000;
            width: 110px;
            font-size: 1.2rem;
            font-weight: 700;
            font-family: 'Graduate', cursive;
            color: #FFFFFF;
            outline: none;
            box-shadow: 0 0 5px;
        }
        .login table tr td a{
            display: block;
            margin-top: 30px;
            text-align: center;
            outline-style: outset;
            background-color: #FA6400;
            width: 110px;
            font-size: 1.2rem;
            font-weight: 700;
            font-family: 'Graduate', cursive;
            color: #000;
            outline: none;
            box-shadow: 0 0 5px;
            border-radius: 20px;
            float: left;
        }
        .login input[type=submit]:hover{
            background-color: #FA6400;
            box-shadow: 0 0 5px #000;
            color:#000;
        }
        .login table tr td a:hover{
            background-color: #000;
            box-shadow: 0 0 5px #FA6400;
            color:#FA6400;
        }
        .alert{
            display: none;
        }
        input:focus{
            outline-color: #FA6400;
            outline-width: medium;
        }
        input{
            outline-style: inset;
            outline-color: #FA6400;
            border-radius: 20px;
            padding-left: 10px;
            border: none;
            outline-width: medium;
        }
        table{
            caption-side: top;
        }
        table caption h1{
            color: #000;
            font-family: 'Graduate', cursive;
            text-shadow: 0 0 5px #FA6400;
            text-align: center;
        }
        .login table caption h1{
            color: #FA6400;
            font-family: 'Graduate', cursive;
            text-shadow: 0 0 5px;
        }
        
        .login table caption h1:hover {
            color: #000000;
            font-family: 'Graduate', cursive;
            text-shadow: 0 0 5px #FA6400;
        }
        #search{
            width: 100%;
            height: 50%;
            font-size: 1.2rem;
        }
        .cus_form input{
            outline: none;
            border-radius: 10px;
            border: 1px solid #333;
        }
        @media screen and (max-width: 1100px) {
            .list2{
                margin-top: 10%;
            }
            .list{
                margin-top: 10%;
                
            }
        }
        </style>
</head>
<body>
    <header>
        <h1 align="center"><a href="danhsachxe2.php">Sport & Muscle Car</a></h1>
        <button id="butt" onclick="func()">=</button>
        <div id="menu">
            <table cellspacing="40">
                <tr>
                    <th style="width:30%">Sport car</th>
                    <th style="width:30%">Muscle car</th>
                    <th style="width:30%">Login</th>
                </tr>
                <tr>
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Sport&type=Chevrolet" class="nav-item">Chevrolet</a></td>
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Muscle&type=Chevrolet" class="nav-item">Chevrolet</a></td>
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Login&type=Login" class="nav-item">Login</a></td>
                    <!-- <td id="logout" style="display: none;padding-left:15%;" class="navmenu-list"><a href=""  class="nav-item"></a></td>  -->
                </tr>
                <tr>
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Sport&type=BMW" class="nav-item">BMW</a></td>
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Muscle&type=BMW" class="nav-item">BMW</a></td>
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Login&type=Signin" class="nav-item">Sign in</a></td>
                </tr>
                <tr>
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Sport&type=Lamborghini" class="nav-item">Lamborgini</a></td>
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Muscle&type=Lamborghini" class="nav-item">Lamborgini</a></td>
                    <td style="padding-left:7%;" class="navmenu-list"><form method="get" style='width:70%'><input type='text' placeholder='Search' id='search' name='p' onkeyup='searching(this.value)'></form></td>
                </tr>
                <tr>    
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Sport&type=Other" class="nav-item">Other</a></td>
                    <td style="padding-left:15%;" class="navmenu-list"><a href="?page=Muscle&type=Other" class="nav-item">Other</a></td>
                </tr>
            </table>
        </div>
    </header>
    <?php require("dsx2.php");
    if(empty($_GET["page"])&&$_GET["p"] == ""){
        echo '<div style="width:100%;top:100px;margin-bottom:10%;" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">';
        echo '<div class="carousel-inner">';
        echo '<div class="carousel-item active">';
        echo '<img src="'.$ds2[1]->car_img.'" class="d-block w-100" alt="...">';
        echo "</div>";
        for($i = 2 ; $i <count($ds2);$i++){
            echo'<div class="carousel-item">';
            echo '<img src="'.$ds2[$i]->car_img.'" class="d-block w-100">';
            echo '</div>';
        }
        echo '</div>';
        echo '<button style="margin:auto;"class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">';
        echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
        echo '<span class="visually-hidden">Previous</span>';
        echo '</button>';
        echo '<button style="margin:auto;"class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">';
        echo    '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
        echo    '<span class="visually-hidden">Next</span>';
        echo '</button>';
        echo '</div>';
    }
    ?>

    <main class="mb-3">
        <?php
        if(isset($_GET["page"])){
            $pa = $_GET["page"];
            $login = $_GET["login"];
            switch($pa){
                case "Sport": case "Muscle":
                    require("Sport2.php");
                    break;
                case "detail": 
                    require("chitiet2.php");
                    break;
                case "danhsach":
                    require("lietke2.php");
                    break;
                case "Login":
                        require("Login.php");
                        break;
                case "Payment":
                        require("Payment.php");
                        break;
            }
        }else{
            require("lietke2.php");
        }
        ?>
        
    </main>
    <?php
    if(empty($_GET["page"]||$_GET["page"] == "danhsach")){
        echo '<button id="bag">';
        echo '  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">';
        echo '  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z"/></svg></button>';
        echo '  <div id="bag-list">';
        echo "      <div id='tb'>";
        echo '      <table id="list" cellpadding="7">';
        echo '      </table></div>';
        echo '  <p style="font-weight:700; float:right;margin-right:50px;">TOTAL:&emsp;&emsp;&emsp; <font color="red">$</font><span style="color:red" id="total"></span></p>';
        if($_GET["login"]==true){
            echo '  <a id="payment1">Payment</a></div>';
        }else{
            echo '  <a id="payment2">Payment</a></div>';
        }
        echo "</div>";
    }
    ?>
    <footer>
        &copy; Cat Tuong 2022
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
    <script src="main2.js">
    </script>
</body>
</html>