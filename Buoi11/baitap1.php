<!DOCTYPE html>
<html>
    <head>
        <title>Bài tập 1</title>
        <meta charset="UTF-8">
    </head>
    <body bgcolor="#06283D">
        <center>
            <table style="border:1px solid #FFFFFF; border-collapse:collapse;width:400px;height:200px; margin:20px auto; background-color:#DFF6FF; box-shadow: 2px 2px 5px #47B5FF;font-size:1.2rem;" cellpadding="10">
                <form method="post" action="baitap2.php">
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
                </form>
            </table>
        </center>
    </body>
</html>