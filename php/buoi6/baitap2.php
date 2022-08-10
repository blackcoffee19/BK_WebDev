<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tính nam nhuan</title>
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
        function namnhuan($year){
            if($year%4!=0){
                return false;
            }else{
                if($year%100 == 0 && $year%400 !=0 ){
                    return false;
                }else{
                    return true;
                };
            }
        }
        $year = "";$tb="";$kq="";
        if(isset($_POST["submit"])){
            $year = $_POST["year"];
            if(!empty($year)){
                if($year < 2000){
                    for($i =2000; $i>=$year;$i--){
                        if(namnhuan($i)){
                            $kq .= $i." ";
                        }
                    }
                }else{
                    for($i =2000;$i<=$year;$i++){
                        if(namnhuan($i)){
                            $kq.=$i." ";
                        }
                    }
                };
                if($kq!=""){
                    $kq .=" la nam nhuan.";
                }else{
                    $kq = "Khong co nam nhuan";
                };
            }else{
                $tb = "Bạn chưa nhập day so";
            }
        }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>TINH NAM NHUAN</b></caption>
            <tr>
                <td>Nhap nam: </td>
                <td><input type="text" name="year" value="<?php echo $year ?>"></td>

            </tr>
            <tr>
                <td colspan="2"><input type="text" name="ketqua" value="<?=$kq?>" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Tim nam nhuan"></td>
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
