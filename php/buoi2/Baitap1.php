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
                border-radius: 10px;
                width: 50px;
            }
            input[type="text"]{
                font-size: 1.2rem;
            }
        </style>
    </head>
    <body>
    <?php
        $bk="";$dt="";$cv="";$tb="";
        $pi = 3.14;
        if(isset($_POST["submit"])){
            $bk = $_POST["bk"];
        if(!empty($bk)&&is_numeric($bk))
        {$dt = $bk**2 * $pi;
        $cv = 2*$pi*$bk;
        }else{
            $tb = !empty($bk)? "Cần nhập số!":"Nhập số không phải chữ";
        };
    }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>Diện tích và chu vi hình tròn</caption>
            <tr>
                <td>Bán kính:</td>
                <td><input type="text" name="bk" value="<?php echo $bk ?>"></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dt" style="background-color:#F9CCC8;" value="<?php echo $dt ?>" readonly></td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input type="text" name="cv" style="background-color:#F9CCC8;" value="<?php echo $cv ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Tính"></td>
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