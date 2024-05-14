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
            @if (auth()->user()->role == 'superadmin')
            <li class="menu-header">Hak Akses</li>
            <li class="{{ Request::is('hakakses') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('hakakses') }}"><i class="fas fa-user"></i> <span>Edit Role</span></a>
            </li>
            @endif
            <li class="menu-header">Profile</li>
            <li class="{{ Request::is('profile/edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/edit') }}"><i class="fas fa-user"></i> <span>Edit Profile</span></a>
            </li>
            <li class="{{ Request::is('profile/ganti-password') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/ganti-password') }}"><i class="fas fa-key"></i> <span>Ganti Password</span></a>
            </li>
            <li class="menu-header">Pages</li>
            {{--   @if (auth()->user()->role == 'data_mhs' || auth()->user()->role == 'operatorpt')  --}}
            <li class="{{ Request::is('data_mhs') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('data_mhs') }}"><i class="fas fa-newspaper"></i> <span>Data Mahasiswa</span></a>
            </li>
            {{--   @endif  --}}
             @if (auth()->user()->role == 'data_prodi' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('data_prodi') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('data_prodi') }}"><i class="fas fa-university"></i> <span>Data Prodi</span></a>
            </li>
             @endif
             @if (auth()->user()->role == 'data_pt' || auth()->user()->role == 'superadmin')
            <li class="{{ Request::is('data_pt') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('data_pt') }}"><i class="fas fa-university"></i> <span>Data Perguruan Tinggi</span></a>
            </li>
             @endif

        </ul>
    </aside>
</div>
@endauth
