<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tách họ và tên</title>
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
                color:#863500;
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
        $str = "";$kq = "";$tb="";
        if(isset($_POST["submit"])){
            $str = $_POST["str"];
            if(!empty($str)){
                $str2 = trim($str);
                while(strpos($str2," ")){
                    $kq .= substr($str2,0,strpos($str2," "))." ";
                    $str2 = trim(substr($str2,strpos($str2," "),strlen($str2)));
                    $i++;
                };
                $kq .= $str2;
            }
        }else{
            $tb = "Bạn chưa nhập";
        }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>TÁCH HỌ VÀ TÊN</b></caption>
            <tr>
                <td>Họ và têm : </td>
                <td colspan="2"><input type="text" name="str" value="<?php echo $str ?>"></td>
            </tr>
            <tr>
                <td>Kết quả : </td>
                <td><input type="text" name="kq" value="<?= $kq?>" readonly></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="submit" value="Lọc"></td>
            </tr>
        </table>
        <?php
            if($str == ""){
                echo "<div><p style='text-align:center;color:red;font-size:1.2rem;'>* {$tb}</p></div>";
            } 
        ?>
    </form>
    </body>
</html>
