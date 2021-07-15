<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- dùng bootstrap -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <!-- HEADER -->
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- HEADER -->

        <!-- CONTENT -->
        <div class="col-12 row">
            <div class="col-2">
                @include('sidebar');
            </div>

            <div class="col-10">
                @yield('contents')
            </div>
        </div>
        <!-- CONTENT -->

        <!-- FOOTER -->
        <div class="col-12">
            <h2 class="text-center bg-warning">DOANHPT10742</h2>
        </div>
        <!-- FOOTER -->


    </div>
    <!-- <script src="/bootstrap/js/"></script> -->
</body>

</html>
