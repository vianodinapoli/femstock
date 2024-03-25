<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FEM STOCK</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('assets/auth/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/vendor/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/vendor/bootstrap/scss/_dropdown.scss') }}">


    <link rel="stylesheet" href="{{ asset('assets/auth/vendor/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/vendor/jquery/jquery.js') }}">


    @push('scripts')
        <script src="{{ asset('assets/auth/js/sb-admin-2.js') }}"></script>
        <script src="{{ asset('assets/auth/js/sb-admin-2.min.js') }}"></script>


        <script src="{{ asset('assets/auth/js/sb-admin-2.js') }}"></script>
        <script src="{{ asset('assets/auth/js/sb-admin-2.min.js') }}"></script>
    @endpush
</head>



<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    {{-- <img src="{{ asset('assets/auth/img/logoFEM-03 copy 2.png') }}" alt="Logo da Minha Empresa"> --}}
                </div>
                <div class="sidebar-brand-text mx-4">FEM<sup>Stock 1.0</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Página Inicial</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('users.index') }}" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Usuários</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Usuários no sistema:</h6>
                        <a class="collapse-item" href="{{ route('users.index') }}">Usuários</a>
                        {{-- <a class="collapse-item" href="cards.html">Cards</a> --}}
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>DOC VIATURAS</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Empresas:</h6>
                        <a class="collapse-item" href="{{route('femviatura.index')}}">FEM</a>
                        <a class="collapse-item" href="">Africola</a>
                        <a class="collapse-item" href="">Bymoze</a>
                        <a class="collapse-item" href="">Pavymoze</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Paiol 4 - GEMULEX
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('gemulex.index') }}" data-toggle="collapse"
                    data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>GEMULEX 32</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Referências de Gemulex</h6>
                        <a class="collapse-item" href="{{ route('gemulex.index') }}">Gemulex S100 32</a>
                        <a class="collapse-item" href="#">Gemulex S100 50</a>
                        <a class="collapse-item" href="#">Gemulex S100 65</a>
                        <a class="collapse-item" href="#">Gemulex S100 90</a>
                        {{-- <div class="collapse-divider"></div> --}}
                        {{-- <h6 class="collapse-header">Other Pages:</h6> --}}
                        {{-- <a class="collapse-item" href="404.html">404 Page</a> --}}
                        {{-- <a class="collapse-item" href="blank.html">Blank Page</a> --}}
                    </div>
                </div>

                {{-- <a class="nav-link collapsed" href="" data-toggle="collapse"
                    data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>DINAMITE ANCO</span>
                </a> --}}
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('anfo.index') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>ANCO</span></a>
            </li>



            <!-- Nav Item - Tables -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>FEM STOCK</strong> is packed with premium features, components, and
                    more!</p>
                <a class="btn btn-success btn-sm" href="">-</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <h6
                        style="    background-color: red;
                    color: #fff;
                    font-size: 13px;
                    margin: 10px;
                    padding: 4px;">
                        Sistema ainda em desenvolvimento, por favor, contribua reportando erros e dando sugestões!</h6>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown arrow">
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a style="color: #4b4b4b" id="navbarDropdown" class="nav-link dropdown-toggle"
                                            href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">FEM STOCK</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Imprimir Dashboard</a>
                    </div> --}}

                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>

            </div>


        </div>

    </div>






    </div>

    </div>
    <!-- Footer -->

    @stack('scripts')
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<script src="{{ asset('assets/auth/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/auth/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/auth/js/demo/datatables-demo.js') }}"></script>

</html>
@include('notify::components.notify')
