<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SIDPM</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link id="bootstrap-css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> -->


</head>

<body style="background-color: #ffffff;">
    <div id="wrapper" class="active">
        @include('layout.sidebar')

        <!-- Halaman Konten -->
        <div id="page-content-wrapper">

            <div class="page-content inset">
                <div class="row">
                    <div class="col-md-12">
                        @include('layout.navbar')
                    </div>
                </div>

                <div class="content">
                    @yield('content')
                </div>
            </div>

        </div>

    </div>
</body>

</html>