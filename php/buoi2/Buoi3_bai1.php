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
        $a="";$b="";$max="";$tb = "";
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            if(!empty($a) && !empty($b)){
                if($a >= $b){
                    $max = $a;
                }else{
                    $max = $b;
                }
            }else{
                if(empty($a)){
                    $tb = "Cần nhập số A !!";
                }else{
                    $tb = "Cần nhập số B !!";
                }
            }
        };
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>Tìm số lớn hơn</caption>
            <tr>
                <td>Số A:</td>
                <td><input type="text" name="a" value="<?php echo $a ?>"></td>
            </tr>
            <tr>
                <td>Số B:</td>
                <td><input type="text" name="b" value="<?php echo $b ?>"></td>
            </tr>
            <tr>
                <td>Số lớn hơn:</td>
                <td><input type="text" name="max" value="<?php echo $max ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Tìm"></td>
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