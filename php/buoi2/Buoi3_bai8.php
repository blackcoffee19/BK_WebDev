<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 8</title>
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
                background-color: #FECCCB;
            }
            caption{
                font-size: 3.4rem;
                color:#000000;
                font-weight: 600;
                text-transform: uppercase;
                background-color: #FE5C5F;
                font-family: 'Italianno', cursive;
            }
            td{
                font-family: Arial, Helvetica, sans-serif;
            }
            input[type="submit"]{
                font-size: 1.1rem;
                width: 50px;
            }

            input[type="text"]{
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>
    <?php
    function is_leap_year($year){
        $bool = true;
        if($year%4 != 0){
            $bool = false;
        }else{
            if($year%100 == 0 && $year%400 != 0){
                $bool = false;
            }else {
                $bool = true;
            };
        };
        return $bool;
    }
        $month="";$year="";$tb = "";
        if(isset($_POST["submit"])){
            $month = $_POST["month"];
            $year = $_POST["year"];
            if(!empty($month) && !empty($year)){
                switch($month){
                    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                        $tb = "Tháng {$month} năm {$year} có 31 ngày";
                        break;
                    case 4: case 6: case 9: case 11:
                        $tb = "Tháng {$month} năm {$year} có 30 ngày";
                        break;
                    case 2:
                        if(is_leap_year($year)){
                            $tb = "Tháng {$month} năm {$year} có 29 ngày";
                        }else {
                            $tb = "Tháng {$month} năm {$year} có 28 ngày";
                        };
                        break;
                    default :
                        $tb = "Nhập sai tháng!!";
                }
            }else{
                if(empty($month)){
                    $tb = "Cần nhập tháng !!";
                }elseif(empty($year)){
                    $tb = "Cần nhập năm !!";
                }
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>Tính ngày trong tháng</caption>
            <tr>
                <td>Tháng/năm: </td>
                <td><input style="width:150px;"type="text" name="month" value="<?php echo $month ?>"> / <input style="width:150px;" type="text" name="year" value="<?php echo $year ?>"></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input style="width:300px;" type="submit" name="submit" value="Tính số ngày"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input style="background-color:antiquewhite;color:red;width:500px;" type="text" name="tb" value="<?php echo $tb ?>" readonly></td>
            </tr>
        </table>
    </form>
    </body>
</html>