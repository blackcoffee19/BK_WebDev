<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Từ điển</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .timtu{
            width: 500px;
            height: 200px;
            border: 1px solid #002B5B;
            box-shadow: 0 0 5px #256D85;
            color: #002B5B;
            font-size: 1.3rem;
            padding-top: 5px;
            line-height: 50px;
            text-align: center;
        }
        input[type=text]{
            width: 300px;
            height: 30px;
            padding: 0 20px;
            font-size: 1.2rem;
        }
        input[type=submit]{
            width:70px;
            font-family: 'Courier New', Courier, monospace;
            height: 30px;
            padding: 5px 10px;
            font-size: 1.2rem;
            font-weight: 700;
        }
        .hientu{
            margin-top: 50px;
            width: 300px;
            padding: 20px;
            height: max-content;
            border: 1px solid #002B5B;
            box-shadow: 0 0 4px #002B5B;
            color:#002B5B;
            font-size: 1.1rem;
            border-radius: 20px;
            line-height: 2;
        }
    </style>
</head>
<body>
    <?php require("dictionary.php");
    $word = "";$mean = "";$tb = "";
    if(isset($_GET["submit"]))
    { 
        $word = $_GET["word"];
        if($word != ""){
            foreach($dic as $key => $value){
                if($word == $key){
                    $mean .= $value;
                }
            }
        }else{
            $tb .="<p><font color='red'><b>Please enter a word!</b></font></p>";
        }
    }
    ?>
    <div class="timtu">
        <h1>Từ Điển Anh - Việt</h1>
        <form method='get'>
            <input type="text" name="word" id="word" placeholder="Nhập từ cần tìm" value="<?= $word?>">
            <input type="submit" name="submit" id="submit" value="Tìm">
        </form>
    </div>
    <?php
        if(isset($_GET["submit"])){
            echo '<div class="hientu">';
         if($mean == ""){
            if($tb == ""){
            $tb .= "<p><font color='red'><b>Can't find this word!</b></font></p>";};
            echo $tb;
         }else{
            echo "<h1><font color='orange'>{$word}</font></h1>";
            echo $mean;
         }
         echo "</div>";
        }
        ?>
</body>
</html>