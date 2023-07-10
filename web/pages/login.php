<?php

use app\services\Component;

if (isset($_SESSION['user'])) {
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
<div class="container">
    <h2 class="mt-4">Sign in</h2>
    <form class="mt-4" action="auth/login" method="post">
        <div class="form-group">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
