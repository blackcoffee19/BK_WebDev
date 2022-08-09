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
        $ch="";$sc="";$sm="";$dg = "";$tt = "";$tb = "";
        if(isset($_POST["submit"])){
            $ch = $_POST["ch"];
            $sc = $_POST["sc"];
            $sm = $_POST["sm"];
            $dg = $_POST["dg"];
            if(!empty($sc) && !empty($sm) && !empty($dg)){
                $tt = ($sm - $sc)*$dg;
                if(empty($ch))
                        $tb = "Bạn chưa nhập tên chủ hộ";
            }else{
                if(empty($sc)||empty($sm)){
                    $tb = "Cần có cả hai chỉ số cũ và mới !!";
                };
                if(empty($dg)){
                    $tb = "Bạn chưa nhập đơn giá tiền điện!!";
                }
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>Thanh toán tiền điện</caption>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="ch" value="<?php echo $ch ?>"></td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td><input type="text" name="sc" value="<?php echo $sc ?>"></td>
                <td>(KW)</td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="sm" value="<?php echo $sm ?>"></td>
                <td>(KW)</td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="dg" value="<?php echo $dg ?>" ></td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td><input type="text" name="tt" style="background-color:#F9CCC8;" value="<?php echo $tt ?>" readonly></td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" name="submit" value="Tính"></td>
            </tr>
        </table>
        <?php
            if($tb != ""){
                echo "<div><p style='text-align:center; color: red; font-size:1.2rem;'>*{$tb}</p</div>";
            } 
        ?>
    </form>
    </body>
</html>