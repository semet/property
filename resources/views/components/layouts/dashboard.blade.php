<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- TODO: Change this --}}
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

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <x-partials.admin.topbar />
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <x-partials.admin.sidebar />
        <!-- ========== Left Sidebar End ========== -->


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <x-partials.admin.page-title />
                    <!-- end page title -->

                    {{ $slot }}

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <x-partials.admin.footer />
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @routes
    <!-- Vendor js -->
    <script src="{{ asset('/') }}assets/admin/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('/') }}assets/admin/js/app.min.js"></script>

</body>

</html>
