<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 2</title>
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
                background-color: #C7EEEB;
            }
            caption{
                color: blue;
                font-size: 3.4rem;
                color:#863500;
                font-weight: 600;
                background-color: #98CCFD;
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
        $hr="";$tb = "";$tb1="";
        if(isset($_POST["submit"])){
            $hr = $_POST["hr"];
            if(!empty($hr) && is_numeric($hr)){
                if($hr >= 0 && $hr <13){
                    $tb = "Chào buổi sáng!";
                }elseif($hr >= 13 && $hr <18){
                    $tb = "Chào buổi chiều!";
                }elseif($hr >= 18 && $hr <24){
                    $tb = "Chào buổi tối!";
                }
            }else{
                if(empty($hr)){
                    $tb1 = "Cần nhập giờ !!";
                }else{
                    $tb1 = "Giờ theo số từ 0-23 !!";
                }
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>CHÀO THEO GIỜ</caption>
            <tr>
                <td>Nhập giờ:</td>
                <td><input type="text" name="hr" value="<?php echo $hr ?>"></td>
            </tr>
            <?php 
            if($tb != ""){
                echo "<tr><td colspan='2'><p style='color:red;'>{$tb}</p></td></tr>";
            }
            ?>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Tìm"></td>
            </tr>
        </table>
        <?php
            if($tb1 != ""){
                echo "<div><p style='text-align:center; color: red; font-size:1.2rem;'>*{$tb1}</p</div>";
            } 
        ?>
    </form>
    </body>
</html>