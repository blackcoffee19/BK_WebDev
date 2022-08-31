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
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 row">
                <form action="" method="post">
                    <div class="col-12 h3 text-center" style="background-color:red;color:yellow; font-family:Verdana, Geneva, Tahoma, sans-serif">THÔNG TIN ĐẶT CHỖ</div>
                    <div class="col-6"><label for="sl">Số khách tham dự bữa tiệc của quý khách:</label></div>
                    <div class="col-6 row">
                        <input class="col-2" type="text" name="sl" value="<?= $sl?>" require>
                        <div class="col-2"></div>
                        <label class="col-2" for="date">Ngày</label>
                        <input class="col-5" name="date" value="<?=$date?>">
                        <div clas="col-1"></div>
                    </div>
                    <div class="col-3"><label for="type_party">Loại tiệc: </label></div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>