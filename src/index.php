<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="saiful">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Smart Shop Management</title>
    <link href="../lib/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .body {
            height: 600px;
            margin: 0;
            display: grid;
            grid-template-rows: 500px 100px;
            grid-template-columns: 1fr 30px 30px 30px 30px 30px 1fr;
            align-items: center;
            justify-items: center;
        }

        main#carousel {
            grid-row: 1 / 2;
            grid-column: 1 / 8;
            width: 100vw;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            transform-style: preserve-3d;
            perspective: 600px;
            --items: 5;
            --middle: 3;
            --position: 1;
            pointer-events: none;
        }

        div.item {
            position: absolute;
            width: 300px;
            height: 400px;
            background-color: coral;
            --r: calc(var(--position) - var(--offset));
            --abs: max(calc(var(--r) * -1), var(--r));
            transition: all 0.25s linear;
            transform: rotateY(calc(-10deg * var(--r))) translateX(calc(-300px * var(--r)));
            z-index: calc((var(--position) - var(--abs)));
        }

        div.item:nth-of-type(1) {
            --offset: 1;
            background-color: #90f1ef;
        }

        div.item:nth-of-type(2) {
            --offset: 2;
            background-color: #ff70a6;
        }

        div.item:nth-of-type(3) {
            --offset: 3;
            background-color: #ff9770;
        }

        div.item:nth-of-type(4) {
            --offset: 4;
            background-color: #ffd670;
        }

        div.item:nth-of-type(5) {
            --offset: 5;
            background-color: #e9ff70;
        }

        input:nth-of-type(1) {
            grid-column: 2 / 3;
            grid-row: 2 / 3;
        }

        input:nth-of-type(1):checked~main#carousel {
            --position: 1;
        }

        input:nth-of-type(2) {
            grid-column: 3 / 4;
            grid-row: 2 / 3;
        }

        input:nth-of-type(2):checked~main#carousel {
            --position: 2;
        }

        input:nth-of-type(3) {
            grid-column: 4 /5;
            grid-row: 2 / 3;
        }

        input:nth-of-type(3):checked~main#carousel {
            --position: 3;
        }

        input:nth-of-type(4) {
            grid-column: 5 / 6;
            grid-row: 2 / 3;
        }

        input:nth-of-type(4):checked~main#carousel {
            --position: 4;
        }

        input:nth-of-type(5) {
            grid-column: 6 / 7;
            grid-row: 2 / 3;
        }

        input:nth-of-type(5):checked~main#carousel {
            --position: 5;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="container">
        <header class="blog-header lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 col-md-6 pt-1">
                    <img src="../assets/brand/shop-logo.jpeg" height="50px" width="50px" alt="">
                    <a class="link-secondary" style="text-decoration: none;" href="./index.php">Smart Shop Management</a>
                </div>
                <div class="col-8 col-md-6 d-flex justify-content-end align-items-center">
                    <nav class="nav d-flex justify-content-between">
                        <a class="p-2 link-secondary" style="text-decoration: none;" href="./index.php">Home</a>
                        <a class="p-2 link-secondary" style="text-decoration: none;" href="./service.php">Service</a>
                        <a class="p-2 link-secondary" style="text-decoration: none;" href="./about.php">About</a>
                        <a class="p-2 link-secondary" style="text-decoration: none;" href="./contact.php">Contact</a>
                        <a class="p-2 link-secondary" style="text-decoration: none;" href="./product.php">Products</a>
                    </nav>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <a class="btn btn-sm btn-outline-danger" href="./login.php">Logout</a>
                    <?php } else {  ?>
                        <a class="btn btn-sm btn-outline-secondary" href="./login.php">Sign In</a>
                        <a class="btn btn-sm btn-outline-secondary" href="./register.php">Sign up</a>
                    <?php } ?>
                </div>
            </div>
        </header>

    </div>

    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION['username'])) : ?>
        <p class="text-center">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 fst-italic">Smart Shop provides awesome Services</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="../assets/image1.jpg" width="200" height="250" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img src="../assets/image1.jpg" width="200" height="250" alt="">

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="body">
                <input type="radio" name="position" checked />
                <input type="radio" name="position" />
                <input type="radio" name="position" />
                <input type="radio" name="position" />
                <input type="radio" name="position" />
                <main id="carousel">
                    <div class="item">
                    <img src="../assets/image1.jpg" height="400" width="300"alt="">
                    </div>
                    <div class="item">
                    <img src="https://dummyjson.com/image/i/products/12/1.jpg" height="400" width="300"alt="">
                    </div>
                    <div class="item">
                    <img src="https://dummyjson.com/image/i/products/12/3.png" height="400" width="300"alt="">
                    </div>
                    <div class="item">
                    <img src="https://dummyjson.com/image/i/products/12/4.jpg" height="400" width="300"alt="">
                    </div>
                    <div class="item">
                    <img src="https://dummyjson.com/image/i/products/13/1.jpg height="400" width="300"alt="">
                    </div>
                    <main>
            </div>
        </div>

    </main>

    <footer class="blog-footer">
        <p>
            Develop by Saiful Islam
        </p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

</body>

</html>