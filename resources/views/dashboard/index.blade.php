<!DOCTYPE html>
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="assets/dashboard/images/logo/favicon.svg">
    <!-- BEGIN: Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- END: Google Font -->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="assets/dashboard/css/sidebar-menu.css">
    <link rel="stylesheet" href="assets/dashboard/css/SimpleBar.css">
    <link rel="stylesheet" href="assets/dashboard/css/app.css">
    <!-- END: Theme CSS-->
    <script src="assets/dashboard/js/settings.js" sync></script>
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
                                <div class="mb-5">
                                    <ul class="m-0 p-0 list-none">
                                        <li
                                            class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                                            <a href="index.html">
                                                <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                                <iconify-icon icon="heroicons-outline:chevron-right"
                                                    class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                                            </a>
                                        </li>
                                        <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                                            Utility
                                            <iconify-icon icon="heroicons-outline:chevron-right"
                                                class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                                        </li>
                                        <li
                                            class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                                            Blank-Page</li>
                                    </ul>
                                </div>
                                <!-- END: BreadCrumb -->
                                <div class=" space-y-5">
                                    <h6>Your Content...</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN: Footer For Desktop and tab -->
            <footer class="md:block hidden" id="footer">
                <div
                    class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
                    <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
                        <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
                            COPYRIGHT ©
                            <span id="thisYear"></span>
                            DashCode, All rights Reserved
                        </div>
                        <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
                            Hand-crafted &amp; Made by
                            <a href="https://codeshaper.net" target="_blank" class="text-primary-500 font-semibold">
                                Codeshaper
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END: Footer For Desktop and tab -->
            <div
                class="bg-white bg-no-repeat custom-dropshadow footer-bg dark:bg-slate-700 flex justify-around items-center
    backdrop-filter backdrop-blur-[40px] fixed left-0 bottom-0 w-full z-[9999] bothrefm-0 py-[12px] px-4 md:hidden">
                <a href="chat.html">
                    <div>
                        <span
                            class="relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900 ">
                            <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
                            <span
                                class="absolute right-[5px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
                                10
                            </span>
                        </span>
                        <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                            Messages
                        </span>
                    </div>
                </a>
                <a href="profile.html"
                    class="relative bg-white bg-no-repeat backdrop-filter backdrop-blur-[40px] rounded-full footer-bg dark:bg-slate-700
      h-[65px] w-[65px] z-[-1] -mt-[40px] flex justify-center items-center">
                    <div class="h-[50px] w-[50px] rounded-full relative left-[0px] hrefp-[0px] custom-dropshadow">
                        <img src="assets/dashboard/images/users/user-1.jpg" alt=""
                            class="w-full h-full rounded-full border-2 border-slate-100">
                    </div>
                </a>
                <a href="#">
                    <div>
                        <span
                            class=" relative cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center mb-1 dark:text-white
          text-slate-900">
                            <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
                            <span
                                class="absolute right-[17px] lg:hrefp-0 -hrefp-2 h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
            justify-center rounded-full text-white z-[99]">
                                2
                            </span>
                        </span>
                        <span class=" block text-[11px] text-slate-600 dark:text-slate-300">
                            Notifications
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <!-- scripts -->
    <!-- Core Js -->
    <script src="assets/dashboard/js/jquery-3.6.0.min.js"></script>
    <script src="assets/dashboard/js/popper.js"></script>
    <script src="assets/dashboard/js/tw-elements-1.0.0-alpha13.min.js"></script>
    <script src="assets/dashboard/js/SimpleBar.js"></script>
    <script src="assets/dashboard/js/iconify.js"></script>
    <!-- Jquery Plugins -->

    <!-- app js -->
    <script src="assets/dashboard/js/sidebar-menu.js"></script>
    <script src="assets/dashboard/js/app.js"></script>
</body>

</html>
