<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 2</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet"> 
        <style>
            html{
                font-size: 15px;
                font-family: Arial, Helvetica, sans-serif;
            }
            table{
                margin: 20px auto;
                border-collapse: collapse;

            }
            caption{
                font-size: 2.4rem;
                color:#ffffff;
                font-weight: 600;
                background-color: #019F9E;
            }
            input[type="submit"]{
                width: 100px;
                font-size: 1.1rem;
            }
            input[type="text"]{
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>
    <?php
        $a="";$tich = "";$tb="";
        
        if(isset($_POST["submit"])){
            $a = $_POST["a"];}
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>BẢNG CỬU CHƯƠNG</caption>
            <tr style="background-color: #C7EEEB;">
                <td>Cửu chương:</td>
                <td><input type="text" name="a" value="<?php echo $a ?>"></td>
                <td><input type="submit" name="submit" value="Thực hiện"></td>
            </tr>
            <tr><td style="background-color:#019F9E; color:#ffffff;text-align:center;font-size:1.2rem;font-weight:700;" colspan="3">KẾT QUẢ</td></tr>
            <tr style="background-color:#E0F0FF;">
                <td colspan="3"style="padding-left:45%;">
                    <?php
                        if(!empty($a)&&is_numeric($a))
                        {
                            $tich = $a;
                            for($i = 1; $i <= 10;$i++){
                                $tich *= $i;
                                echo "<p>{$a}x{$i} = {$tich}</p>";
                                $tich = $a;
                            }
                        }else{
                            $tb = !empty($bk)? "Cần nhập số!":"Nhập số không phải chữ";
                        };
                    ?>
                </td>
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