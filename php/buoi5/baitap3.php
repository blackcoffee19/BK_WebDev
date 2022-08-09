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
                font-size: 18px;
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
        $day = "";$month = "";$year="";$tb="";$tday="";$tb1 ="";$tb="";
        if(isset($_POST["submit"])){
            $day = $_POST["day"];
            $month = $_POST["month"];
            $year = $_POST["year"];
            if(!empty($day)&&!empty($month)&&!empty($year)){
                $daynow = mktime(0,0,0,$month,$day,$year);
                $tday = date('D',$daynow);
                $mday = date('M',$daynow);                                
                if(($tday == 'Sun'&&$mday =="May") && ($day > 7 &&$day<=14)){
                    $tb1="Đây là ngày của mẹ!!";
                }else {
                    $tb1="Không phải là ngày của mẹ!!";
                } 
            }else{
                $tb = "Bạn chưa nhập ngày tháng năm sinh";
            }
        }
    ?>
    <?= $tday2?> 
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>NGÀY CUÓIO TUẦN</b></caption>
            <tr>
                <td>Ngày: </td>
                <td><input type="text" name="day" value="<?php echo $day ?>"> tháng: </td>
                <td><input type="text" name="month" value="<?php echo $month ?>"> năm: </td>
                <td><input type="text" name="year" value="<?php echo $year ?>"></td>
                <td><input type="submit" name="submit" value="Thông báo"></td>
            </tr>
            <tr>
                <?php 
                if($tb1 !=""){
                    $dis = date('d/m/Y',$daynow);
                    echo "<td colspan='5' align='center'>{$tb1}<br>{$dis}</td>";
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
