<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thay thế từ trong chuỗi</title>
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
        $str = "";$str1="";$word1="";$word2="";$output="";$tb="";
        if(isset($_POST["submit"])){
            $str = $_POST["str"];
            $word1 = $_POST["word1"];
            $word2 = $_POST["word2"];
        if(!empty($str)&&!empty($word1)&&!empty($word2)){
            $str1 = str_replace($word1,$word2,$str);
        }
        else{
            $tb = "Nhập thiếu";
        };
    }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>THAY THẾ TỪ TRONG CHUỖI</caption>
            <tr>
                <td>Chuỗi : </td>
                <td><input type="text" name="str" value="<?php echo $str ?>"></td>
            </tr>
            <tr>
                <td>Từ gốc : </td>
                <td><input type="text" name="word1" value="<?php echo $word1 ?>"></td>
            </tr>
            <tr>
                <td>Từ thay thế : </td>
                <td><input type="text" name="word2" value="<?php echo $word2 ?>"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="submit" value="Thay thế"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input style="width:100%;background-color:#F9CCC8;color:red;font-weight:700;" type="text" name="str1" value="<?php echo $str1 ?>" readonly></td>
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
