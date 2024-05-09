@auth
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <a href="">Digitalisasi KIP</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="">Digitalisasi KIP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Starter</li>
            <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('blank-page') }}"><i class="far fa-square"></i> <span>Blank Page</span></a>
            </li>
            <li class="menu-header">Profile</li>
            <li class="{{ Request::is('profile/edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/edit') }}"><i class="fas fa-user"></i> <span>Edit Profile</span></a>
            </li>
            <li class="{{ Request::is('profile/ganti-password') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profile/ganti-password') }}"><i class="fas fa-key"></i> <span>Ganti Password</span></a>
            </li>
        </ul>
    </aside>
</div>
@endauth
