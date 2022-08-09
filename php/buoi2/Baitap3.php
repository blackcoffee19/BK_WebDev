<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 1</title>
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
                font-size: 1.5rem;
                color:#863500;
                font-weight: 600;
                background-color: #FDCB67;
                font-family: Arial, Helvetica, sans-serif;
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
        $a="";$b="";$ch="";$tb="";

        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            if(!empty($a)&&!empty($b)){
            $ch = sqrt($a**2 + $b**2);
            }else{
                $tb = empty($a)? "Nhập cạnh a!!!":"Nhập cạnh b!!!";
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>Cạnh huyền tam giác vuông</caption>
            <tr>
                <td>Cạnh A:</td>
                <td><input type="text" name="a" value="<?php echo $a ?>"></td>
            </tr>
            <tr>
                <td>Cạnh B:</td>
                <td><input type="text" name="b" value="<?php echo $b ?>"></td>
            </tr>
            <tr>
                <td>Cạnh huyền:</td>
                <td><input type="text" name="ch" style="background-color:#F9CCC8;" value="<?php echo $ch ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Tính"></td>
            </tr>
        </table>
        <?php
            if($tb != ""){
                echo "<div><p style='color:red;text-align:center;font-size:1.2rem;'>* {$tb}</p></div>";
            }
        ?>
    </form>
    </body>
</html>