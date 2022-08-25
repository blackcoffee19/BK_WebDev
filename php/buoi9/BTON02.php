<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Lịch</title>
    <style>
        td , select, input{text-align: center; font-size:16pt}
    </style>
</head>
<body>
<?php
    if (isset($_POST["inlich"]))
    {
        $thang = $_POST["thang"];
        $nam = $_POST["nam"];
        //khởi tạo mảng để lưu trữ ngày trong tháng
        $mang = array( array(0, 0, 0, 0, 0, 0, 0), 
                       array(0, 0, 0, 0, 0, 0, 0), 
                       array(0, 0, 0, 0, 0, 0, 0),
                       array(0, 0, 0, 0, 0, 0, 0), 
                       array(0, 0, 0, 0, 0, 0, 0), 
                       array(0, 0, 0, 0, 0, 0, 0));
        //Tính số ngày trong tháng
        $d = cal_days_in_month(CAL_GREGORIAN, $thang, $nam);
        //đưa lịch vào mảng
        //$w là số tuần lần lượt trong tháng
        $w=0;
        for($i=1; $i<=$d; $i++)
        {
            //tính ngày thứ $i là thứ mấy trong tuần
            $jd = cal_to_jd(CAL_GREGORIAN, $thang, $i, $nam);

            $wl = jddayofweek($jd,0);  // số 0 là CN, 1 là thứ 2, ...., 6 là thứ bảy
            //gán giá trị ngày vào mảng theo thứ trong tuần
            $mang[$w][$wl] = $i;
            if ($wl==6)
               $w = $w+1;
        }
        $jd = cal_to_jd(CAL_GREGORIAN, $thang, 1, $nam);
        $thangchu = jdmonthname($jd,1);
    }
?>
<form action="" method="post">
    <table width="400" border="1" cellspacing="0" cellpadding="5" align="center">
        <tr align="center">
            <td colspan="2">IN LỊCH</td>
        </tr>
        <tr>
            <td width="150">Chọn tháng:</td>
            <td width="250">
                <select name="thang">
                    <?php
                        for($i=1; $i<=12; $i++)
                        {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Chọn năm</td>
            <td>
                <select name="nam">
                    <?php
                        for($i=2000; $i<=2030; $i++)
                        {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="inlich" value=" In Lịch ">
            </td>
        </tr>
    </table>
</form>
<?php
if (isset($_POST["inlich"]))
{
    

   echo "<table width='500' align='center' border='1' background=''>";
   echo "<tr bgcolor='#FF5F55' align='center'><td colspan='7'>Tháng $thang / $thangchu - $nam</td></tr>";
   echo "<tr><td style='color:red'>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td style='color:blue'>Sat</td></tr>";
   for($i=0; $i<=5; $i++)
   {
        echo "<tr>";
        for($j=0; $j<=6; $j++)
        {
            if ($mang[$i][$j]==0)
            {
                echo "<td>&nbsp;</td>";
            }
            else if($j!=0 && $j!=6)
                echo "<td>". $mang[$i][$j]."</td>";
            else if ($j==0)
                echo "<td style='color:red'>". $mang[$i][$j]."</td>";
            else if($j==6)
                echo "<td style='color:blue'>" . $mang[$i][$j] . "</td>";
        }
        echo "</tr>";
   }
   echo "</table>";
}
?>
</body>
</html>