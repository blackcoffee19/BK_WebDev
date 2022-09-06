<?php
    $servername = "localhost";
    $root = "root";
    $pass = "";
    $dbname = "users_account";
    $tb ="";
    $acc= [];
    $check = true;
    // Create connection
    $conn = new mysqli($servername, $root, $pass, $dbname);
    // Check connection
    if ($conn->connect_error) {
        echo "Something wrong";
      die("Connection failed: " . $conn->connect_error);
    };
    $sql = "SELECT username, userpassword FROM MyGuests";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            array_push($acc,$row);
        }
    };
    if(isset($_POST["submit1"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        foreach($acc as $a){
            // echo var_dump($a)."<br>".$a["username"]." ".$a["userpassword"]."<br>";
            if($a["username"] == $username && $a["userpassword"] == $password){
                echo "<script>alert('Login successful!');window.location = 'danhsachxe2.php?login=true';</script>";
            } elseif ($a["username"] == $username){
                echo "<script>alert('Wrong password !Login failed!');</script>";
                $check = false;
            };
            // echo "<br>".$a["username"]." And ".$username."<br>".$a["userpassword"]." And ".$password;
        };
        
    } elseif(isset($_POST["submit2"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $re_password = $_POST["re_password"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        if($password == $re_password){
            $sql = "INSERT INTO MyGuests (firstname, lastname, email, username, userpassword)
            VALUES ('$firstname', '$lastname', '$email','$username','$password')";
            if ($conn->query($sql) === TRUE) {
              echo "<script>alert('New record created successfully');</script>";
            } else {
              $tb= "<script>alert('Error: " . $sql . "<br>" . $conn->error."')</script>";
            }
        }else{
            $tb = "Re enter password";
        }

    }
    echo "<div class='login-page'>";
    if($_GET["type"] == "Login"){
        echo "<form method='post'class='login'><table cellpadding='10'>";
        echo "<caption><h1 align='center'>Login</h1></caption>";
        echo "<tr><td>";
        echo '<label for="username">Username: </label>';
        echo "</td><td>";
        echo '<input type="text" name="username" id="username" placeholder="Enter your username" tabindex="1" required>';
        echo "</td></tr><tr><td>";
        echo '<label for="password">Password: </label>';
        echo '</td><td>';
        echo '<input type="password" id="password" name="password" placeholder="Enter your password"tabindex="2" required>';
        echo "</td></tr><tr>";
        echo "<td align='center'><input class='login-but' type='submit' name='submit1' id='submit1' value='Login'></td><td align='left'><a href='?page=Login&type=Signin'>Signin</a></td></tr>";
        echo "<tr class='alert'><td colspan='2' align='center'>Start create a new account</td>";
        echo "</tr></table></form>";
    } elseif($_GET["type"] == "Signin"){
        echo "<form method='post'class='login'><table cellpadding='10'>";
        echo "<caption><h1 align='center'>SIGNIN</h1></caption>";
        echo "<tr><th colspan='2'>Create a new account</th>";
        echo "<tr><td width='200px'>";
        echo '<label for="username">Enter your account user name: </label>';
        echo "</td><td>";
        echo '<input type="text" id="username" name="username" placeholder="Enter your username" tabindex="1" required>';
        echo "</td></tr><tr><td>";
        echo '<label for="password">Password: </label>';
        echo '</td><td>';
        echo '<input type="password" id="password" name="password" placeholder="Enter your password" tabindex="2" required>';
        echo "</td></tr><tr><td>";
        echo '<label for="re_password">Confirmed Password: </label>';
        echo '</td><td>';
        echo '<input type="password" name="re_password" id="re_password" placeholder="Re-enter your password" tabindex="3" required></td><td><span style="display:none;"><span></td></tr>';
        echo "<tr><td><label for='firstname'>First Name:</label></td><td><input type='text' name='firstname' id='firstname' placeholder='Your first name' value='$firstname' required></td></tr>";
        echo "<tr><td><label for='lastname'>Last Name:</label></td><td><input type='text' name='lastname' id='lastname' placeholder='Your last name' value='$lastname' required></td></tr>";
        echo "<tr><td><label for='email'>Your email:</label></td><td><input type='email' name='email' id='email' placeholder='Your email' value='$email' required></td></tr>";
        echo "<tr><td class='lst-bt' colspan='2' align='center'><input class='login-but' type='submit' id='submit' name='submit2' value='Sigin'><a href='?page=Login&type=Login'>Login</a></td></tr>";
        if($tb == ""){
            echo "<tr class='alert_cus'><td colspan='2' align='left'>Back to Login page</td>";
        }else{
            echo "<tr class='alert alert-warning'><td colspan='2' align='center'>$tb</td>";
        }
        echo "</tr></table></form>";
    }
    echo "</div>";
?>
