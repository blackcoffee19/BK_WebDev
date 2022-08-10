<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tao va tinh mang</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <style>
            html{
                font-size: 15px;
            }
            table{
                margin: 20px auto;
                border-collapse: collapse;
    		    background-color: #ABE3FF;
                width: 80%;
            }
            caption{
                font-size: 2.4rem;
                color:#000000;
                font-weight: 600;
                background-color: #005CB6;
                font-family: 'Montserrat', sans-serif;
            }
            .hightlight {
                background-color: #c3c3c3;
            }
            td{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 18px;
            }
            input[type="submit"]{
                font-size: 1.1rem;
                width: 200px;
            }
		input[type="text"]{
		    width: 100%;
            height: 30px;
            font-size: 1.1rem;
	    }
        </style>
    </head>
    <body>
    <?php
        $numbers = "";$mang="";$arr=[];$tb="";$num="";
        if(isset($_POST["submit"])){
            $numbers = $_POST["numbers"];
            $num = $_POST["num"];
            if(!empty($numbers)&&!empty($num)){
                $arr = explode(",",$numbers);
                $mang = implode(",",$arr);
                for($i=0;$i<count($arr);$i++){
                    if($arr[$i] == $num){
                        $kq .="Tim thay {$num} tai vi tri thu ". $i+1;
                    }
                };
                if($kq == ""){
                    $kq = "Khong tim thay so {$num} trong mang";
                }
            }else{
                $tb = "Bạn chưa nhập hoa";
            }
        }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>TIM KIEM</b></caption>
            <tr>
                <td>Nhap mang: </td>
                <td><input type="text" name="numbers" value="<?php echo $numbers ?>"></td>
            </tr>
            <tr>
                <td>Nhap so can tim: </td>
                <td><input type="text" name="num" value="<?php echo $num ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="TIM KIEM"></td>
            </tr>
            <tr>
                <td>Mang: </td>
                <td><input type="text" name="mang" value="<?=$mang?>" readonly></td>
            </tr>
            <tr>
                <td>Ket qua tim kiem:</td>
                <td><input type="text" name="tong" value="<?=$kq?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center">(Cac phan tu trong mang se cach nhau bang dau ",")</td>
            </tr>
        </table>
        <?php
        if($tb != ""){
            echo"<p align='center'>*{$tb}</p>";
        }
        ?>
    </form>
    </body>
</html>
