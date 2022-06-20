<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posu | Dashboard</title>

    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/dashboard">Posu</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-dark border-0">
                        Logout<span data-feather="log-out"></span></button>

                </form>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    {{-- sidebar menu --}}
                    <ul class="nav flex-column">
                        {{-- kasir --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/cashier">
                                <span data-feather="dollar-sign" class="align-text-bottom"></span>
                                Kasir
                            </a>
                        </li>
                        {{-- pesanan --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/Order">
                                <span data-feather="book-open" class="align-text-bottom"></span>
                                Pesanan
                            </a>
                        </li>
                        {{-- riwayat pesanan --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/OrderHistory">
                                <span data-feather="shopping-bag" class="align-text-bottom"></span>
                                Riwayat pesanan
                            </a>
                        </li>

                        {{-- analisis --}}
                        {{-- dashboard --}}
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/Dashboard">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        {{-- pengeluaran --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/Outcome">
                                <span data-feather="credit-card" class="align-text-bottom"></span>
                                Pengeluaran
                            </a>
                        </li>
                        {{-- laporan keuangan --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/MoneyStatement">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Laporan Keuangan
                            </a>
                        </li>

                        {{-- produk --}}
                        {{-- resep --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/Menu">
                                <span data-feather="book" class="align-text-bottom"></span>
                                Mengelola Menu Resep
                            </a>
                        </li>
                        {{-- mengelola stock --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/Stock">
                                <span data-feather="package" class="align-text-bottom"></span>
                                Mengelola Stock
                            </a>
                        </li>
                        {{-- riwayat mengelola stock --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/StockMutation">
                                <span data-feather="clipboard" class="align-text-bottom"></span>
                                Mutasi stock
                            </a>
                        </li>

                        {{-- karyawan --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/employee">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Karyawan
                            </a>
                        </li>
                        {{-- setting --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/Setting">
                                <span data-feather="settings" class="align-text-bottom"></span>
                                Pengaturan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('title_menu')</h1>
                </div>

                @yield('content')

            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="/js/dashboard.js"></script>
</body>

</html>
