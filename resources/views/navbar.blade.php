<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/74a05d25da.js" crossorigin="anonymous"></script>
        <style>
            .navbar {
                padding: 0;
            }
            .nav-item {
                font-family: sans-serif;
                font-weight: bold;
                font-size: 20px;
                padding-left: 40px;
                padding-right: 40px;
            }
            #circle {
                width: 500px;
                height: 500px;
                border-radius: 50%;
                border: 10px solid #C8DF52;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            #line1 {
                font-size: 40px;
                margin-top: 10px;
                margin-bottom: 0;
            }

            #line2 {
                font-size: 40px;
            }
            
            .register{
                width: 600px;
            }

            .register .btn {
                width: 100px;
                background-color: #C8DF52;
            }

            .register .btn:hover {
                background-color: gray;
            }

            .login {
                width: 400px;
                margin-top: 1.6%;
                margin-bottom: 4%;
            }

            .login .btn {
                width: 100px;
                background-color: #C8DF52;
            }

            .login .btn:hover {
                background-color: gray;
            }

            .productList img{
                width: 200px;
                height: 150px;
                border-radius: 10px 10px 0 0;
            }

            .profile{
                width: 70%;
            }

            .profile .btn {
                width: 100px;
                background-color: #C8DF52;
            }

            .profile .btn:hover {
                background-color: gray;
            }

            .profile img{
                max-width: 200px;
            }
        </style>
    </head>

    <body>
        <div style="background-color: #77FFBB;">
            <div class="d-flex justify-content-center p-2 pt-3" style="font-family: serif;">
                <h1 style="font-weight: bold;">Amazing E-Grocery</h1>
            </div>
            <div class="position-absolute top-0 end-0 mt-3">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                @if(Auth::check())
                                    <li class="nav-item p-0">
                                        <a class="nav-link" style="background-color: #C8DF52;" href="/logout">Logout</a>
                                    </li>
                                @else
                                    <li class="nav-item p-0">
                                        <a class="nav-link" style="background-color: #C8DF52;" href="/register">Register</a>
                                    </li>
                                    <li class="nav-item p-0">
                                        <a class="nav-link" style="background-color: #C8DF52;" href="/login">Login</a>
                                    </li>
                                @endif			
                            </ul>		  
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        

        @if(Auth::check())
            <nav class="navbar navbar-expand-lg" style="background-color: #C8DF52;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cart">Cart</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/profile">Profile</a>
                            </li>
                            @if(auth()->user()->role_id === 1)
                                <li class="nav-item">
                                    <a class="nav-link" href="/manageAccount">Account Maintanance</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        @endif

        @yield('content')

        <footer class="bg-light text-center text-lg-start" style="bottom: 0;">
            <div class="text-center p-2" style="background-color: #77FFBB;">
                &#169; Amazing E-Grocery 2023
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
