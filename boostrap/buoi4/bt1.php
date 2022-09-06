<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Bài tập</title>
</head>
<body>
    <?php 
    $datasua = new mysqli("localhost","root","","san_pham_sua");
    if($datasua->connect_error){
        die("Không kết nối thành công!".$datasua->connect_error);
        exit();
    };
    

    $sql = "SELECT id, name, description, image, maloai FROM san_pham_sua";
    $result = $datasua->query($sql);
    //$kq = $datasua->query($result);
    $resultCheck = mysqli_num_rows($result);
    if(!$result){
        die("Không truy vấn được câu lệnh SQL:".$datasua->connect_error);
        exit;
    };
    $arr_sua = [];
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($arr_sua,$row);
      }
    } else {
      echo "0 results";
    }
    ?>
    <div class="container-fluid">
        <div class="pt-3 pb-2 row bg-primary">
          <div class="col-lg-2"></div>
            <ul class=" col-md-8 col-lg-6 nav text-white justify-content-start">
                <li class="nav-item"><a class="text-uppercase text-white nav-link active" aria-current="page" href="#">Trang chủ</a></li>
                <li class="nav-item"><a class="text-uppercase text-white-50 nav-link" href="">Insurelac</a></li>
                <li class="nav-item"><a class="text-uppercase text-white-50 nav-link" href="">Kolacsure</a></li>
                <li class="nav-item"><a class="text-uppercase text-white-50 nav-link" href="">Alphasure</a></li>
                <li class="nav-item"><a class="text-uppercase text-white-50 nav-link" href="">Surecare</a></li>
            </ul>
            <form class="col-md-4 d-flex justify-content-end">
                <input class="form-control me-2" type="search" placeholder="Nhập từ khóa" aria-label="Search">
                <button class="text-danger btn btn-outline-danger" type="submit">Tìm</button> 
            </form>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-sm-6 col-md-7 col-lg-6">
                <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="hinh/arknights-bg10.png" class="d-block w-100" alt="hinh1">
                    </div>
                    <div class="carousel-item">
                      <img src="hinh/arknights-bg17.png" class="d-block w-100" alt="hinh2">
                    </div>
                    <div class="carousel-item">
                      <img src="hinh/arknights-bg16.png" class="d-block w-100" alt="hinh3">
                    </div>
                    <div class="carousel-item">
                      <img src="hinh/arknights-bg23.png" class="d-block w-100" alt="hinh4">
                    </div>
                    <div class="carousel-item">
                      <img src="hinh/arknights-bg8.png" class="d-block w-100" alt="hinh5">
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-2 mt-3">
                <p class="h6 text-uppercase">Thông tin hữu ích</p>
                <hr class="fw-bold">
                <p class="h6 text-uppercase">Chính sách trả hàng - Hòa tiền</p>
                <hr>
                <p class="lh-1">Trong trường hợp khách hàng chưa hiểu hoặc không đồng ý thì trách nhiệm...</p>
                <hr>
                <p class="h6 text-uppercase">CHính sách bảo hành</p>
                <hr>
                <p class="lh-1">CÔNG TY TNHH CHẾ BIẾN THỰC PHẨM THƯƠNG MẠI VÂN MỸ cam kết đem đến quý...</p>
                <hr>
                <p class="h6 text-uppercase">CHÍNh sách vận chuyển - Giao nhận</p>
                <hr>
                <p class="lh-1">Quý khách sẽ được nhân viên bán hàng cung cấp đầy đủ chứng thư hóa đơn...</p>
                <hr>
                <p class="h6 text-uppercase">Hình thức thanh tóan</p>
                <hr>
                <p class="lh-1">Qúy khách có thể chọn các phương thức thanh toán sau đây: thanh toán bằng tiền...</p>
                <hr>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    <div class="container">
      <div class="alert alert-dark" role="alert">
        ISURELAC
      </div>
      <?php
        echo "<div class='row'>"; 
        foreach($arr_sua as $sua){
          if($sua["maloai"] == "1"){
          echo '<div class="col-md-6 col-lg-2 mx-auto mb-3 card" style="width: 18rem;">';
          echo "<img src='hinh/".$sua["image"]."' class='card-img-top h-75'>";
          echo '<div class="card-body">';
          echo "<h5 class='card-title'>".$sua["name"]."</h5>";
          echo "<p class='card-text'>".$sua["description"]."</p>";
          echo "<a href='#' class='btn btn-primary'>Detail</a>";
          echo "</div></div>";
          }
        }
        echo "</div>";
      ?>
      <div class="alert alert-dark" role="alert">
        KOLAC SURE
      </div>
      <?php
        echo "<div class='row'>"; 
        foreach($arr_sua as $sua){
          if($sua["maloai"] == "2"){
          echo '<div class="col-md-6 col-lg-2 mx-auto mb-3 card" style="width: 18rem;">';
          echo "<img src='hinh/".$sua["image"]."' class='card-img-top h-75'>";
          echo '<div class="card-body">';
          echo "<h5 class='card-title'>".$sua["name"]."</h5>";
          echo "<p class='card-text'>".$sua["description"]."</p>";
          echo "<a href='#' class='btn btn-primary'>Detail</a>";
          echo "</div></div>";
          }
        }
        echo "</div>";
      ?>
  
    </div>
    <footer class="container-fluid bg-primary row pt-2">
    <div class="col-lg-3"></div>  
    <div class="card col-md-6 col-lg-3 text-bg-primary mb-3 mx-auto" style="max-width: 18rem;">
        <div class="card-header text-uppercase">Liên hệ</div>
        <div class="card-body">
          <p class="card-title">Công ty TNHH chế biến thực phẩm VÂN MỸ</p>
          <p class="card-text">Địa chỉ: 131/60 Đường Tân Phú, P.10, Q.Bình Tân</p>
        </div>
      </div>
      <div class="card col-6 col-lg-3 text-bg-primary mb-3 mx-auto" style="max-width: 18rem;">
      <div class="card-header text-uppercase">Thông tin cần biết</div>
        <div class="card-body">
          <a class="card-title text-white">Tư vấn khách hàng</a>
          <p class="card-text">Kết nối với chúng tôi</p>
        </div>
      </div>
      <div class="col-lg-3"
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>