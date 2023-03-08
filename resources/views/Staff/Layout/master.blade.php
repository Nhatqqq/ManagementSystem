<!DOCTYPE html>
<html lang="en">

<head>

    @include('Staff.Layout.header')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Staff.Layout.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('Staff.Layout.topbar')
                <!-- End of Topbar -->
                @yield('content')
                <!-- Begin Page Content -->

                <!-- /.container-fluid -->
                <!-- Footer -->
                @include('Staff.Layout.footer')
                <!-- End of Footer -->
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('Staff.Layout.logout')

</body>
@include('Staff.Layout.js')

</html>
