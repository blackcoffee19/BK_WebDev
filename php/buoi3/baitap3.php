<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bài tập 3
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet"> 
        <style>
            html{
                font-size: 15px;
                font-family: Arial, Helvetica, sans-serif;
            }
            table{
                margin: 20px auto;
                border-collapse: collapse;
            }
            caption{
                font-size: 2.4rem;
                color:#ffffff;
                font-weight: 600;
                background-color: #019F9E;
            }
            input[type="submit"]{
                width: 100px;
                font-size: 1.1rem;
            }
            input[type="text"]{
                font-size: 1.2rem;
            }
            .som{
                width: 100px;
                border: 1px solid #000000;
                padding: 5px 20px;
                background-color: #CEE6FE;
                margin: 10px 5px;
                float: left;
            }
            .con{
		border: 1px solid green;
		margin: 0 20px;
            }
            .con::after{
                content: "";
                clear: both;
                display: table;
            }
        </style>
    </head>
    <body>
    <?php
        $a="";$b="";$tich = "";$tb="";
        
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
        }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption>IN BẢNG CỬU CHƯƠNG</caption>
            <tr>
                <td>Bắt đầu từ:</td>
                <td><input type="text" name="a" value="<?php echo $a ?>"></td>
            </tr>
            <tr>
                <td>Kết thúc tại:</td>
                <td><input type="text" name="b" value="<?php echo $b ?>"></td>
            </tr>
            <tr>
                <td>
                    <td colspan="2"align="center"><input type="submit" name="submit" value="In bảng cửu chương"></td>
                </td>
            </tr>
        </table>
        <?php
            if(is_numeric($a) && is_numeric($b)&&!empty($a)&&!empty($b)){
                $tb="Kết quả sau khi <i><b>In bảng cửu chương</b></i>";            
                echo "<p style='color:red;text-align:center;'>$tb</p>";
                echo "<div class='con'>";
                for($i = $a; $i <= $b; $i++){
                    echo "<div  class='som'>";
                    for($j = 1; $j <=10;$j++){
                        $tich = $i *$j;
                        echo "<p>{$i}x{$j}={$tich}</p>";
                    };
                    echo "</div>";
                };
                echo "</div>";
             }else{
                if(isset($_POST["submit"])){
                    $tb="Vui lòng nhập số cho cả 2 số ";
                    echo "<p style='color:red;text-align:center;'>$tb</p>";
                }
             }
        ?>
    </form>
    </body>
</html>
