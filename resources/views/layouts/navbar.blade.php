<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <div class="px-1 bg-white ">
                <marquee class="py-1">Selamat Datang di<b> Rekrutmen</b> Universitas Andalas</marquee>
            </div>

        </li>
    </ul>
    {{-- <ul class="navbar-nav">
        <li class="nav-item">


        </li>

    </ul> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('') }}assets/dist/img/user-ua.png"
                    class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-olive">
                    <img src="{{ asset('') }}assets/dist/img/user-ua.png" class="img-circle elevation-2"
                        alt="User Image">

                    <p>
                        {{ Auth::user()->name }}
                        <small>{{ Auth::user()->level }}</small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="/personal/profile" class="btn btn-default btn-flat">Profile</a>
                    <a class="btn btn-default btn-flat float-right"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); //memtaikan akses awal event bawaan href
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
