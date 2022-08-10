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
    $flower = "";$tb="";$kq="";$tb2="";$giohoa= array();
        if(isset($_POST["submit"])){
            $flower = $_POST["flower"];
            if(!empty($flower)){
                foreach($giohoa as $hoa){
                    if(strcasecmp($hoa,$flower))
                    {
                        $tb2 ="da co hoa trong gio";
                        $kq = implode(" --",$giohoa);
                        break;
                    }
                };
                if($kq ==""){
                    array_push($giohoa,$flower);
                    $kq = implode(" --",$giohoa);
                }
            }else{
                $tb = "Bạn chưa nhập hoa";
            }
        }else{
                    
        }
    ?>
    <form method="post" action="">
        <table cellspacing="10" cellpadding="10">
            <caption><b>MUA HOA</b></caption>
            <tr>
                <td>Nhap ten hoa: </td>
                <td><input type="text" name="flower" value="<?php echo $flower ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Them vao gio"></td>
            </tr>
            <tr>
                <td>Gio hoa: </td>
                <?php if($tb2 != ""){
                    echo "<td>$tb2</td>";
                }
                ?>
            </tr>
            <tr>
                <td colspan="2"><input type="textarea" style="width:100%" cols="8" rows="3" name="ketqua" value="<?=$kq?>" readonly></td>
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
