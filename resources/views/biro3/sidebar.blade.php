<div class="wrapper">{{-- membagi kode menjadi beberapa file Blade yang dimuat ke dalam file utama dengan 
    menggunakan directive @include atau @yield. Dalam hal ini, file-file tersebut secara implisit akan 
    ditutup oleh Blade saat di-render dalam file utama. --}}
    <div class="sidebar" data-color="purple" data-image="{{ asset('/assets/img/sidebar-5.jpg') }}">
        <div class="sidebar-wrapper">
            <div class="logo">
              <a class="simple-text">
                  BIRO III
              </a>
            </div>
            <ul class="nav">
                <li class="nav-item {{ Request::is('biro3/home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('biro3.home') }}">
                        {{-- <i class="nc-icon nc-chart-pie-35"></i> --}}
                        <p>HOME</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('biro3/pengguna') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('biro3.pengguna') }}">
                        {{-- <i class="nc-icon nc-circle-09"></i> --}}
                        <p>DAFTAR PENGGUNA</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('biro3/daftar') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('biro3.daftar') }}">
                        {{-- <i class="nc-icon nc-circle-09"></i> --}}
                        <p>DAFTAR PENGAJUAN PROPOSAL</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('biro3/proposal') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('biro3.proposal') }}">
                        {{-- <i class="nc-icon nc-notes"></i> --}}
                        <p>VALIDASI PROPOSAL</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('biro3/lpj') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('biro3.lpj') }}">
                        {{-- <i class="nc-icon nc-notes"></i> --}}
                        <p>VALIDASI LPJ</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
