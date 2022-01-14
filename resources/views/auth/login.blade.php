<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/vendor/plainadmin/images/favicon.svg" type="image/x-icon" />
    <title>Sign In</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="/vendor/plainadmin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/vendor/plainadmin/css/main.css" />
</head>

<body>

    <main class="">

        <!-- ========== signin-section start ========== -->
        <section class="">
            <div class="">

                <div class="row g-0 auth-row">
                    <div class="col-lg-6">
                        <div class="auth-cover-wrapper bg-primary-100">
                            <div class="auth-cover">
                                <div class="title text-center">
                                    <h1 class="text-primary mb-10">Selamat Datang Kembali 👋</h1>
                                    <p class="text-medium">
                                        Yuk login dulu
                                    </p>
                                </div>
                                <div class="cover-image">
                                    <img src="/vendor/plainadmin/images/auth/signin-image.svg" alt="" />
                                </div>
                                <div class="shape-image">
                                    <img src="/vendor/plainadmin/images/auth/shape.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-6">
                        <div class="signin-wrapper">
                            <div class="form-wrapper">
                                <h6 class="mb-15">Form login</h6>
                                <p class="text-sm mb-25">
                                    Mulai ciptakan pengalaman pelanggan anda sebaik mungkin.
                                </p>

                                <div class="row">
                                    <!-- end col -->
                                    <form action={{route('auth.loggingin')}} method="post">
                                        @csrf
                                        <div class="col-12">
                                            <div class="input-style-1">
                                                <label>Email</label>
                                                <input name="email" type="email" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-style-1">
                                                <label>Password</label>
                                                <input name="pass" type="password" placeholder="Password" />
                                            </div>
                                        </div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @if (Session::has('failed'))
                                            <div class="alert alert-danger">
                                                {{Session::get('failed')}}
                                            </div>
                                        @endif
                                        <div class="col-12">
                                            <div
                                                class="
                                          button-group
                                          d-flex
                                          justify-content-center
                                          flex-wrap
                                        ">
                                                <button
                                                    class="
                                            main-btn
                                            primary-btn
                                            btn-hover
                                            w-100
                                            text-center
                                          "
                                                    type="submit">
                                                    Sign In
                                                </button>
                                            </div>
                                        </div>
                                    </form>



                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->
            </div>
        </section>
        <!-- ========== signin-section end ========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="/vendor/plainadmin/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/plainadmin/js/main.js"></script>
</body>

</html>
