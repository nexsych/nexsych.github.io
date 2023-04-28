<?php
$password = 'ZGV2dW5leA==';
$url = 'https://rentry.co/htial';

if ($_POST['password'] == $password) {
    header('Location: ' . $url);
    exit();
}
?>

<html>
<body>
<form method="post">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <button type="submit">Submit</button>
</form>
</body>
</html>
