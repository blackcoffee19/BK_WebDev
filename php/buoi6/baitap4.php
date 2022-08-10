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
        $numbers = "";$mang="";$arr=[];$tb="";$gtln="";$gtnn="";$sum=0;
        if(isset($_POST["submit"])){
            $numbers = $_POST["numbers"];
            if(!empty($numbers)){
                for($i = 0;$i<$numbers;$i++){
                    array_push($arr,rand(0,99));
                };
                $mang = implode(" ",$arr);
                $gtln =$arr[0];
                $gtnn =$arr[0];
                $sum+=$arr[0];
                for($i=1;$i<count($arr);$i++){
                    if($arr[$i]<$gtnn){
                        $gtnn = $arr[$i];
                    }
                    if($arr[$i]>$gtln){
                        $gtln =$arr[$i];
                    };
                    $sum += $arr[$i];
                };
            }else{
                $tb = "Bạn chưa nhập hoa";
            }
        }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>TAO VA TINH MANG</b></caption>
            <tr>
                <td>Nhap so phan tu: </td>
                <td><input type="text" name="numbers" value="<?php echo $numbers ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Them vao gio"></td>
            </tr>
            <tr>
                <td>Mang: </td>
                <td><input type="text" name="mang" value="<?=$mang?>" readonly></td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mang: </td>
                <td><input type="text" name="gtln" value="<?=$gtln?>" readonly></td>
            </tr>
            <tr>
                <td>TTNN (MIN) trong mang: </td>
                <td><input type="text" name="gtnn" value="<?=$gtnn?>" readonly></td>
            </tr>
            <tr>
                <td>Tong mang:</td>
                <td><input type="text" name="tong" value="<?=$sum?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center">(<font color="red">Ghi chu:</font> Cac phan tu trong mang se co gia tri tu 0-20)</td>
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
