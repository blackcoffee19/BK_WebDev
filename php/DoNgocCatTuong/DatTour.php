<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt tour</title>
    <style>
        table{
            width: 100%;
            background-color: #EAF1F9;
            font-family: Verdana, Tahoma, sans-serif;
        }
        td{
            font-size: 1.1rem;
        }
        img{
            width: 200px;
        }
        input[type=text]{
            width: 100%;
            font-size: 1.2rem;
        }
        input[type=submit]{
            text-align: center;
            font-size: 1.2rem;
        }
        textarea{
            width: 100%;
            font-size: 1.1rem;
        }
        select{
            width: 100%;
            font-size: 1.2rem;
        }
        h1,caption{
            font-size: 1.5rem;
            text-transform: uppercase;
            width: 100%;
            background-color: #6582A0;
            color:azure;
            font-weight: 700;
            height: 50px;
            padding-top: 10px;
        }
        div{
            margin: 10px auto;
            width: 50%;
            background-color: #EAF1F9;
            line-height: 1;
        }
        p{
            padding: 0 20px;
        }
    </style>
</head>
<body>
    <?php
    function tinhGiaTien1($dd,$sum){
        switch($dd){
            case "1":
                $sum += 6;
                break;
            case "2": case "3":
                $sum += 5.5;
                break;
            case "4":
                $sum += 5;
                break;
            case "5": case "9":
                $sum += 3;
                break;
            case "6":
                $sum += 3.5 ;
                break;
            case "7":
                $sum += 4;
                break;
            case "8":
                $sum += 4.5;
                break;
        };
        return $sum;
    };
    function tinhGiaTien2($pt,$sum){
        switch($pt){
            case "Máy bay":
                $sum *= 1;
                break;
            case "Tàu hỏa":
                $sum *= 0.95;
                break;
            case "Tàu thủy": case "Xe hơi":
                $sum *= 0.9;
                break;
            case "Xe máy":
                $sum *= 0.8;
                break;
        };
        return $sum;
    };
    function tinhGiaTien3($sl,$sum){
        if($sl<10){
            $sum = $sum*$sl;
            $sum *= 1;
        }elseif($sl>=10 && $sl<20){
            $sum = $sum*$sl;
            $sum *= 0.95;
        }elseif($sl >=20 && $sl<50){
            $sum = $sum*$sl;
            $sum *= 0.9;
        }else{
            $sum = $sum*$sl;
            $sum *= 0.8;
        };
        return $sum;
    };
    function diadiem($dd){
        $str ="";
        switch($dd){
            case "1":
                $str .= "Hà Nội - Hạ Long - SaPa";
                break;
            case "2": 
                $str .= "Hà Nội - Hải Phòng";
                break;    
            case "3":
                $str .="Hà Nội - Điện Biên";
                break;
            case "4":
                $str .="Huế - Bạch Mã - Đà Nẵng";
                break;
            case "5": 
                $str .="Nha Trang - Đà Lạt";
                break;    
            case "6":
                $str .="Buôn Mê Thuột - Gia Lai - Kontum";
                break;
            case "7":
                $str .="TPHCM - Phú Quốc";
                break;
            case "8":
                $str .="TPHCM - Cần Thơ - Cà Mau";
                break;
            case "9":   $str .="TPHCM - Mỹ Tho";
                break;
        };
        return $str;
    }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $sum1 = 0;$sum2=0;$listtour ="";$vehicle="";$sl="";$name="";$lh="";$sdt="";$other="";$tb="";$dl="";
    if(isset($_GET["submit"])){
        $listtour = $_GET["listtour"];
        $vehicle = $_GET["vehicle"];
        $sl = $_GET["sl"];
        $name= $_GET["name"];
        $lh=$_GET["lh"];
        $sdt= $_GET["sdt"];
        $other = $_GET["other"];
        if(!empty($listtour)&&!empty($vehicle)&&is_numeric($sl)&&!empty($name)&&!empty($lh)&&is_numeric($sdt)){
            $sum2 = tinhGiaTien1($listtour,$sum2);
            $sum2 = tinhGiaTien2($vehicle,$sum2);
            $sum1 = tinhGiaTien3($sl,$sum2);
            $sum1 *= 1000000;
            $sum2 *= 1000000;
            $dl = diadiem($listtour);
        }else{
            $tb .= "Bạn chưa nhập đủ dữ liệu";
        }
    }
    ?>
    <form method="get">
        <table cellspacing="20">
            <caption>Đăng ký Tour du lịch</caption>
            <tr>
                <td>Tên Tour: </td>
                <td><select name="listtour">
                    <option value="1">Hà Nội - Hạ Long - SaPa</option>
                    <option value="2">Hà Nội - Hải Phòng</option>
                    <option value="3">Hà Nội - Điện Biên</option>
                    <option value="4">Huế - Bạch Mã - Đà Nẵng</option>
                    <option value="5">Nha Trang - Đà Lạt</option>
                    <option value="6">Buôn Mê Thuột - Gia Lai - Kontum</option>
                    <option value="7">TPHCM - Phú Quốc</option>
                    <option value="8">TPHCM - Cần Thơ - Cà Mau</option>
                    <option value="9">TPHCM - Mỹ Tho</option>
                </select></td>
                <td rowspan="4"><img src="hinh/arknights-bg12.png" alt="beach"></td>
            </tr>
            <tr>
                <td>Ngày khởi hành: </td>
                <td><input type='text' name="dateStart" value="<?php echo date("d/m/Y");?>" readonly></td>
            </tr>
            <tr>
                <td>Phương tiện di chuyển: </td>
                <td><select name="vehicle">
                    <option value="Máy bay">Máy bay</option>
                    <option value="Tàu hỏa">Tàu hỏa</option>
                    <option value="Tàu thủy">Tàu thủy</option>
                    <option value="Xe hơi">Xe hơi</option>
                    <option value="Xe máy">Xe máy</option>
                </select></td>
            </tr>
            <tr>
                <td>Số lượng đăng ký:</td>
                <td><input type="text" name="sl" value="<?php echo $sl;?>"></td>
            </tr>
            <tr>
                <td>Tên khách hàng:</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>Liên hệ theo địa chỉ:</td>
                <td><input type="text" name="lh" value="<?php echo $lh;?>"></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><input type="text" name="sdt" value="<?php echo $sdt;?>"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p align="center">Những yêu cầu kèm theo:</p>
                </td>
            </tr>
            <tr>
                <td colspan="3"><textarea name="other" rows="6"><?php echo $other ?></textarea></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" name="submit" value="Đăng ký tour"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET["submit"])){
            echo "<div><h1 align='center'>Thông tin đặt tour</h1>";
            echo "<p>Khách hàng đã chọn Tour: <b><i>".$dl."</i></b></p>";
            echo "<p>Ngày khởi hành: ".date('d/m/Y')."</p>";
            echo "<p>Phương tiện: {$vehicle}</p>";
            echo "<br><p>Số lượng đăng ký: <b><i>{$sl} khách</i></b></p>";
            echo "<p>Giá tour/khách: {$sum2}</p>";
            echo "<p>Tổng tiền cho {$sl} khách: {$sum1}</p>";
            echo "<br><p>Thông tin khách hàng:</p>";
            echo "<p>Họ và tên: <b><i>{$name}</i></b> - Địa chỉ: {$lh}</p>";
            echo "<p>Số điện thoại: {$sdt}</p>";
            echo "<br><p><i>Các yêu cầu kèm theo:</i></p>";
            echo $other;
        }
    ?>
</body>
</html>