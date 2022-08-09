<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 6</title>
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
            }
            caption{
                font-size: 3.4rem;
                color:#FFFFFF;
                font-weight: 600;
                background-color: #CD3567;
                font-family: 'Italianno', cursive;
            }
            td{
                font-family: Arial, Helvetica, sans-serif;
            }
            input[type="submit"]{
                border-radius: 10px;
                width: 100px;
            }

            input[type="text"]{
                width: 100px;
                font-size: 1.1rem;
            }
        </style>
    </head>
    <body>
    <?php
        $day="";$month="";$year="";$tb = "";
        if(isset($_POST["submit"])){
            $day = $_POST["day"];
            $month = $_POST["month"];
            $year = $_POST["year"];
            if(!empty($day) && !empty($month)&&!empty($year)){
                if($month>0&&$month<=12){
                    $dow = date("l", mktime(0,0,0,$month,$day,$year));
                switch($dow){
                    case "Monday":
                        $tb = "Ngày {$day} tháng {$month} năm {$year} là ngày Thứ Hai";
                        break;
                    case "Tuesday":
                        $tb = "Ngày {$day} tháng {$month} năm {$year} là ngày Thứ Ba";
                        break;
                    case "Wednesday":
                        $tb = "Ngày {$day} tháng {$month} năm {$year} là ngày Thứ Tư";
                        break;
                    case "Thursday":
                        $tb = "Ngày {$day} tháng {$month} năm {$year} là ngày Thứ Năm";
                        break;
                    case "Friday":
                        $tb = "Ngày {$day} tháng {$month} năm {$year} là ngày Thứ Sáu";
                        break;
                    case "Saturday":
                        $tb = "Ngày {$day} tháng {$month} năm {$year} là ngày Thứ Bảy";
                        break;
                    case "Sunday":
                        $tb = "Ngày {$day} tháng {$month} năm {$year} là ngày Chủ Nhật";
                        break;
                    default:
                        $tb = "Lỗi, không xác định được ngày!";
                }}else{
                    $tb = "Lỗi, không xác định được ngày!";
                }
            }else{
                $tb = "Cần cả ngày tháng năm, bằng số !!";
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>Tìm thứ trong tuần</caption>
            <tr style="background-color:#FECCCB;">
                <td>Ngày/tháng/năm: </td>
                <td><input type="text" name="day" value="<?php echo $day ?>">/<input type="text" name="month" value="<?php echo $month ?>">/<input type="text" name="year" value="<?php echo $year ?>"></td>
                <td><input type="submit" name="submit" value="Tìm thứ trong tuần"></td>
            </tr>
            <tr style="background-color: #FEEBCA;">
                <td colspan="3" align="center"><input style="background-color:#FEEBCA; color:red;width:100%;" type="text" name="tb" value="<?php echo $tb ?>"></td>
            </tr>
            <tr>
            </tr>
        </table>
    </form>
    </body>
</html>