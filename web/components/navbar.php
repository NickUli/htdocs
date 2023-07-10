<?php \app\services\Debug::getTable() ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Test site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled">Disabled</a>
            </div>
        </div>
        <div class="navbar-nav">
            <?php if (!($_SESSION['user'] ?? '')): ?>
                <a class="nav-link" href="/login">Login</a>
                <a class="nav-link" href="/register">Register</a>
            <?php else: ?>
                <a class="nav-link" href="/profile">Profile</a>
                <form method="post" action="/auth/logout">
                    <input type="hidden" name="route">
                    <a class="nav-link" style="cursor: pointer"
                       onclick="this.parentNode.submit();">Logout</a>
                </form>
            <?php endif; ?>
        </div>
    </div>
</nav>
