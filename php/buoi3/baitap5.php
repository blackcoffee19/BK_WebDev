<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 5</title>
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
		width:90%;
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
		font-size:1.1rem;
	}
        </style>
    </head>
    <body>
    <?php
        $n="";$output="";$tb="";
        if(isset($_POST["submit"])){
            $n = $_POST["n"];
        if(!empty($n)&&is_numeric($n))
        {
            for($i=1;$i<=$n;$i++){
                $j = 2;
                while($j <= $i){
                    if( $i%$j == 0 &&$j==$i){
                        $output .= "{$i} ";
                    } elseif($i%$j == 0){
                        break;
                    };
                    $j++;
                };
            };
            $output .= "là các số Nguyên tố";
        }else{
            $tb = !empty($bk)? "Cần nhập số!":"Nhập số không phải chữ";
        };
    }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>TÌM SỐ NGUYÊN TỐ</caption>
            <tr style="text-align: center;">
                <td>Nhập N: </td>
                <td><input type="text" name="n" value="<?php echo $n ?>"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input type="submit" name="submit" value="Các số nguyên tố <= N"></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input style="width:100%;background-color:#F9CCC8;color:red;font-weight:700;height:50px;" type="text" name="output" style="background-color:#F9CCC8;overflow:visible;" value="<?php echo $output ?>" readonly></td>
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
