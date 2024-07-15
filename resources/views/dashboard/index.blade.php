<!DOCTYPE html>
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="assets/dashboard/images/logo/favicon.svg">
    <x-dashboard.style />
    @stack('css')
</head>

<body class=" font-inter dashcode-app" id="body_class">
    <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
    <main class="app-wrapper">
        <!-- BEGIN: Sidebar -->
        <x-dashboard.sidebar />
        <!-- End: Sidebar -->
        <!-- BEGIN: Settings -->

        <!-- BEGIN: Settings -->
        <!-- Settings Toggle Button -->
        <x-dashboard.settings.toggle-button />

        <!-- BEGIN: Settings Modal -->
        <x-dashboard.settings.toggle-modal />
        <!-- END: Settings Modal -->
        <!-- END: Settings -->

        <!-- End: Settings -->
        <div class="flex flex-col justify-between min-h-screen">
            <div>
                <!-- BEGIN: Header -->
                <x-dashboard.header />
                <!-- END: Header -->
                <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">
                        <div class="transition-all duration-150 container-fluid" id="page_layout">
                            <div id="content_layout">
                                <!-- BEGIN: Breadcrumb -->
                                <x-dashboard.breadcrumb />
                                <!-- END: BreadCrumb -->
                                <div class=" space-y-5">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN: Footer For Desktop and tab -->

            <x-dashboard.footer />
            <!-- END: Footer For Desktop and tab -->

            <!-- BEGIN: Footer For Mobile -->
            <x-dashboard.mobile-bottom-bar />
            <!-- END: Footer For Mobile -->
        </div>
    </main>
    <!-- scripts -->
    <x-dashboard.script />
    @stack('js')

</body>

</html>
