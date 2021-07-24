<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CoreUI CSS -->
        <link rel="stylesheet" href="{{asset('vendors/css/style.css')}}">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <div class="min-vh-100 d-flex flex-row align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card-group">
                            <div class="card p-4 mb-0">
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{asset('vendors/js/coreui.bundle.min.js')}}"></script>
    </body>
</html>