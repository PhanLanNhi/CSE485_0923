<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./icons-1.11.0/icons-1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>
    <div class="container-fluid p-0">
        <?php
            include 'header.php';
        ?>
        <!-- main -->
        <div class="main">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-4 d-flex justify-content-center align-items-center">
                        <div class="body__main rounded p-4 d-flex flex-column" style="background-color: #7e7c7c;">
                            <div class="body__header d-flex">
                                <h4 class="text-white">Sign in</h4>
                                <div class="body__header-wrapp d-flex" style="left: 150px;">
                                    <a class="h1 text-warning" href="#"><i class="fa-brands fa-square-facebook"></i></a>
                                    <a class="h1 text-warning" href="#"><i class="fa-brands fa-square-google-plus"></i></a>
                                    <a class="h1 text-warning" href="#"><i class="fa-brands fa-square-twitter"></i></a>
                                </div>
                            </div>
                            <div class="body__login border-top border-dark">
                                <form action="">
                                    <div class="form__group bg-white d-flex rounded mt-4 ">
                                        <i class="fa-solid fa-user px-2 py-2"></i>
                                        <input class="form-control px-4" type="text" placeholder="username">
                                    </div>
                                    <div class="form__group bg-white d-flex rounded mt-3">
                                        <i class="fa-solid fa-key px-2 py-2"></i>
                                        <input class="form-control px-4" type="text" placeholder="password">
                                    </div>
                                    <div class="body__check mt-2">
                                        <input type="checkbox">
                                        <span class="text-white ms-1">Remember me</span>
                                    </div>
                                    <button class="btn bg-warning px-4 m-3 rounded">Login</button>
                                </form>
                                <div class="dropdown-divider py-2 border-top border-dark"></div>
                                <a class="dropdown-item text-center" href="#">Don't have an account? <span class="text-warning"> Sign up</span></a>
                                <a class="dropdown-item text-warning text-center" href="#">Forgot your password?</a>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>