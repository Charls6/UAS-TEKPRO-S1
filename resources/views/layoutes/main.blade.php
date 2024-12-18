<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean & Cozy's</title>
        <base href="/#">
        <link rel="icon" type="image/png" href="image/logoc.png">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>    
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #e0f7fa;
                color: #343a40;
                margin: 0;
            }

            .navbar {
                background-color: #0288d1;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .navbar-brand {
                font-weight: bold;
                color: #fff !important;
            }

            .nav-link {
                color: #ddd !important;
            }

            .nav-link:hover {
                color: #fff !important;
            }

            .sb-sidenav {
                background-color: #4e73df;
                color: #ccc;
            }

            .btn-primary {
                background-color: #0288d1;
                border-color: #0288d1;
            }

            .btn-primary:hover {
                background-color: #0277bd;
                border-color: #0277bd;
            }

            .btn-danger {
                background-color: #e74a3b;
                border-color: #e74a3b;
            }

            .btn-danger:hover {
                background-color: #d33a2b;
                border-color: #d33a2b;
            }

            .breadcrumb {
                background-color: transparent;
                font-size: 14px;
            }

            .breadcrumb-item.active {
                font-weight: bold;
                color: #0288d1;
            }

            .card {
                border: none;
                border-radius: 10px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }

            .card-header {
                background-color: #0288d1;
                color: #fff;
                font-weight: bold;
                border-bottom: none;
            }

            .card-body {
                background-color: #ffffff;
            }

            #datatablesSimple {
                width: 100%;
                border-collapse: collapse;
            }

            #datatablesSimple th, 
            #datatablesSimple td {
                text-align: left;
                padding: 12px 15px;
                border: 1px solid #ddd;
            }

            #datatablesSimple th {
                background-color: #0288d1;
                color: #fff;
                font-weight: bold;
            }

            #datatablesSimple tbody tr:hover {
                background-color: #e0f7fa;
            }

            #datatablesSimple tbody tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            footer {
                background-color: #e0f7fa;
                color: #6c757d;
                padding: 10px 0;
                text-align: center;
                border-top: 1px solid #e7e7e7;
            }

            footer a {
                color: #0288d1;
                text-decoration: none;
            }

            footer a:hover {
                text-decoration: underline;
            }

            .logo {
                background-image: url("image/logoc.png");
            }

        </style>

    </head>
    <body class="sb-nav">
        <nav class="sb-topnav navbar navbar-expand navbar-blue bg-blue">
            <!-- Navbar Brand-->    
            <a class="navbar-brand mx-4" href="#">
                <img src="image/logoc.png" height="50">
                Clean & Cozy's
            </a>
        </nav>
        <div id="layoutSidenav">
            
            <div id="layoutSidenav_content">
                <main>
 
                    @yield('content')
 
                </main>
 
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Zephyrion</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/assets/demo/chart-area-demo.js"></script>
        <script src="/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="/js/datatables-simple-demo.js"></script>
    </body>
</html>