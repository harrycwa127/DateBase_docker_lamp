<?php

require_once '_route.php';

if (array_key_exists('is_logged', $_SESSION)) {
    header('Location: index.php');
    exit;
}

// If the form has been submitted
if ($_POST && isset($_POST['submit'])) {
    
    //If complete recaptcha start complete 
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        //Strip whitespace and filter removes tags
        $username = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
        $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

        //Check if field is empty
        if (_is_valid($username) === FALSE)
            _log_error('Username is empty. Please login again.');

        if (_is_valid($password) === FALSE)
            _log_error('Password is empty. Please login again.');

        //Check username and password
        $stmt = $db->prepare('SELECT * FROM `users` WHERE `user_name` = :username LIMIT 1');
        $stmt->execute(array(':username' => $username));

        $num = $db->query('SELECT FOUND_ROWS()')->fetchColumn();

        if ($num == 0)
            _log_error('Incorrect username or password. Please login again.');

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        if (_password_hash($password) != $row['user_password'])
            _log_error('Incorrect username or password. Please login again.');

        //Put the data to cookie when login success
        $_SESSION['is_logged'] = TRUE;
        $_SESSION['userid']  = $row['user_id'];
        $_SESSION['username']  = $username;

        // redirect to index
        header('Location: index.php');
        exit;
    } else {
        //If do not complete recaptcha
        echo "<h1>Please complete recaptcha</h1>";
    }
}

?>
<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form method="post">
        <table border="0">
            <tr>
                <td colspan=2>
                    <h1>Login</h1>
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    Don't have an account? <a href="createUser.php">Sign Up</a>
                </td>
            </tr>
            <tr>
                <td colspan=2></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td>
                    <input type="text" name="username" maxlength="60">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password" maxlength="20">
                </td>
            </tr>
            <tr>
                <td>
                    <div class="g-recaptcha" data-sitekey="6LeHnAwjAAAAAOfDR6yzz6VoLnPeOTnx4jQWZzpn"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>