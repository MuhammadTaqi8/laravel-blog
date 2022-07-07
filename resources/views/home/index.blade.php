<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Blog</title>
        <!-- Bootstrap CSS -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->

        <link rel="stylesheet" href="/css/app.css">
        <style>
         body {
             background: #e2e2e2;
         }
         
         header {
             min-height: 150px;
             background: #666;
             padding: 20px;
             margin-bottom: 15px;
         }
         
         .footer-content {
             padding-top: 10px;
         }
         
         .header-title,
         .header-sub {
             color: #e2e2e2;
         }
         
         .header-sub {
             border-top: 1px solid #ccc;
             border-bottom: 1px solid #ccc;
             padding: 3px 0;
         }
         
         .content {
             background: #fff;
             padding: 20px;
             margin-bottom: 10px;
         }
        </style>
    </head>
<body>
       
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <script src="/js/app.js"></script>

        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h3>Laravel Blog</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Users</a>
                </li>
                <li class="nav-item">
                <a class="nav-link">blog</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>

        

        

        <header class="text-center">
            <h1 class="header-title">Laravel Blog</h1>
            <span class="header-sub">Created by <b>Me</b></span>
        </header>

        <!-- Main content begins -->
        <div class="main-content">
            <div class="container">
                <div class="content">
                    <h3>Getting Started with Laravel</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
            </div>
        </div>
        <!-- Main content ends here --> 

        <!-- Page footer begins -->
        <footer class="navbar navbar-fixed-bottom">
            <div class="container text-center">
                &copy; {{ date('Y')}}. All rights reserved.
            </div>
        </footer>
    </body>
</html>