<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/img/logo ungu.png" type="image/x-icon" />
    <title>@yield('title')</title>

    <!-- ========== All CSS files linkup ========= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/vendor/plainadmin/css/lineicons.css" />
    <link rel="stylesheet" href="/vendor/plainadmin/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/vendor/plainadmin/css/main.css" />
    <link rel="stylesheet" href="/assets/css/app.css" />
    @yield('css')
</head>

<body>
    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
        <div class="navbar-logo">
            <a href="index.html">
                <h3>PT Smart</h3>
                {{-- <img src="/vendor/plainadmin/images/logo/logo.svg" alt="logo" /> --}}
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-item">
                    <a class="link" href={{ route('dashboard.calonCus') }}>
                        <i class="ri-customer-service-line"></i>
                        <span class="text ml-3">Calon Customer</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="link" href={{ route('dashboard.customer') }}>
                        <i class="ri-customer-service-2-line"></i>
                        <span class="text ml-3">Customer</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="link" href={{ route('dashboard.product') }}>
                        <i class="ri-archive-line"></i>
                        <span class="text ml-3">Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="link" href={{route('dashboard.approval')}}>
                        <i class="ri-shield-check-line"></i>
                        <span class="text ml-3">Approval</span>
                    </a>
                </li>

                <span class="divider">
                    <hr />
                </span>
            </ul>
        </nav>

    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        <header class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-6">
                        <div class="header-left d-flex align-items-center">
                            <div class="menu-toggle-btn mr-20">
                                <button id="menu-toggle" class="btn btn-outline-secondary">
                                    <i class="lni lni-chevron-left me-2"></i> Menu
                                </button>
                            </div>
                            <!-- ========== title-wrapper start ========== -->
                            <div class="m-auto">
                                <div class="title">
                                    <h4>@yield('title')</h4>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-6">
                        <div class="header-right">
                            <!-- profile start -->
                            <div class="profile-box ml-15">
                                <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="profile-info">
                                        <div class="info">
                                            <h6>Akun</h6>
                                            <div class="image">
                                                <img src='https://ui-avatars.com/api/?background=random&name=Akun'
                                                    alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <i class="lni lni-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                    <li>
                                        <a href='#'> <i class="lni lni-exit"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- profile end -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== header end ========== -->

        <!-- ========== section start ========== -->
        <section class="section">
            <div class="container-fluid">
                <!-- ========== content-start ========== -->
                <div class="mt-20">
                    @yield('content')
                </div>
                <!-- ========== content-end ========== -->
            </div>
            <!-- end container -->
        </section>
        <!-- ========== section end ========== -->

        <!-- ========== footer start =========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                        <div class="copyright text-center text-md-start">
                            <p class="text-sm">
                                Developed by Lazuardi
                            </p>
                        </div>
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    {{-- <script src="/vendor/plainadmin/js/Chart.min.js"></script>
    <script src="/vendor/plainadmin/js/dynamic-pie-chart.js"></script>
    <script src="/vendor/plainadmin/js/moment.min.js"></script>
    <script src="/vendor/plainadmin/js/fullcalendar.js"></script>
    <script src="/vendor/plainadmin/js/jvectormap.min.js"></script>
    <script src="/vendor/plainadmin/js/world-merc.js"></script>
    <script src="/vendor/plainadmin/js/polyfill.js"></script> --}}
    <script src="/vendor/plainadmin/js/main.js"></script>

    @yield('script')

    <script>
        let navLink = [...document.querySelectorAll('.link')];
        let currLocUrl = window.location.href;

        navLink.map(element => {
            if (element.href === currLocUrl) {
                element.parentNode.classList.add('active');
            }
        });
    </script>
</body>

</html>
