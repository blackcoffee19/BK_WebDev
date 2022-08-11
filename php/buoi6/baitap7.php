<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thay the</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <style>
            html{
                font-size: 15px;
            }
            table{
                margin: 20px auto;
                border-collapse: collapse;
    		    background-color: #ABE3FF;
                width: 80%;
            }
            caption{
                font-size: 2.4rem;
                color:#000000;
                font-weight: 600;
                background-color: #005CB6;
                font-family: 'Montserrat', sans-serif;
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
		    width: 100%;
            height: 30px;
            font-size: 1.1rem;
	    }
        </style>
    </head>
    <body>
    <?php
    function tangdan($arr){
        $temp = 0;
        for($i=0;$i<count($arr)-1;$i++){
            for($j = $i+1;$j<count($arr);$j++){
                if($arr[$j]<$arr[$i]){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        };
        return implode(", ",$arr);
    };
    function giamdan($arr){
        $temp = 0;
        for($i=0;$i<count($arr)-1;$i++){
            for($j = $i+1;$j<count($arr);$j++){
                if($arr[$j]>$arr[$i]){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        };
        return implode(", ",$arr);
    };
        $numbers = "";$mang1="";$mang2="";$arr=[];$tb="";
        if(isset($_POST["submit"])){
            $numbers = $_POST["numbers"];
            if(!empty($numbers)){
                $arr = explode(",",$numbers);
                $mang1 = tangdan($arr);
                $mang2 = giamdan($arr);
            }else{
                $tb = "Bạn chưa nhập hoa";
            }
        }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>SAP XEP MANG</b></caption>
            <tr>
                <td>Nhap mang: </td>
                <td><input type="text" name="numbers" value="<?php echo $numbers ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="THAY THE"></td>
            </tr>
            <tr>
                <td>Tang dan: </td>
                <td><input type="text" name="mang1" value="<?=$mang1?>" readonly></td>
            </tr>
            <tr>
                <td>Giam dan: </td>
                <td><input type="text" name="mang2" value="<?=$mang2?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center">(Cac phan tu trong mang se cach nhau bang dau ",")</td>
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
