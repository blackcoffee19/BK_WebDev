<!DOCTYPE html>
<html>
    <head>
        <title>Bài tập 3</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php 
            $num1 ="";
            $num2 = "";
            if(isset($_GET["submit"])){
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                $sum = $num1 * $num2;
            }
        ?>
        <center>
            <table style="border:1px solid #FFFFFF; border-collapse:collapse;width:400px;height:200px; margin:20px auto; background-color:#DFF6FF; box-shadow: 2px 2px 5px #47B5FF;font-size:1.2rem;" cellpadding="10">
                <form method="get" action="">
                    <tr>
                        <td><label for="num1">Số ngày lương: </label></td>
                        <td><input type="number" name="num1" value="<?php echo $num1;?>"></td>
                    </tr>
                    <tr>
                        <td><label for="num2">Lương 1 ngày: </label></td>
                        <td><input type="number" name="num2" value="<?php echo $num2;?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" value="Tính lương" style="width: 100px;height:50px; padding: 5px auto;text-align:center; font-size:1.2rem;"></td>
                    </tr>
                    <?php
                        if(isset($_GET["submit"]))
                        echo "<tr><td colspan='2'>Lương của bạn là ",$sum," nghìn đồng.</td></tr>"; 
                    ?>
                </form>
            </table>
        </center>
    </body>
</html>