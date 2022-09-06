<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Bài tập 4</title>
</head>
<body>
    <?php 
        function tourName($tour){
            switch($tour){
                case "hn-hl-sp":
                    return "Hà Nội-Hạ Long-Sapa";
                    break;
                case "hn-tphcm":
                    return "Hà Nội-TP HCM";
                    break;
                case "hn-ld":
                    return "Hà Nội-Lâm Đồng";
                    break;
                default:
                    return "Error";
                    break;
            }
        };
        function Vehicle($pt){
            switch($pt){
                case "car":
                    return "Xe hơi";
                    break;
                case "plane":
                    return "Máy bay";
                    break;
                case "train":
                    return "Tàu hỏa";
                    break;
                default:
                    return "Error";
                    break;
            }
        }
        $name_tour ="";$start="";$pt ="";$sl;$guest_name="";$place="";$phone="";$other="";$tb="";
        $price = 5400000;
        $sum = 0;
        if(isset($_POST["submit"])){
            $name_tour = tourName($_POST["name_tour"]);
            $start = $_POST["start"];
            $pt = Vehicle($_POST["pt"]);
            $sl = $_POST["sl"];
            $guest_name = $_POST["guest_name"];
            $place = $_POST["place"];
            $phone = $_POST["phone"];
            $other = $_POST["other"];
            if(!is_numeric($phone)||!is_numeric($sl)){
                $sl = 0;
                $tb = "Error";
            };
            $sum += $sl*$price;
        }
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-lg-4"></div>
            <div class="col-md-8 col-lg-4 mt-2">
                <form action="" method="post">
                    <div class="row" style="background-color:#EAF1F9;">
                        <div class="col-12 pt-1 pb-1 font-monospace text-uppercase h3 text-center fw-bold" style="background-color:#607C96;color:#fff;">Thông tin đặt tour</div>
                        <div class="col-8 row">
                            <label for="name_tour" class="col-4 col-form-label">Tên Tour:</label>
                            <select name="name_tour" class="col-8 mb-3">
                                <option value="hn-hl-sp">Hà Nội-Hạ Long-Sapa</option>
                                <option value="hn-tphcm">Hà Nội-TP HCM</option>
                                <option value="hn-ld">Hà Nội-Lâm Đồng</option>
                            </select>
                            <label for="start" class="col-4">Ngày khởi hành:</label>
                            <input class="col-7 col-form-control mb-3" type="text" name="date" value="<?=$date?>" require>
                            <div class="col-1"></div>
                            <label for="pt" class="col-4 col-form-label">Phương tiện di chuyển</label>
                            <select class="col-3 mb-3" name="pt">
                                <option value="car">Xe hơi</option>
                                <option value="plane">Máy bay</option>
                                <option value="train">Tàu hỏa</option>
                            </select>
                            <div class="col-5"></div>
                            <label for="sl" class="col-4 col-form-label">Số lượng đăng ký</label>
                            <input class="col-4 col-form-control mb-3" name="sl" value="<?=$sl?>">
                            <div class="col-4"></div>
                            <label for="guest_name" class="col-form-label col-4">Tên khách hàng</label>
                            <input class="col-7 col-form-control mb-3" name="guest_name" value="<?=$guest_name?>">
                            <div class="col-1"></div>
                            <label for="place" class="col-4 col-form-label">Liên hệ theo địa chỉ:</label>
                            <input class="col-7 col-form-control mb-3" name="place" value="<?=$place?>">
                            <div class="col-1"></div>
                            <label class="col-4 col-form-label" for="phone">Số điện thoại:</label>
                            <input class="col-7 col-form-control mb-3" name="phone" value="<?=$phone?>">
                            <div class="col-1"></div>
                        </div>
                        <div class="col-4"><img src="arknights-bg23.png" class="img-fluid" alt="tranh pc"></div>
                    </div>
                    <div class="row" style="background-color:#EAF1F9;">
                        <label for="other" class="text-center col-12 mb-2">Những yêu cầu kèm theo:</label>
                        <textarea class="col-12 form-control" name="other" id="other" rows="3"><?=$other?></textarea>
                        <div class="col-12 text-center mt-3">
                            <input class="btn btn-primary mb-3 w-25" type="submit" value="Đăng ký Tour" name="submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-2 col-lg-4"></div>
        </div>
        <?php 
        if($tb != ""){
            echo "<div class='row mt-1 mb-2 alert alert-danger text-center'>{$tb}</div>";
        }
        ?>
        <div class="row mt-3 mb-3">
            <div class="col-md-2 col-lg-4"></div>
            <div class="col-md-8 col-lg-4">
                <?php 
                if(isset($_POST["submit"])){
                echo '<div class="row" style="background-color:#EAF1F9;">';
                echo '<div class="col-12 pt-1 pb-1 font-monospace text-uppercase h3 text-center fw-bold" style="background-color:#607C96;color:#fff;">Thông tin đặt tour</div>';
                echo '<div class="col-12 mb-3">';
                echo "<p>Khách hàng đã chọn Tour: <b><i>{$name_tour}</i></b></p>";
                echo "<p>Ngày khởi hành: {$start}</p>";
                echo "<p>Phương tiện: {$pt}</p>";
                echo "<br><p>Số lượng đăng ký: <b><i>{$sl} khách</i></b></p>";
                echo "<p>Giá tour/khách: 5400000</p>";
                echo "<p>Tổng tiền cho {$sl} khách: {$sum}</p>";   
                echo "<p>Số điện thoại: {$phone}</p>";
                echo "<br><p><i>Các yêu cầu kèm theo:</i></p>";
                echo "<p>{$other}</p>";
                echo "</div></div>";}
                ?>
            </div>
            <div class="col-md-2 col-lg-4"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>