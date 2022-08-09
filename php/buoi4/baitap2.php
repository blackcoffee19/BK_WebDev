<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Giải phương trình bậc 2</title>
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
                font-size: 2.4rem;
                color:#863500;
                font-weight: 600;
                background-color: #FDCB67;
                font-family: 'Italianno', cursive;
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
        $a = "";$b="";$c="";$output="";$tb="";
    function giaiphuongtrinh($a,$b,$c){
        $kq="";
        $x1="";
        $x2="";
        if($a == 0 && $b != 0){
            $kq .= "Phương trình có 1 nghiệm duy nhất: ";
            $x1 = (-$c)/$b;
            $kq .= number_format($x1,2); 
        }elseif($a!=0){
            $del = pow($b,2) -4*$a*$c;
            if($del <0){
                $kq .="Phương trình vô nghỉệm";
            }elseif($del == 0){
                $kq .= "PT có nghiệm kép x1 = x2 =";
                $x1 = (-$b)/(2*$a);
                $kq .= number_format($x1,2);
            }else{
                $kq .= "PT có 2 nghiệm phân biệt: x1= ";
                $x1 = (-$b +sqrt($del))/(2*$a);
                $x2 = (-$b -sqrt($del))/(2*$a);
                $kq .= number_format($x1,2);
                $kq .= "\t x2= ".number_format($x2,2);
            }
        }else{
            $kq .= "Phương trình vô nghiệm";
        };
        return $kq;
    }
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
        if(!empty($a)&&is_numeric($a)&&!empty($b)&&is_numeric($b)&&!empty($c)&&is_numeric($c))
        {
            $output = giaiphuongtrinh($a,$b,$c);
        }else{
            $tb = !empty($a)? "Cần nhập số!":"Nhập số không phải chữ";
            $tb = !empty($b)? "Cần nhập số!":"Nhập số không phải chữ";
            $tb = !empty($c)? "Cần nhập số!":"Nhập số không phải chữ";
        };
    }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>GIẢI PHƯƠNG TRÌNH BẬC HAI</caption>
            <tr style="text-align: center;">
                <td>Phương trình: </td>
                <td><input style="width:50px;"type="text" name="a" value="<?php echo $a ?>"></td>
                <td>x<sup>2</sup> +</td>
                <td><input style="width:50px;"type="text" name="b" value="<?php echo $b ?>"></td>
                <td>x +</td>
                <td><input style="width:50px;"type="text" name="c" value="<?php echo $c ?>"></td>
                <td> = 0</td>
            </tr>
            <tr>
                <td>Nghiệm: </td>
                <td align="center" colspan="6"><input style="background-color:#FDFCCC;color:red;font-weight:700;font-size:13px;" type="text" name="output" value="<?php echo $output ?>" readonly></td>
            </tr>
            <tr>
                <td align="center" colspan="7"><input type="submit" name="submit" value="Giải phương trình"></td>
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
