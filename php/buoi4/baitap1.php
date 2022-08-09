<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đọc số</title>
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
                color:#000;
                font-weight: 600;
                background-color: #005CB6;
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
        function docso($num,$i){
            switch($num){
                case 1:
                    if($i == 0){
                        return "mốt";
                    }else{
                    return "một";}
                    break;
                case 2: 
                    return "hai";
                    break;
                case 3:
                    return "ba";
                    break;
                case 4:
                    return "bốn";
                    break;
                case 5:
                    return "năm";
                    break;
                case 6:
                    return "sáu";
                    break;
                case 7:
                    return "bảy";
                    break;
                case 8:
                    return "tám";
                    break;
                case 9:
                    return "chín";
                    break;
                default:
                    return " ";
                    break;
            }
        };
        $n2 = "";$n="";$output="";$tb="";
        if(isset($_POST["submit"])){
            $n = $_POST["n"];
        if(!empty($n)&&is_numeric($n))
        {
            $n2 = $n;
            if($n <0 && $n>999){
                $tb = "Nhập số từ 0->999";
            }
            else{
                for($i = 2; $i>=0;$i--){
                    $num = floor($n/pow(10,$i));
                    $output .= docso($num,$i);
                    $n = $n%pow(10,$i); 
                    if($num != 0 && !strstr($output,"trăm")){
                        $output .= " trăm ";
                    }elseif($num != 0 && $n >=0&& !strstr($output," mươi")){
                        $output .= " mươi ";
                    };
                }
            }
        }else{
            $tb = !empty($bk)? "Cần nhập số!":"Nhập số không phải chữ";
        };
    }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>ĐỌC SỐ</caption>
            <tr style="text-align: center;">
                <td>Nhập số(0->999): </td>
                <td><input type="text" name="n" value="<?php echo $n2 ?>"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="submit" value="Các số nguyên tố <= N"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input style="width:100%;background-color:#F9CCC8;color:red;font-weight:700;height:50px;" type="text" name="output" value="<?php echo $output ?>" readonly></td>
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
