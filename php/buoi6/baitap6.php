<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thay the</title>
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
        $numbers = "";$mang1="";$mang2="";$arr=[];$tb="";$num1="";$num2="";
        if(isset($_POST["submit"])){
            $numbers = $_POST["numbers"];
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            if(!empty($numbers)&&!empty($num1)&&!empty($num2)){
                $arr = explode(",",$numbers);
                $mang1 = implode(" ",$arr);
                for($i=0;$i<count($arr);$i++){
                    if($arr[$i] == $num1){
                        $arr[$i] =$num2;
                    }
                };
                $mang2 = implode(" ",$arr);
            }else{
                $tb = "Bạn chưa nhập hoa";
            }
        }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>THAY THE</b></caption>
            <tr>
                <td>Nhap cac phan tu: </td>
                <td><input type="text" name="numbers" value="<?php echo $numbers ?>"></td>
            </tr>
            <tr>
                <td>Nhap gia tri can thay the: </td>
                <td><input type="text" name="num1" value="<?php echo $num1 ?>"></td>
            </tr>
            <tr>
                <td>Nhap gia tri thay the: </td>
                <td><input type="text" name="num2" value="<?php echo $num2 ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="THAY THE"></td>
            </tr>
            <tr>
                <td>Mang cu: </td>
                <td><input type="text" name="mang1" value="<?=$mang1?>" readonly></td>
            </tr>
            <tr>
                <td>Mang sau khi thay the: </td>
                <td><input type="text" name="mang2" value="<?=$mang2?>" readonly></td>
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
