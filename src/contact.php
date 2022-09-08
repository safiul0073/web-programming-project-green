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
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>Blog Template · Bootstrap v5.2</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">

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
                        <?php  if (isset($_SESSION['username'])) { ?>
                            <a class="btn btn-sm btn-outline-danger" href="./login.php">Logout</a>
                        <?php }else {  ?>
                            <a class="btn btn-sm btn-outline-secondary" href="./login.php">Sign In</a>
                            <a class="btn btn-sm btn-outline-secondary" href="./register.php">Sign up</a>
                        <?php } ?>
                    </div>
                </div>
            </header>

        </div>
        <main class="container">
            <div class="text-center pt-5">
                <p>Contact with Us.</p>
            </div>
            <div class="row">
                <div class="col-6 mx-auto">
                    <form action="">
                        <div class="form-group mt-4">
                            <label for="username">User Name</label>:</label>
                            <input class="form-control" type="username" id="username" name="username" placeholder="mr">
                        </div>
                        <div class="form-group mt-2">
                            <label for="email">Email:</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="example@example.com">
                        </div>
                        <div class="form-group mt-2">
                            <label for="feedback">Feedback:</label>
                            <textarea name="feedback" class="form-control" id="feedback" cols="30" rows="10"></textarea>
                        </div>
                        <div class="d-flex justify-content-center align-items-center my-4">
                            <button type="submit" class="btn btn-secondary">Send</button>
                        </div>
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