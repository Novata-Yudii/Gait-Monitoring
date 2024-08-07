<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">Pages</li>

        @can('acces_admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Users</span>
                </a>
            </li>
        @endcan

        @can('acces_author')
            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Users</span>
                </a>
            </li>
        @endcan

        <li class="nav-item">
            <a class="nav-link collapsed" href="/patient">
                <i class="bi bi-person"></i>
                <span>Patients</span>
            </a>
        </li>
    </ul>
</aside>
