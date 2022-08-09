<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 1</title>
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
                background-color: #FEEBCA;
            }
            caption{
                font-size: 2.4rem;
                color:#863500;
                font-weight: 600;
                background-color: #FDCB67;
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
                font-size: 1.2rem;

            }
            .in{
                display: inline;
                width: 100px;
            }
        </style>
    </head>
    <body>
    <?php
        $a="";$b="";$tong1="";$tong2="";$tong3="";$tich="";
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
        if(!empty($a)&&is_numeric($a)&&!empty($b)&&is_numeric($b))
        {
            $tong1 = 0;$tong2 = 0;$tong3 = 0;$tich=1;
            for($i = $a; $i <= $b;$i++){
                $tong1 += $i;
                $tich *=$i; 
                if($i%2 == 0){
                    $tong2 += $i;
                } else{
                    $tong3 += $i;
                };
            }
        }else{
            $tb = !empty($bk)? "Cần nhập số!":"Nhập số không phải chữ";
        };
    }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>TÍNH TOÁN TRÊN DÃY SỐ</caption>
            <tr>
                <td>Giới hạn của dãy số: </td>
                <td class="in"><label for="a">Số bắt đầu: </label><input style="width:50px;"type="text" name="a" value="<?php echo $a ?>"></td>
                <td class="in"><label for="b">Số kết thúc: </label><input style="width:50px;"type="text" name="b" value="<?php echo $b ?>"></td>
            </tr>
            <tr>
                <td style="color:red;">Kết quả:</td>
            </tr>
            <tr>
                <td>Tổng các số:</td>
                <td><input type="text" name="tong1" style="background-color:#F9CCC8;" value="<?php echo $tong1 ?>" readonly></td>
            </tr>
            <tr>
                <td>Tích các số:</td>
                <td><input type="text" name="tich" style="background-color:#F9CCC8;" value="<?php echo $tich; ?>" readonly></td>
            </tr>
            <tr>
                <td>Tổng các số chẵn:</td>
                <td><input type="text" name="tong2" style="background-color:#F9CCC8;" value="<?php echo $tong2 ?>" readonly></td>
            </tr>
            <tr>
                <td>Tổng các số lẽ:</td>
                <td><input type="text" name="tong3" style="background-color:#F9CCC8;" value="<?php echo $tong3 ?>" readonly></td>
            </tr>
            <tr>
                <td align="center" colspan="3"><input type="submit" name="submit" value="Tính toán"></td>
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