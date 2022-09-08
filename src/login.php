<?php include('server.php') ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>Blog Template · Bootstrap v5.2</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">





        <link href="../lib/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
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
        </style>


        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="main.css" rel="stylesheet">
    </head>

    <body>

        <div class="container">
            <header class="blog-header lh-1 py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 col-md-6 pt-1">
                    <img src="../assets/brand/shop-logo.jpeg" height="50px" width="50px" alt="">
                        <a class="link-secondary" style="text-decoration: none;" href="#">Smart Shop Management</a>
                    </div>
                    <div class="col-8 col-md-6 d-flex justify-content-end align-items-center">
                        <nav class="nav d-flex justify-content-between">
                            <a class="p-2 link-secondary" style="text-decoration: none;" href="./index.php">Home</a>
                            <a class="p-2 link-secondary" style="text-decoration: none;" href="./service.php">Service</a>
                            <a class="p-2 link-secondary" style="text-decoration: none;" href="./about.php">About</a>
                            <a class="p-2 link-secondary" style="text-decoration: none;" href="./contact.php">Contact</a>
                            <a class="p-2 link-secondary" style="text-decoration: none;" href="./product.php">Products</a>
                        </nav>
                        <a class="btn btn-sm btn-outline-secondary" href="./login.php">Sign In</a>
                        <a class="btn btn-sm btn-outline-secondary" href="./register.php">Sign up</a>
                    </div>
                </div>
            </header>

        </div>

        <main class="container" style="height: 450px;">
            <div class="text-center pt-5">
                <p>Enter Login Information</p>
            </div>
            <div class="row">
                <div class="col-12 mx-auto">
                    <form method="post" action="login.php">
                    <?php include('errors.php'); ?>
                    <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" >
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn2" name="login_user">Login</button>
                    </div>
                    <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
                    </form>
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