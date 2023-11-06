<!DOCTYPE html>

<head>
    @include('back-end.layouts.partials.head')
    @include('back-end.layouts.partials.css')
    @stack('css')
</head>

<body>


    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">







            <!-- Menu -->

            @include('back-end.layouts.partials.menu')
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">





                <!-- Navbar -->



                @include('back-end.layouts.partials.header')




            



                <!-- / Navbar -->



                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        @yield('content')





                    </div>
                    <!-- / Content -->




                    @include('back-end.layouts.partials.footer')


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->

</body>

@include('back-end.layouts.partials.script')
@stack('script')
<!-- Mirrored from demos.pixinvent.com/frest-html-admin-template/html/vertical-menu-template/layouts-container.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 16:04:51 GMT -->

</html>

<!-- beautify ignore:end -->
