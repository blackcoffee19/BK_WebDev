<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt chỗ</title>
    <style>
        .main{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }
        h2{
            background-color: red;
            color:#FEC71B;
            text-transform: uppercase;
            margin: 0;
        }
        form{
            margin: 0 auto;
            width:600px;
            height: max-content;
            line-height: 3;
            background-color: #FEDFC0;
            display: flex;
            flex-direction: column;
        }
        .new{
            margin: 0 auto;
            width:500px;
            height: max-content;
            background-color: #FEDFC0;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        form>div{
            width: 90%;
            align-self: center;
        }
        input[type=text]{
            width: 100px;
        }
        input[type=submit]{
            margin: 0 auto;
            border-radius: 0;
            height: 30px;
            width: 100px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <?php
        $number="";$dateS="";$party="";$place="";$customer="";$dcll="";$ages="";$gender="";$knowing="";$order="";$tb="";
        if(isset($_POST["submit"])){
            $number=$_POST["number"];
            $dateS = $_POST["dateS"];
            $party=$_POST["party"];
            $place=$_POST["place"];
            $customer=$_POST["customer"];
            $dcll=$_POST["dcll"];
            $ages=$_POST["ages"];
            $gender=$_POST["gender"];
            $knowing=$_POST["knowing"];
            $order=$_POST["order"];
            if(empty($number)||empty($dateS)||empty($party)||empty($place)||empty($customer)||empty($dcll)||empty($ages)||empty($gender)||empty($knowing)||empty($order)){
                $tb .= "<p><font color='red'>Bạn chưa nhập đủ thông tin</font></p>";
            }
        }
    ?>
    <div class="main">
        <form method="post">
            <h2 align="center">Thông tin đặt chỗ</h2>
            <div><label for="number"><font color="red">Số khách tham dự bữa tiệc của quý khách:</font></label>
            <input type="text" name="number" value="<?php echo $number?>" style="width:50px;">&nbsp;
            <label for="dateS"><font color="red">Ngày</font></label><input type="text" name="dateS" value="<?php echo $dateS?>"><br>
            <label for="party">Loại tiệc: </label>
            <input type="checkbox" name="party" value="morning"><label for="party">Tiệc sáng </label>
            <input type="checkbox" name="party" value="afternoon"><label for="party">Tiệc trưa </label>
            <input type="checkbox" name="party" value="evening"><label for="party">Tiệc tối </label><br>
            <label for="place">Địa điểm: </label><input type="radio" name="place" value="inside"><label for="place">Trong nhà </label><input type="radio" name="place" value="outside"><label for="place">Ngoài trời </label><br>
            <label for="customer">Tên quý khách: </label><input type="text" name="customer" value="<?php echo $customer;?>">&emsp;&emsp;
            <label for="dcll">Địa chỉ liên lạc: </label><input type="text" name="dcll" value="<?php echo $dcll; ?>"><br>
            <label for="ages">Độ tuổi: </label>
            <select id="ages" name="ages">
                <option value="19 đến 34 tuổi">Từ 19 đến 34 tuổi</option>
                <option value="35 đến 65 tuổi">Từ 35 đến 65 tuổi</option>
            </select>&emsp;&emsp;&emsp;
            <label for="gender">Giới tính</label><input type="radio" name="gender" value="male">Nam<input type="radio" name="gender" value="female">Nữ<input type="radio" name="gender" value="other">Khác<br>
            <label for="knowing">Quý khách biết đến nhà hàng của chúng tôi qua: </label>
            <select name="knowing" size="3" multiple>
                <option value="Báo chí">Báo chí</option>
                <option value="Đài phát thanh">Đài phát thanh</option>
                <option value="Thương mại">TM</option>
            </select><br>
            <label for="order">Các yêu cầu khác của quý khách: </label><br>
            <textarea name="order" rows="5" cols="60"><?php echo $order;?></textarea></div>
            <input type="submit" name="submit" value="Đặt chỗ">
        </form>
    </div>
    <?php 
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    if(isset($_POST["submit"])){echo "<div class='main'>";
    echo "<h2 style='width:540px;height:50px;padding-top: 20px;' align='center'>Thông tin đặt chỗ</h2>";
    echo "<div class='new'><h4>Thông tin khách hàng</h4><br>";
    echo "<p>Họ tên: {$customer} - Độ tuổi: Từ {$ages}/ Giới tính: {$gender}</p><br>";
    echo "<p>Địa chỉ: {$dcll}</p><br>";
    echo "<h4>Thông tin đặt chỗ</h4><br>";
    echo "<p>Số khách tham gia bữa tiệc: {$number}-Ngày đặt tiệc: {$dateS}</p>";
    echo "<p>Loại tiệc: - {$party}/Địa điểm: {$place}</p><br>";
    echo "<h4>Các yêu cầu kèm theo:</h4><br>";
    echo $order."<br>";
    echo "<p align='center'><i>Quý khách biết đến nhà hàng của chúng tôi qua:".$knowing."</i></p><br>";
    echo "<p>Chúng tôi đã nhận được thông tin đặt chỗ của quý khách vào lúc ".date('H:i:s - d/m/Y')." </p></div>";
    echo "</div>";}
    ?>
</body>
</html>