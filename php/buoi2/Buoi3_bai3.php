<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 3</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet"> 
        <style>
            html{
                font-size: 15px;
            }
            table{
                margin: 20px auto;
                border-collapse: collapse;
                background-color: #FEEBCA;
            }
            caption{
                font-size: 3.4rem;
                color:#FFFFFF;
                font-weight: 600;
                background-color: #CD3567;
                font-family: 'Italianno', cursive;
            }
            td{
                font-family: Arial, Helvetica, sans-serif;
            }
            input[type="submit"]{
                font-size: 1.1rem;
                border-radius: 10px;
                width: 50px;
            }

            input[type="text"]{
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>
    <?php
        $hk1="";$hk2="";$dtb="";$kq ="";$hl="";$tb = "";
        if(isset($_POST["submit"])){
            $hk1 = $_POST["hk1"];
            $hk2 = $_POST["hk2"];
            if(!empty($hk1) && !empty($hk2)){
                $dtb = ($hk1+$hk2)/2;
                if($dtb >= 8){
                    $hl = "Giỏi";
                    $kq = "Được lên lớp";
                }elseif($dtb >=6.5 && $dtb < 8){
                    $hl = "Khá";
                    $kq = "Được lên lớp";
                }elseif($dtb >= 5 && $dtb <6.5){
                    $hl = "Trung bình";
                    $kq = "Được lên lớp";
                }else{
                    $hl ="Yếu";
                    $kq = "Ở lại lớp";
                };
            }else{
                if(empty($hk1)||empty($hk2)){
                    $tb = "Cần điểm cả học kỳ 1 và học kỳ 2 !!";
                }else{
                    $tb = "Cần nhập số điểm từ 0 - 10 !!";
                }
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>Tìm số lớn hơn</caption>
            <tr>
                <td>Điểm HK1:</td>
                <td><input type="text" name="hk1" value="<?php echo $hk1 ?>"></td>
            </tr>
            <tr>
                <td>Điểm HK2:</td>
                <td><input type="text" name="hk2" value="<?php echo $hk2 ?>"></td>
            </tr>
            <tr>
                <td>Điểm trung bình:</td>
                <td><input type="text" name="dtb" value="<?php echo $dtb ?>" readonly></td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td><input type="text" name="kq" value="<?php echo $kq ?>" readonly></td>
            </tr>
            <tr>
                <td>Xếp loại học lực:</td>
                <td><input type="text" name="hl" value="<?php echo $hl ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Xem kết quả"></td>
            </tr>
        </table>
        <?php
            if($tb != ""){
                echo "<div><p style='text-align:center; color: red; font-size:1.2rem;'>*{$tb}</p</div>";
            } 
        ?>
    </form>
    </body>
</html>