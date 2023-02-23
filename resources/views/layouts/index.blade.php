<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <section class="nav-site ">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark rounded" style="z-index: 10">
                    <div class="container ">
                        <a class="navbar-brand" href="#">Dunia Wibu</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Season
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ url('home/winter') }}">Winter</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('home/summer') }}">Summer</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('home/spring') }}">Spring</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('home/fall') }}">Fall</a></li>


                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/notes">Notes</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    </section>

    <header class="site-header">
        <img src=" {{ asset('assets/images/header.png') }}" class="img-header" alt="" style="z-index: 5" />
    </header>
    <div class="outer-container">
        <div class="row">
            <div class="col-lg-2 left" style="z-index: 1">
                <div class="img-bg-1">
                    <img src=" {{ asset('assets/images/login-img.png') }}" class="img-bg-left" alt="" />
                </div>
            </div>
            <div class="col-lg-8" style="z-index: 2">
                <div class="container content-main-box">

                    @yield('content')



                </div>
            </div>
            <div class="col-lg-2 right" style="z-index: 1">
                <div class="img-bg-2">
                    <img src=" {{ asset('assets/images/login-img-2.png') }}" class="img-bg-right" alt="" />
                </div>
            </div>
        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
