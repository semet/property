<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/admin/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="{{ asset('/') }}assets/admin/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="{{ asset('/') }}assets/admin/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('/') }}assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header py-4 text-center bg-primary">
                            <h2 class="text-white">Admin Login</h2>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center pb-0 fw-bold">Login</h4>
                            </div>

                            {{ $slot }}
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        {{ now()->year }} © Real Estate
    </footer>
    <!-- Vendor js -->
    <script src="{{ asset('/') }}assets/admin/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('/') }}assets/admin/js/app.min.js"></script>

</body>

</html>
