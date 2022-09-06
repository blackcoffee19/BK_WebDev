<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Bài tập 3</title>
</head>
<body>
    <?php
    function typeParty($type){
        switch($type){
            case "morning":
                return "Tiệc sáng";
                break;
            case "afternoon":
                return "Tiệc trưa";
                break;
            case "night":
                return "Tiệc tối";
                break;
            default:
                return "Không rõ";
                break;
        }
    };
    function ages($age){
        switch($age){
            case "young":
                return "Từ 12 đến 18 tuổi";
                break;
            case "teen":
                return "Từ 19 đến 34 tuổi";
                break;
            case "old":
                return "Từ 35 đến 65 tuổi";
                break;
            default:
                return "Error";
                break;
        };
    };
    function know($kno){
        switch($kno){
            case "bc":
                return "Báo chí";
                break;
            case "dpt":
                return "Đài phát thanh";
                break;
            case "tv":
                return "TiVi";
                break;
            default:
                return "Error";
                break;
        }
    };
        $sl = "";$date="";$knowingstr="";$partystr = "";$type_party=[];$place="";$guest_name="";$position="";$ages="";$gender="";$knowing=[];$other="";
        $time ="";
        if(isset($_POST["submit"])){
            $sl=$_POST["sl"];
            $date=$_POST["date"];
            $i = 0;
            $time = date("h:i:sa-d/m/Y");
            foreach($_POST["type_party"] as $party){
                $type_party[$i]=typeParty($party);
                $i++;
            };
            $partystr = implode(", ",$type_party);
            $place=($_POST["place"] == "inside")?"Trong nhà":"Ngoài trời";
            $guest_name=$_POST["guest_name"];
            $position = $_POST["position"];
            $ages=ages($_POST["ages"]);
            $gender=($_POST["gender"] == "female")?"Nữ":"Nam";
            $j = 0;
            foreach($_POST["knowing"] as $know){
                $knowing[$j] = know($know);
                $j++;
            };
            $knowingstr = implode(", ",$knowing);
            $other = $_POST["other"];
        }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-lg-4"></div>
            <form class="col-md-8 col-lg-4" action="" method="post">
            <div style="background-color:#FEDFC0;" class="row mt-3">
                    <div class="col-12 h3 text-center pt-1 pb-1 mb-2" style="background-color:red;color:yellow; font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight:700;">THÔNG TIN ĐẶT CHỖ</div>
                    <div class="col-12 row">
                        <label style="color:red;" class=" col-6 col-form-label" for="sl">Số khách tham dự bữa tiệc của quý khách:</label>
                        <input class="col-2 col-form-control h-50" type="text" name="sl" value="<?= $sl?>" require>
                        <div class="col-1"></div>
                        <label style="color:red;" class="col-1 col-form-label" for="date">Ngày</label>
                        <input class="col-2 col-form-control h-50" name="date" value="<?=$date?>">
                    </div>
                    <label class="col-2 form-check-label" for="type_party">Loại tiệc: </label>
                    <div class="col-2 form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="type_party[]" value="morning">
                        <label class="form-check-label" for="type_party[]">Tiệc sáng</label>
                    </div>
                    <div class="col-2 form-check form-check-inline">    
                        <input class="form-check-input" type="checkbox" name="type_party[]" value="afternoon">
                        <label class="form-check-label" for="type_party[]">Tiệc trưa</label>
                    </div>
                    <div class="col-2 form-check form-check-inline">    
                        <input class="form-check-input" type="checkbox" name="type_party[]" value="night">
                        <label class="form-check-label" for="type_party[]">Tiệc tối</label>
                    </div>
                    <div class="col-2"></div>
                    <label class="col-2 form-check-label" for="place">Địa điểm: </label>
                    <div class="col-2 form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="place" value="inside">
                        <label class="form-check-label" for="place">Trong nhà</label>
                    </div>
                    <div class="col-2 form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="place" value="outside">
                        <label class="form-check-label" for="place">Ngoài trời</label>
                    </div>
                    <div class="col-5"></div>
                    <label class="col-3 col-form-label" for="guest_name">Tên quý khách:</label>
                    <input type="text" class="col-3 col-form-control h-50" name="guest_name" value="<?=$guest_name;?>">
                    <label class="col-3 col-form-label" for="position">Địa chỉ liên lạc:</label>
                    <input type="text" class="col-3 col-form-control h-50" name="position" value="<?=$position?>">
                    <label class="col-2 col-form-label" for="ages">Độ tuổi:</label>
                    <select name="ages" class="col-4 form-select-sm" aria-label=".form-select-sm example">
                        <option value="young">Từ 12-18 tuổi</option>
                        <option value="teen" selected>Từ 19-34 tuổi</option>
                        <option value="old">Từ 35-65 tuổi</option>
                    </select>
                    <label for="gender" style="text-align:right;" class="col-2 form-check-label">Giới tính:</label>
                    <div class="col-1 form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" value="female">
                        <label class="form-check-label" for="gender">Nữ</label>
                    </div>
                    <div class="col-1 form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" value="male">
                        <label class="form-check-label" for="gender">Nam</label>
                    </div>
                    <label for="knowing" class="col-7 col-form-label">Qúy khách biết đến nhà hàng của chúng tôi qua:</label>
                    <select class="col-4 form-select-sm" name="knowing[]" multiple aria-label="multiple .form-select-sm example">
                        <option value="bc">Báo chí</option>
                        <option value="dpt">Đài phát thanh</option>
                        <option value="tv">Tivi</option>
                    </select>
                    <div class="col-1"></div>
                    <div class="col-12 mb-3">
                        <label for="other" class="col-5 form-label">Các yêu cầu khác của quý khách:</label>
                        <textarea class="form-control" name="other" id="other" rows="3"></textarea>
                    </div>
                    <div class="col-12 text-center"><input type="submit" class="btn btn-light mb-3" value="Đặt chỗ" name="submit"></div>
            </div>
            </form>
            <div class="col-md-2 col-lg-4"></div>
        </div>
        <div class="row mt-3 mb-3">
            <?php 
            if(isset($_POST["submit"])){
                echo "<div class='col-md-2 col-lg-4'></div>";
                echo "<div style='background-color:#FEDFC0;' class='col-md-8 col-lg-4'>";
                echo '<div class="col-12 h3 text-center pt-1 pb-1 mb-2" style="background-color:red;color:yellow; font-family:Verdana, Geneva, Tahoma, sans-serif;font-weight:700;">THÔNG TIN ĐẶT CHỖ</div>';
                echo "<p><b>Thông tin khách hàng</b></p>";
                echo "<p>Họ tên: {$guest_name} - Độ tuổi: {$ages} / Giới tính: $gender</p>";
                echo "<p>Địa chỉ: {$position}</p>";
                echo '<p><b>Thông tin đặt chỗ</b></p>';
                echo "<p>Số khách tham gia bữa tiệc: {$sl} - Ngày đặt tiệc: $date</p>";
                echo "<p>Loại tiệc: - $partystr / Địa điểm: $place</p>";
                echo "<p  class='font-weight-bold'>Các yêu cầu kèm theo: </p>";
                echo "<p>$other</p>";
                echo "<p class='text-center'><i>Qúy khách biết đến nhà hàng của chúng tôi qua: $knowingstr</i></p>";
                echo "<p>Chúng tôi nhận được thông tin đặt chỗ của quý khách lúc: <span class='font-weight-bold'>$time</span></p>";
                echo "</div><div class='col-md-2 col-lg-4'></div>";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>