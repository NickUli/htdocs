<?php
use app\services\Component;

if (empty($_SESSION['user'])) {
    \app\services\Router::redirect('/login');
}

if ($_SESSION['user']['group'] != 2) {
    \app\services\Router::redirect('/profile');
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
        <h1 class="display-4">Dashboard</h1>
    </div>
</div>
</body>
</html>

