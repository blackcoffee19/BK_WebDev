<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tính điểm trung bình</title>
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
    		    background-color: #018F9D;
            }
            caption{
                font-size: 2.4rem;
                color:#FFFFFF;
                font-weight: 600;
                background-color: #019F9E;
                font-family:Arial, Helvetica, sans-serif;
            }
            .hightlight {
                background-color: #c3c3c3;
            }
            td{
                font-family: Arial, Helvetica, sans-serif;
            }
            input[type="submit"]{
                font-size: 1.1rem;
                width: 200px;
            }
		input[type="text"]{
		font-size:1.1rem;
	}
        </style>
    </head>
    <body>
    <?php
        function diemtrungbinh($a,$b,$c){
            return ($a+$b+$c)/3;
        } 
        function Xeploai($num){
            if($num <= 3 && $num >0){
                return "Yếu";
            }elseif($num >3 && $num <=6.5){
                return "Trung bình";
            }elseif($num > 6.5 && $num <8){
                return "Khá";
            }elseif($num >= 8 &&$num <=10) {
                return "Giỏi";
            }else{
                return "Error";
            };
        }   
        $a="";$b ="";$c ="";$xl="";$dtb ="";$tb="";
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
        if((!empty($a)&&is_numeric($a))&&(!empty($b)&&is_numeric($b))&&(!empty($c)&&is_numeric($c)))
        {
            $dtb = number_format(diemtrungbinh($a,$b,$c),2);
            $xl = Xeploai($dtb);
        }else{
            $tb = !empty($bk)? "Cần nhập số!":"Nhập số không phải chữ";
        };
    }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>TÍNH ĐIỂM</caption>
            <tr style="text-align: center;">
                <td>Toán: </td>
                <td><input type="text" name="a" value="<?php echo $a ?>"></td>
            </tr>
            <tr style="text-align: center;">
                <td>Lý: </td>
                <td><input type="text" name="b" value="<?php echo $b ?>"></td>
            </tr>
            <tr style="text-align: center;">
                <td>Hóa: </td>
                <td><input type="text" name="c" value="<?php echo $c ?>"></td>
            </tr>
            <tr>
                <td align="center">Điểm trung bình: </td>
                <td><input style="background-color:#F9CCC8;color:red;" type="text" name="dtb" value="<?php echo $dtb ?>" readonly></td>
            </tr>
            <tr>
                <td align="center">Xếp loại: </td>
                <td><input style="background-color:#F9CCC8;color:red;" type="text" name="xl" value="<?php echo $xl ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Tính điểm"></td>
            </tr>
        </table>
        <?php
            if($bk != ""){
                echo "<div><p style='text-align:center;color:red;font-size:1.2rem;'>* {$tb}</p></div>";
            } 
        ?>
    </form>
    </body>
</html>
