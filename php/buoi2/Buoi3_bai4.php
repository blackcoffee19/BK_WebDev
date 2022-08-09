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
                font-size: 3.4rem;
                color:#863500;
                font-weight: 600;
                background-color: #FDCB67;
                font-family: 'Italianno', cursive;
            }
            td{
                font-family: Arial, Helvetica, sans-serif;
            }
            input[type="submit"]{
                width: 150px;
            }

            input[type="text"]{
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>
    <?php
        $a="";$b="";$c="";$tb = "";$tb2 = "";
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            function tamgiacvuong($a, $b){
                $c = sqrt($a**2 +$b**2);
                return $c;
            }
            if(!empty($a) && !empty($b)&&!empty($c)){
                if(($a +$b)>= $c || ($a + $c)>= $b||($b +$c) >= $a){
                    if($a == $b && $a == $c){
                        $tb="Tam giác đều";
                    }
                    elseif($a == $b || $a == $c || $b == $c){
                        if($a == tamgiacvuong($b,$c) || $b == tamgiacvuong($a,$c) || $c == tamgiacvuong($a,$b)){
                            $tb = "Tam giác vuông cân";
                        }else{
                        $tb = "Tam giác cân";}
                    }elseif($a == tamgiacvuong($b,$c) || $b == tamgiacvuong($a,$c) || $c == tamgiacvuong($a,$b)){
                        $tb = "Tam giác vuông";
                    }else{
                        $tb = "Tam giác bình thường";
                    }
                }else{
                    $tb2 = "Không phải là 1 tam giác";
                }
            }else{
                $tb2 = "Cần nhập số A,B,C !!";
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>Nhận dạng tam giác</caption>
            <tr>
                <td>Cạnh 1:</td>
                <td><input type="text" name="a" value="<?php echo $a ?>"></td>
                <td><p>(cm)</p></td>
            </tr>
            <tr>
                <td>Cạnh 2:</td>
                <td><input type="text" name="b" value="<?php echo $b ?>"></td>
                <td><p>(cm)</p></td>
            </tr>
            <tr>
                <td>Cạnh 3:</td>
                <td><input type="text" name="c" value="<?php echo $c ?>"></td>
                <td><p>(cm)</p></td>
            </tr>
            <tr>
                <td>Loại tam giác:</td>
                <td><input type="text" name="tb" value="<?php echo $tb ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" name="submit" value="Nhận dạng"></td>
            </tr>
        </table>
        <?php
            if($tb2 != ""){
                echo "<div><p style='text-align:center; color: red; font-size:1.2rem;'>*{$tb2}</p</div>";
            } 
        ?>
    </form>
    </body>
</html>