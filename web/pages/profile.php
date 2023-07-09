<?php
use app\services\Component;

session_start();

if (!($user = $_SESSION['user'])) {
    \app\services\Router::redirect('/login');
}
?>

<!doctype html>
<html lang="en">
<?php
Component::addPart('head');
?>
<body>
<?php
Component::addPart('navbar');
?>
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Hello, <?= "$user[username] $user[surname]" ?></h1>
        <img src="<?= $user['avatar'] ?>" height="300" alt="<?= "$user[username] $user[surname]" ?>">
    </div>
</div>
</body>
</html>

