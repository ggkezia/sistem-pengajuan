<div class="wrapper">{{-- membagi kode menjadi beberapa file Blade yang dimuat ke dalam file utama dengan 
    menggunakan directive @include atau @yield. Dalam hal ini, file-file tersebut secara implisit akan 
    ditutup oleh Blade saat di-render dalam file utama. --}}
    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                BEMU
                </a>
            </div>
            <ul class="nav">
                <li class="nav-item {{ Request::is('bemu/home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('bemu.home') }}">
                        {{-- <i class="nc-icon nc-chart-pie-35"></i> --}}
                        <p>HOME</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('bemu/kegiatan') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('bemu.kegiatan') }}">
                        {{-- <i class="nc-icon nc-circle-09"></i> --}}
                        <p>DAFTAR KEGIATAN</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('bemu/proposal') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('bemu.proposal') }}">
                        {{-- <i class="nc-icon nc-notes"></i> --}}
                        <p>DAFTAR PROPOSAL</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
