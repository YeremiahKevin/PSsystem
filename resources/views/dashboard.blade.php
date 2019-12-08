<html lang="en-us">
<head>
    <title>Login</title>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

    {{--CSS Login--}}
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    {{--Javascript login--}}
    <script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>

    {{--token login--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #a8b7a9">
<div class="container h-100">
    <div class="row h-100 justify-content-center">
        <div class="col p-0" style="background-color: white">
            <div class="col-md-12 text-center bg-primary">
                <span class="font-weight-bold font-50">PS System</span>
            </div>
            <div>
                <i class="fas fa-ad"></i>
                <i class="fas fa-ad fa-5x"></i>
            </div>
        </div>
    </div>
</div>
</body>
</html>