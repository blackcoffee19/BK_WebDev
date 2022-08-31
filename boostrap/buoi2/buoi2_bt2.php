<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2f28ccbbd6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">    
    <title>Bai tap 2</title>
</head>
<body>
  <?php
      $dsks =array(
        1 => ["hinh/ks1.jpg","Combo du lịch Sapa Khách sạn BB Sapa 3N2Đ","3 ngày 2 đêm","01-30/06/2021","4,199,000đ"],
        2 => ["hinh/ks2.jpg","Combo du lịch Sapa Khách sạn Pao's Sapa","3 ngày 2 đêm","01-30/06/2021","2,199,000đ"],
        3 => ["hinh/ks3.jpg","Combo du lịch Sapa 3N2Đ Khách sạn Pao's Sapa","3 ngày 2 đêm","01-30/06/2021","4,199,000đ"],
        4 => ["hinh/ks4.jpg", "Combo du lịch Sapa Khách sạn Amzing Sapa","3 ngày 2 đêm","01-30/06/2021","1,899,000đ"],
        5 => ["hinh/ks5.jpg","Combo du lịch Sapa 3N2Đ Khách sạn Amazing Sapa","3 ngày 2 đêm","01-30/06/2021","3,799,000đ"],
        6 => ["hinh/ks6.jpg","Combo du lịch Sapa Khách sạn Bamboo Sapa","3 ngày 2 đêm","01-30/06/2021","1,799,000đ"]
      );
  ?>
    <div class="container">
        <div class="row mt-3">
          <div class="col-md-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 15rem;">
                <div class="card-header"><i class="fa-solid fa-hotel"></i></div>
                <div class="card-body">
                  <h5 class="card-title">Khách sạn</h5>
                  <p class="card-text">Khách sạn tốt nhất tại các địa điểm du lịch nổi tiếng.</p>
                </div>
            </div>
            </div> 
            <div class="col-lg-3 col-md-3 mx-auto card text-white bg-danger mb-3" style="max-width: 15rem;">
                <div class="card-header"><i class="fa-solid fa-car"></i></div>
                <div class="card-body">
                  <h5 class="card-title">Thuê xe</h5>
                  <p class="card-text">Dịch vụ thuê xe giá tốt từ các nhà xe uy tín và chu đáo.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mx-auto card text-white bg-warning mb-3" style="max-width: 15rem;">
                <div class="card-header"><i class="fa-solid fa-book-atlas"></i></div>
                <div class="card-body">
                  <h5 class="card-title">VISA</h5>
                  <p class="card-text">Dịch vụ Visa nhanh, rẻ. Visa trọn gói thủ tục đơn giản.</p>
                </div>
            </div>
            <div class=" col-md-3 mx-auto card text-white bg-dark mb-3" style="max-width: 15rem;">
                <div class="card-header"><i class="fa-solid fa-plane"></i></div>
                <div class="card-body">
                  <h5 class="card-title">Vé Máy Bay</h5>
                  <p class="card-text">Vé máy bay giá rẻ nhất, nhiều khuyến mãi hấp dẫn.</p>
                </div>
              </div>
        </div>
        <!--Start Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="hinh/arknights-bg1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="hinh/arknights-bg3.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="hinh/arknights-bg7.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="hinh/arknights-bg9.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <!-- End carousel           -->
    <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 g-4 mt-2 mb-2">
      <?php
      foreach($dsks as $ks){
        echo '<div class="col" style="height:300px;" style="max-width:222px;">';
        echo '  <div class="card" style="height:100%;">';
        echo '    <img src="'.$ks[0].'" class="card-img-top img-fluid" style="height:50%;"alt="...">';
        echo '    <div class="card-body">';
        echo '      <h5 class="card-title">'.$ks[1].'</h5>';
        echo '      <p class="card-text"><i class="fa-solid fa-clock"></i> '.$ks[2].'</p><p><i class="fa-solid fa-calendar-days"></i> '.$ks[3].'<span style="float:right;"><font color="red">'.$ks[4].'</font></span></p>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
      }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>