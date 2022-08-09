<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 4</title>
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
        $a="";$b="";$uscln="";$bscnn="";$tb="";
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            if(!empty($a)&&is_numeric($a)&&!empty($b)&&is_numeric($b))
            {
                $uscln = 0;$bscnn = 0;
                $i = 1;
                do{
                    if($a%$i == 0 && $b%$i == 0){
                        $uscln = $i;
                    };
                    if(($b*$i)%$a == 0 && $bscnn == 0){
                        $bscnn = $b*$i;
                    }
                    $i++;
                }while($i<=$a);
            }else{
            $tb = !empty($bk)? "Cần nhập số!":"Nhập số không phải chữ";
        };
    }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>ƯỚC SỐ CHUNG LỚN NHẤT</caption>
            <tr>
                <td>Số A: </td>
                <td><input type="text" name="a" value="<?php echo $a ?>"></td>
            </tr>
            <tr>
                <td>Số B: </td>
                <td><input type="text" name="b" value="<?php echo $b ?>"></td>
            </tr>
            <tr>
                <td>USCLN:</td>
                <td><input type="text" name="uscln" style="background-color:#F9CCC8;" value="<?php echo $uscln ?>" readonly></td>
            </tr>
            <tr>
                <td>BSCNN:</td>
                <td><input type="text" name="bscnn" style="background-color:#F9CCC8;" value="<?php echo $bscnn ?>" readonly></td>
            </tr>
            <tr>
                <td align="center" colspan="3"><input type="submit" name="submit" value="Tìm USCLN và BSCNN"></td>
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
