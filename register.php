<?php
session_start();
require 'register.php';

if (isset($_POST['register'])){
    if($_POST['password'] === $_POST['password2']){
        $firstname = $mysqli->real_escape_string($_POST['name']);
        $lastname = $mysqli->real_escape_string($_POST['last_name']);
        $age = $mysqli->real_escape_string($_POST['age']);
        $birth = $mysqli->real_escape_string($_POST['birth']);
        $male = $mysqli->real_escape_string($_POST['male']);
        $female = $mysqli->real_escape_string($_POST['female']);
        $hobbies = $mysqli->real_escape_string($_POST['hobbies']);
        $login = $mysqli->real_escape_string($_POST['login']);
        $password = md5($_POST['password']);
        $password2 = $mysqli->real_escape_string($_POST['password2']);
        $card = $mysqli->real_escape_string($_POST['card']);
        $about = $mysqli->real_escape_string($_POST['about']);
        $category = $mysqli->real_escape_string($_POST['category']);
        $sql = $mysqli->query("INSERT INTO user_data (login, password, name, lastname, sex, hobbies, birth_date, card, personal_info, category, age)"
        . "VALUES ('$login', '$password', '$firstname', '$lastname', '$male', '$hobbies', '$birth', '$card', '$about', '$category', $age)");
    }
}
    if (empty($login)) {
        $ulogin_err = 'Enter your login.';
    }

    if (empty($password)) {
        $password_err = 'Enter password!';
    }

    if (empty($password2) or $password !== $password2) {
        $password2_err = 'Repeat your password';
    //if (strlen($password) < 6) {$password_err = 'Password is at least 6 characters long';}

}
echo '<pre>';
var_dump($_POST);
echo '</pre>';

?>
<label for="register">Registration form</label>
<form class="register" method="post" name="registration" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <ul>
        <li><label for="name">Enter your name</label></li>
        <li><input type="text" class="name" name="name" id="name" required></li>
        <? if ($firstname_err) :
            echo "<p class='err'>$firstname_err</p>";
        endif;
        ?>
        <li><label for="last_name">Enter your last name</label></li>
        <li><input type="text" class="last_name" name="last_name" id="last_name" required></li>
        <? if ($lastname_err) :
            echo "<p class='err'>$lastname_err</p>";
        endif;
        ?>
        <li><label for="age">Enter your age</label></li>
        <li><input type="text" class="age" id="age" name="age" required></li>
        <li><label for="birth">Enter your birth day</label></li>
        <li><input type="text" class="birth" id="birth" name="birth"></li>
        <li><label for="male">Male</label>
        <input type="radio" class="male" id="male" name="male" value="man" required>
        <label for="female">Feale</label>
        <input type="radio" class="female" id="female" name="male" value="woman" required></li>
        <li><label for="hobbie">List of hobbies</label> </li>
        <li>
            <select multiple="multiple" class="hobbies[]" name="hobbies" id="hobbie">
                <option>Books</option>
                <option>Box</option>
                <option>Footbal</option>
                <option>Games</option>
                <option>Swiming</option>
            </select>
        </li>

        <li><label for="login">Login</label></li>
        <li><input type="text" class="login" id="login" name="login" required></li>
        <? if ($login_err) :
            echo "<p class='err'>$login_err</p>";
        endif;
        ?>
        <li><label for="password">Password</label></li>
        <li><input type="password" class="password" id="password" name="password" required></li>
        <? if ($password_err) :
            echo "<p class='err'>$password_err</p>";
        endif;
        ?>
        <li><label for="password2">Confirm password</label></li>
        <li><input type="password" class="password2" id="password2" name="password2" required></li>
        <? if ($password2err) :
            echo "<p class='err'>$password2_err</p>";
        endif;
        ?>
        <li><label for="card">Card number</label></li>
        <li><input type="text" class="card" id="card" name="card" required></li>
        <li><label for="about">Enter info about yourself</label></li>
        <li><textarea class="about" id="about" name="about"></textarea></li>
        <li><label for="category">Choose your category</label></li>
        <li>
            <select class="category[]" id="category" name="category">
                <option>Art</option>
                <option>Sport</option>
                <option>Programming</option>
                <option>Frontend</option>
                <option>Shaltay-boltay</option>
            </select>
        </li>
        <li><input type="submit" class="submit" name="register" value="REGISTER"></li>
    </ul>
</form>
