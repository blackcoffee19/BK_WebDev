<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 5</title>
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
                background-color: #C7EEEB;
            }
            caption{
                color: blue;
                font-size: 3.4rem;
                color:#863500;
                font-weight: 600;
                background-color: #98CCFD;
                font-family: 'Italianno', cursive;
            }
            td{
                font-family: Arial, Helvetica, sans-serif;
            }
            input[type="submit"]{
                font-size: 1.1rem;
                border-radius: 10px;
                width: 50px;
            }

            input[type="text"]{
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>
    <?php
        $a="";$b = "";$tb = "";
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            if(!empty($a) && is_numeric($a)){
                if($hr < 0 && $hr > 9){
                    $tb = "Nhập số từ 0-9!!";
                }else{
                    switch($a){
                        case 0:
                            $b = "không";
                            break;
                        case 1:
                            $b = "một";
                            break;
                        case 2:
                            $b = "hai";
                            break;
                        case 3:
                            $b = "ba";
                            break;
                        case 4:
                            $b = "bốn";
                            break;
                        case 5:
                            $b = "năm";
                            break;
                        case 6:
                            $b = "sáu";
                            break;
                        case 7:
                            $b = "bảy";
                            break;
                        case 8:
                            $b = "tám";
                            break;
                        case 9:
                            $b = "chín";
                        default:
                            $tb = "Số chỉ từ 0-9!";
                    }
                }
            }else{
                $tb = "Cần nhập số từ 0-9!!";
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>CHÀO THEO GIỜ</caption>
            <tr>
                <td align="center">Nhập số (0-9)</td>
                <td></td>
                <td align="center">Bằng chữ</td>
            </tr>
            <tr>
                <td><input type="text" name="a" value="<?php echo $a ?>"></td>
                <td><input type="submit" name="submit" value="=>"></td>
                <td><input type="text" name="b" value="<?php echo $b ?>" readonly></td>
            </tr>
            <tr>
            </tr>
        </table>
        <?php
            if($tb != ""){
                echo "<div><p style='text-align:center; color: red; font-size:1.2rem;'>*{$tb}</p</div>";
            } 
        ?>
    </form>
    </body>
</html>