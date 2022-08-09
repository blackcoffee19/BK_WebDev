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
        
        $str = "";$ho="";$tendem="";$ten = "";$tb="";
        if(isset($_POST["submit"])){
            $str = $_POST["str"];
        if(!empty($str)){
            $str1 = explode(" ",$str);
            $ho .= $str1[0];
            for($i = 1; $i < count($str1)-1;$i++){
                $tendem .= $str1[$i]." ";
            };
            $ten .= $str1[count($str1)-1];
        }
        else{
            $tb = "Nhập thiếu";
        };
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
                <td>Họ : </td>
                <td><input style="width:200px;" type="text" name="ho" value="<?php echo $ho ?>" readonly></td>
            </tr>
            <tr>
                <td>Tên đệm : </td>
                <td><input style="width:200px;"  type="text" name="tendem" value="<?php echo $tendem ?>" readonly></td>
            </tr>
            <tr>
                <td>Tên : </td>
                <td><input style="width:200px;"  type="text" name="ten" value="<?php echo $ten ?>" readonly></td>
            </tr>
            <tr>
                <td align="center" colspan="3"><input type="submit" name="submit" value="Tìm kiếm"></td>
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
