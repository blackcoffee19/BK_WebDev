<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đệ quy</title>
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
    function res($num1,$num2 = 0, $bo = false){
        if($num1 >5){
            return $num2;
        }elseif($bo){
            $nu= $num2 +$num1;
            echo "<p align='center'>Kết quả {$num1} + {$num2} là : {$nu}</p>";
            return res($num1 +1,$nu,$bo);
        } else {
            $bo = ($num1 -1 == 0) ? true:false;
            $nu = $num2 +$num1;
            echo "<p align='center'>Kết quả {$num1} + {$num2} là : {$nu}</p>";
            return res($num1 -1,$nu,$bo);
        }
    }
    $test = "";$tb="";$kq="";
    if(isset($_POST["butt"])){
        $test = $_POST["test"];
    }
    ?> 
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>Đệ quy</b></caption>
            <tr>
                <td>Nhập số: </td>
                <td><input type="text" name="test" value="<?php echo $test ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="butt" value="Tính"></td>
            </tr>
            <tr>
                <td colspan="2">
                <?php 
                if(isset($_POST["butt"])){
                    $test = $_POST["test"];
                if(is_numeric($test) && $test>0){
                    $kq = res($test);
                    
                }else{
                    echo "Nhập số";
                }
                }
                ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <?php if($kq != ""){
                        echo "Kết quả là: {$kq}";
                    }
                    ?>
                </td>
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
