<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Bài tập 2</title>
</head>
<body>
    <?php
        $a = ""; $b = "";$c = "";$kq = "";$tb="";$delta;
        if(isset($_POST["submit"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            if(is_numeric($a) && is_numeric($b) && is_numeric($c)){
                if($a != 0){
                    $delta = pow($b,2) - 4* $a *$c;
                    if($delta < 0 ){
                        echo $delta."<br>";
                        $kq = "Phương trình vô nghiệm";
                    }elseif($delta == 0){
                        echo $delta."<br>";
                        $kq = "Pt có nghiệm kép= ";
                        $x = (-$b)/(2*$a);
                        $kq .= number_format($x,2);
                    }else{
                        $x1 = (-$b + sqrt($delta))/(2*$a);
                        $x2 = (-$b - sqrt($delta))/(2*$a);
                        $kq = "Hai nghiệm p/b: x1 = ".number_format($x1,2)." & x2 = ".number_format($x2,2);
                    };
                }else{
                    $kq = "Pt có 1 nghiệm: ". number_format((-$c)/($b),2);
                }
            }else{
                $tb = "Vui lòng nhập số";
            };
        }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-2"></div>
            <div class="col-md-6 col-sm-8">
            <form action="" method="post">
                <div class="row" style="background-color: #F7C564; color:#641F02;"><p class="h3 text-center">Phương trình bậc hai</p></div>
                <div class="row" style="background-color: #FEEBCA;">
                    <div class="col-md-3 mb-3 mt-3"><label class="col-form-label">Phương trình: </label></div>
                    <div class="col-md-9 row mb-3 mt-3">
                        <input class="col-md-2 col-form-control" style="color:red;" name="a" value="<?php echo ($a != "")? $a:""; ?>" require>
                        <label class="col-md-2 col-form-label" for="a">x<sup>2</sup> +</label>
                        <input class="col-md-2 col-form-control" style="color:red;" name="b" value="<?php echo ($b != "")? $b:""; ?>" require>
                        <label class="col-md-2 col-form-label" for="b">x +</label>
                        <input class="col-md-2 col-form-control" style="color:red;" name="c" value="<?php echo ($c != "")? $c:""; ?>" require>
                        <label class="col-md-2 col-form-label"> =0</label>
                    </div>
                    <div class="col-md-3 mb-3 "><label class="col-form-label">Nghiệm: </label></div>
                    <div class="col-md-9 mb-3 row"><input class="col-12" type="text" style="color:red;font-weight:700;" value="<?php echo $kq?>" readonly></div>
                    <div class="col-12 text-center mb-3"><input class="btn btn-success" type="submit" value="Giả phương trình" name="submit"></div>
                    <?php  echo ($tb != "") ?'<div class="col-12 text-center mb-3 alert alert-danger">'.$tb.'</div>':""?>
                </div>
            </form>
            </div>
            <div class="col-md-3 col-sm-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>