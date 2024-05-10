@auth
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <div class="card-header text-center d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid" style="width: 150px;">
                    </div>
                </div>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <div class="card-header text-center d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/tutwuri.png') }}" alt="Logo" class="img-fluid mt-2" style="width: 40px;">
                    </div>
                </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            {{--  @if (auth()->user()->role == 'superadmin')  --}}
            <li class="menu-header">Hak Akses</li>
            <li class="{{ Request::is('hakakses') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('hakakses') }}"><i class="fas fa-user"></i> <span>Edit Role</span></a>
            </li>
            {{--  @endif  --}}
            <li class="menu-header">Profile</li>
            <li class="{{ Request::is('profile/edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/edit') }}"><i class="fas fa-user"></i> <span>Edit Profile</span></a>
            </li>
            <li class="{{ Request::is('profile/ganti-password') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/ganti-password') }}"><i class="fas fa-key"></i> <span>Ganti Password</span></a>
            </li>
            {{--  @if (auth()->user()->role == 'berita' || auth()->user()->role == 'superadmin')
            <li class="menu-header">Pages</li>
            <li class="{{ Request::is('berita') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('berita') }}"><i class="fas fa-newspaper"></i> <span>Data Berita</span></a>
            </li>
            @endif
            @if (auth()->user()->role == 'akreditasi' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('akreditasi') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('akreditasi') }}"><i class="fas fa-university"></i> <span>Data Akreditasi</span></a>
            </li>
            @endif
            @if (auth()->user()->role == 'dataperguruantinggi' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('pt') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('pt') }}"><i class="fas fa-university"></i> <span>Data Perguruan Tinggi</span></a>
            </li>
            @endif
            @if (auth()->user()->role == 'dataprodi' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('prodi') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('prodi') }}"><i class="fas fa-university"></i> <span>Data Prodi</span></a>
            </li>
            @endif
            @if (auth()->user()->role == 'fasilitas_pt' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('fasilitas_pt') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('fasilitas_pt') }}"><i class="fas fa-university"></i> <span>Data Fasilitas PT</span></a>
            </li>
            @endif
            @if (auth()->user()->role == 'fasilitasprodi' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('fasilitasprodi') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('fasilitasprodi') }}"><i class="fas fa-university"></i> <span>Data Fasilitas Prodi</span></a>
            </li>
            @endif
            @if (auth()->user()->role == 'struktural' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('struktural') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('struktural') }}"><i class="fas fa-university"></i> <span>Data Struktural</span></a>
            </li>
            @endif
            @if (auth()->user()->role == 'statuta' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('statuta') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('statuta') }}"><i class="fas fa-university"></i> <span>Data Statuta</span></a>
            </li>
            @endif
            @if (auth()->user()->role == 'sdm' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('sdm') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('sdm') }}"><i class="fas fa-university"></i> <span>Data SDM</span></a>
            </li>
            @endif
            @if (auth()->user()->role == 'pedoman' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('pedoman') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('pedoman') }}"><i class="fas fa-university"></i> <span>Data Pedoman</span></a>
            </li>
            @endif  --}}
        </ul>
    </aside>
</div>
@endauth
