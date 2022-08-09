<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 7</title>
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
        $a="";$b = "";$tb = "";$image="";
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            if(!empty($a) && is_numeric($a)){
                $can = ($a%10 + 6)%10;
                if($a >= 2000){
                    $chi = ($a%100+4)%12;
                }else{
                    $chi = ($a%100)%12;
                };
                    switch($can){
                        case 0:
                            $b = "Giáp ";
                            break;
                        case 1:
                            $b = "Ất ";
                            break;
                        case 2:
                            $b = "Bính ";
                            break;
                        case 3:
                            $b = "Đinh ";
                            break;
                        case 4:
                            $b = "Mậu ";
                            break;
                        case 5:
                            $b = "Kỷ ";
                            break;
                        case 6:
                            $b = "Canh ";
                            break;
                        case 7:
                            $b = "Tân ";
                            break;
                        case 8:
                            $b = "Nhâm ";
                            break;
                        case 9:
                            $b = "Quý ";
                            break;
                        default:
                            $b = "Error ";
                            break;
                    };
                    switch($chi){
                        case 0:
                            $b .= "Tý";
                            $image="ty.webp";
                            break;
                        case 1:
                            $b .= "Sửu";
                            $image="suu.webp";
                            break;
                        case 2:
                            $b .= "Dần";
                            $image="dan.webp";
                            break;
                        case 3:
                            $b .= "Mão";
                            $image="mao.webp";
                            break;
                            case 4:
                            $b .= "Thìn";
                            $image="thin.webp";
                            break;
                        case 5:
                            $b .= "Tị";
                            $image="ti.webp";
                            break;
                        case 6:
                            $b .= "Ngọ";
                            $image="ngo.webp";
                            break;
                        case 7:
                            $b .= "Mùi";
                            $image="mui.webp";
                            break;
                        case 8:
                            $b .= "Thân";
                            $image="than.webp";
                            break;
                        case 9:
                            $b .= "Dậu";
                            $image="dau.webp";
                            break;
                        case 10:
                            $b .= "Tuất";
                            $image="tuat.webp";
                            break;
                        case 11:
                            $b .= "Hợi";
                            $image="hoi.webp";
                            break;
                        default:
                            $b .= "Error"; 
                    }
            }else{
                $tb = "Số năm sai!!";
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>TÍNH NĂM ÂM LỊCH</caption>
            <tr>
                <td align="center">Năm dương lịch</td>
                <td></td>
                <td align="center">Năm âm lịch</td>
            </tr>
            <tr>
                <td><input type="text" name="a" value="<?php echo $a ?>"></td>
                <td><input style="background-color:antiquewhite;color:red;" type="submit" name="submit" value="=>"></td>
                <td><input style="background-color:antiquewhite;color:red;"type="text" name="b" value="<?php echo $b ?>" readonly></td>
            </tr>
            <tr>
            </tr>
        </table>
        <?php
        echo "<center>";
        if($tb != ""){
            echo "<div><p align='center'style='color:red;'>*{$tb}</p></div>";
        }elseif($image != ""){
            echo "<img src='$image' alt='12 con giap' width='200px'>";
        } 
        echo "</center>";
        ?>
    </form>
    </body>
</html>