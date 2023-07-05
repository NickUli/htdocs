<?php

use app\services\Component;

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
    <h2 class="mt-4">Sign up</h2>
    <form class="mt-4" action="/auth/register" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="form-group">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" name="surname" class="form-control" id="surname">
        </div>
        <div class="form-group">
            <label for="avatar" class="form-label">User avatar</label>
            <input type="file" name="avatar" class="form-control" id="avatar">
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="form-group">
            <label for="password_confirm" class="form-label">Password confirmation</label>
            <input type="password" name="password_confirm" class="form-control" id="password_confirm">
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
