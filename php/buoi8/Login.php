<?php
    echo "<div class='login-page'>";
    if($_GET["type"] == "Login"){
        echo "<form method='get' class='login'><table cellpadding='10'>";
        echo "<caption><h1 align='center'>Login</h1></caption>";
        echo "<tr><td>";
        echo '<label for="username">Username: </label>';
        echo "</td><td>";
        echo '<input type="text" id="username" placeholder="Enter your username" tabindex="1">';
        echo "</td></tr><tr><td>";
        echo '<label for="password">Password: </label>';
        echo '</td><td>';
        echo '<input type="password" id="password" placeholder="Enter your password"tabindex="2">';
        echo "</td></tr><tr>";
        echo "<td align='center'><input class='login-but' type='submit' id='submit' value='Login'></td><td align='left'><a href='?page=Login&type=Signin'>Signin</a></td></tr>";
        echo "<tr class='alert'><td colspan='2' align='center'>Start create a new account</td>";
        echo "</tr></table></form>";
    } elseif($_GET["type"] == "Signin"){
        echo "<form method='get' class='login'><table cellpadding='10'>";
        echo "<caption><h1 align='center'>SIGNIN</h1></caption>";
        echo "<tr><th colspan='2'>Create a new account</th>";
        echo "<tr><td width='200px'>";
        echo '<label for="username">Enter your account user name: </label>';
        echo "</td><td>";
        echo '<input type="text" id="username" name="username" placeholder="Enter your username" tabindex="1">';
        echo "</td></tr><tr><td>";
        echo '<label for="password">Password: </label>';
        echo '</td><td>';
        echo '<input type="password" id="password" name="password" placeholder="Enter your password" tabindex="2">';
        echo "</td></tr><tr><td>";
        echo '<label for="re-password">Confirmed Password: </label>';
        echo '</td><td>';
        echo '<input type="password" name="re-password" id="re-password" placeholder="Re-enter your password" tabindex="3"></td><td><span style="display:none;"><span></td></tr>';
        echo '<tr><td><label for="firstname">First Name:</label></td><td><input type="text" name="firstname" id="firstname" placeholder="Your first name"></td></tr>';
        echo '<tr><td><label for="lastname">Last Name:</label></td><td><input type="text" name="lastname" id="lastname" placeholder="Your last name"></td></tr>';
        echo '<tr><td><label for="email">Your email:</label></td><td><input type="email" name="email" id="email" placeholder="Your email"></td></tr>';
        echo "<tr><td class='lst-bt' colspan='2' align='center'><input class='login-but' type='submit' id='submit' value='Sigin'><a href='?page=Login&type=Login'>Login</a></td>";
        echo "<tr class='alert'><td colspan='2' align='left'>Back to Login page</td>";
        echo "</tr></table></form>";
    }
    echo "</div>";
?>