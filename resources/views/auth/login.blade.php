
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <link rel="icon" type="image/png" href="./img/logoIFC2.png">
        <title>IFC 2019 - Dashboard</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="../codebase/assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="../codebase/assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('../codebase/assets/img/photos/Header.jpg');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-8 col-xl-8 d-none d-md-flex align-items-md-end">
                            <div class="p-30 invisible" data-toggle="appear">
                                <p class="font-size-h3 font-w600 text-white" style="margin-bottom: 0; ">
                                    Take It to The Next Level!
                                </p>
                                <p class="font-italic text-white-op">
                                    <img src="../img/logoUKM.png" width="40%" id="logoukm">
                                </p>
                            </div>
                        </div>
                        <div class="hero-static col-md-4 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-0 py-10">
                                    <a class=" font-w700" href="index.html">
                                            <img class="img-detail" src="../codebase/img/logo-ifc.png" style="width: 50%;" alt="">
                                    </a>
                                    <h1 class="h3 font-w700 mt-10 mb-10">Selamat Datang di Dashboardmu!</h1>
                                    <h2 class="h5 font-w400 text-muted mb-0">Silahkan sign in</h2>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.js) -->
                                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                <label for="login-username">Username</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                <label for="login-password">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary" onclick="window.location.href='dashboard'">
                                            <i class="si si-login mr-10"></i> {{ __('Login') }}
                                        </button>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="../codebase/assets/js/core/jquery.min.js"></script>
        <script src="../codebase/assets/js/core/bootstrap.bundle.min.js"></script>
        <script src="../codebase/assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="../codebase/assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="../codebase/assets/js/core/jquery.appear.min.js"></script>
        <script src="../codebase/assets/js/core/jquery.countTo.min.js"></script>
        <script src="../codebase/assets/js/core/js.cookie.min.js"></script>
        <script src="../codebase/assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="../codebase/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="../codebase/assets/js/pages/op_auth_signin.js"></script>
    </body>
</html>