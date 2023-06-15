<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('dashboard.index') }}" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{ url('admin/menu') }}" aria-expanded="false">
                    <i class="fa fa-cutlery"></i>
                    <span class="nav-text">Menu Makanan & Minuman</span>
                </a>
            </li>
            <li><a href="{{ url('admin/table') }}" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-table"></i>
                    <span class="nav-text">Meja</span>
                </a>
            </li>
            <li><a href="{{ url('admin/reservation') }}" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-calendar"></i>
                    <span class="nav-text">Reservasi</span>
                </a>
            </li>
            <li><a href="{{ route('admin.pemesanan') }}" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-money"></i>
                    <span class="nav-text">Pemesanan</span>
                </a>
            </li>
            <li><a href="{{ route('admin.messages.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="fa fa-money"></i>
                    <span class="nav-text">Kritik Dan Saran</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->
