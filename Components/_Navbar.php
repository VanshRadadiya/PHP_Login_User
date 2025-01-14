<?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $loggedin = true;
    }else{
        $loggedin = false;
    }
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="/PHP/Login_System">iSecure</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/PHP/Login_System/Welcome.php">Home</a>
                </li>

                <?php if (!$loggedin) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/PHP/Login_System/Login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/PHP/Login_System/SignUp.php">Signup</a>
                </li>
                <?php } ?>

                <?php if ($loggedin) {?>
                <li class="nav-item">
                    <a class="nav-link" href="/PHP/Login_System/Logout.php">Logout</a>
                </li>
                <?php } ?>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>