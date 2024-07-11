<div class="wrapper"> {{-- membagi kode menjadi beberapa file Blade yang dimuat ke dalam file utama dengan 
  menggunakan directive @include atau @yield. Dalam hal ini, file-file tersebut secara implisit akan 
  ditutup oleh Blade saat di-render dalam file utama. --}}
  <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
      <div class="logo">
          <a class="simple-text">
              UKM
              {{-- <div class="pp-name">{{ $user->name }}</div> --}}
          </a>
      </div>
      <ul class="nav">
        <li class="nav-item {{ Request::is('ukm/home') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('ukm.home') }}">
            {{-- <i class="nc-icon nc-chart-pie-35"></i> --}}
            <p>HOME</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('ukm/kegiatan') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('ukm.kegiatan') }}">
                {{-- <i class="nc-icon nc-circle-09"></i> --}}
                <p>PENGAJUAN KEGIATAN</p>
              </a>
        </li>
        <li class="nav-item {{ Request::is('ukm/proposal') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('ukm.proposal') }}">
                {{-- <i class="nc-icon nc-notes"></i> --}}
                <p>PENGAJUAN PROPOSAL</p>
              </a>
        </li>
        <li class="nav-item {{ Request::is('ukm/lpj') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('ukm.lpj') }}">
                {{-- <i class="nc-icon nc-paper-2"></i> --}}
                <p>LPJ</p>
              </a>
        </li>
        {{-- <li class="nav-item active active-pro">
            <a class="nav-link active" href="upgrade.html">
                <i class="nc-icon nc-alien-33"></i>
                <p>Upgrade to PRO</p>
            </a>
        </li> --}}
      </ul>
    </div>
  </div>
