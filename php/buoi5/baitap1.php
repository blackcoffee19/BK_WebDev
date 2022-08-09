<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tính ngày sinh nhật</title>
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
                color:#000000;
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
		    width: 70px;
            height: 30px;
            font-size: 1.1rem;
	    }
        </style>
    </head>
    <body>
    <?php
        $day = "";$month = "";$year="";$tb="";$nextbrd="";$age ="";$today="";
        if(isset($_POST["submit"])){
            $day = $_POST["day"];
            $month = $_POST["month"];
            $year = $_POST["year"];
            if(!empty($day)&&!empty($month)&&!empty($year)){
                $today = mktime(0,0,0,date("m"),date("d"),date("Y"));
                $brthday = mktime(0,0,0,$month,$day,$year);
                $age = floor(($today-$brthday)/(60*60*24*365));
                $nextbrd = mktime(0,0,0,$month,$day,date("Y")) - $today;
                if($nextbrd <0){
                    $nextbrd = mktime(0,0,0,$month,$day,date("y")+1) - $today;
                };
                $nextbrd /= (60*60*24); 
            }else{
                $tb = "Bạn chưa nhập ngày tháng năm sinh";
            }
        }
    ?>
    
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>NGÀY SINH</b></caption>
            <tr>
                <td>Ngày/tháng/năm sinh : </td>
                <td><input type="text" name="day" value="<?php echo $day ?>">/</td>
                <td><input type="text" name="month" value="<?php echo $month ?>">/</td>
                <td><input type="text" name="year" value="<?php echo $year ?>"></td>
                <td><input type="submit" name="submit" value="Thông báo"></td>
            </tr>
            <tr>
                <?php 
                if($age != ""&&$nextbrd != ""){
                    echo "<td colspan='5' align='center'>Năm nay bạn {$age} tuổi<br>Còn {$nextbrd} là đến ngày sinh nhật của bạn.</td>";
                }
                ?>
            </tr>
        </table>
        <?php
        if($tb != ""){
            echo"<p align='center'>*{$tb}</p>";
        }
        ?>
    </form>
    </body>
</html>
