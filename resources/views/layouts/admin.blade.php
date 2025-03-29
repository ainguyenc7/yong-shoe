<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Custom styles for this page -->
    @include('layouts.head')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    @include('layouts.sidebar')

    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
             @include('layouts.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
            @yield('content')


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

{{--        <!-- Footer -->--}}
{{--        <footer class="sticky-footer bg-white">--}}
{{--            <div class="container my-auto">--}}
{{--                <div class="copyright text-center my-auto">--}}
{{--                    <span>Copyright &copy; Your Website 2019</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </footer>--}}
{{--        <!-- End of Footer -->--}}

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
@include('layouts.footer')
</body>

</html>
