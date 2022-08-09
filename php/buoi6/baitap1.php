<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tính ngày sinh nhật</title>
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
    		    background-color: #ABE3FF;
            }
            caption{
                font-size: 2.4rem;
                color:#000000;
                font-weight: 600;
                background-color: #005CB6;
                font-family: 'Italianno', cursive;
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
		    width: 70px;
            height: 30px;
            font-size: 1.1rem;
	    }
        </style>
    </head>
    <body>
    <?php
        $numbers = "";$tb="";$kq=0;
        if(isset($_POST["submit"])){
            $numbers = $_POST["numbers"];
            if(!empty($numbers)){
                $numbers = explode(",",$numbers);
                foreach($numbers as $num){
                   $kq+=$num;
                }
            }else{
                $tb = "Bạn chưa nhập day so";
            }
        }
    ?>
    <?= $tday2?> 
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>NHAP VA TINH TREN DAY SO</b></caption>
            <tr>
                <td>Nhap day so: </td>
                <td><input type="text" name="numbers" value="<?php echo $numbers ?>"> <font color="red">(*)</font></td>

            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Tong day so"></td>
            </tr>
            <tr>
                <td>Tong day so</td>
                <td><input type="text" name="dayso" value="<?=$kq?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><font color="red">(*)</font> Cac so duoc nhap cach nha bang dau ","</td>
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
