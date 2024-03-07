<aside class="sidebar" data-trigger="scrollbar">
    <!-- Sidebar Profile Start -->
    <div class="sidebar--profile">
        <div class="profile--img">
            <a href="#">
                <img src="assets/admin/assets/img/admin_icon.png" alt="" class="rounded-circle">
            </a>
        </div>

        <div class="profile--name">
            <a href="profile.html" class="btn-link">Admin Desa</a>
        </div>

        <div class="profile--nav">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link" title="Logout">
                    <i class="fa fa-sign-out-alt"></i>
                </button>
            </form>
        </div>        
    </div>
    <!-- Sidebar Profile End -->

    <!-- Sidebar Navigation Start -->
    <div class="sidebar--nav">
        <ul>
            <li>
                <ul>
                    <li class="active">
                        <a href="admin/dashboard">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin/konten">
                            <i class="fa fa-book"></i>
                            <span>Konten Desa</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Lapak Desa</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-signal"></i>
                            <span>Statistik Desa</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Sidebar Navigation End -->
</aside>