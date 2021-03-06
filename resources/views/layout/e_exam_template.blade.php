<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/3.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('sourcefile_exam') }}/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('sourcefile_exam') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('sourcefile_exam') }}/css/exam.css">
    <link rel="stylesheet" href="{{ asset('sourcefile_exam') }}/css/info_page.css">
    <link rel="stylesheet" href="{{ asset('sourcefile_exam') }}/css/answers.css">
    <title>SHIKHBOAMRA | EXAM</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="#">Shikhboamra</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            {{-- <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="subjects.html">Start Exam</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="challange_friend.html">Challange Friend</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="#">Login</a>
                </li>
              </ul>
            </div> --}}
          </div>
        </nav>
      </header>
        <div class="content">
            @yield('content')            
        </div>
        <script src="{{ asset('sourcefile_exam') }}/vendor/jquery/jquery.min.js"></script>
        <script src="{{ asset('sourcefile_exam') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ asset('/') }}/routes.js"></script>
        <script src="{{ asset('sourcefile_exam') }}/js/style.js"></script>
        <script src="{{ asset('sourcefile_exam') }}/js/utils.js"></script>
        @yield('page_js')
    </body>
</html>