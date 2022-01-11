  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="/">
          <img src="admin/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          @if (Auth::user()->role == 'Admin')
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="/dashboard">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-digital-tachograph"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/datamobil">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-car"></i>
                <span class="nav-link-text">Data Mobil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/datasupir">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-id-card"></i>
                <span class="nav-link-text">Data Supir</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/jadwal">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-calendar-alt"></i>
                <span class="nav-link-text">Jadwal Peminjaman</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/identitas">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-id-card-alt"></i>
                <span class="nav-link-text">Identitas Peminjam</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/tagihan">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-money-check-alt"></i>
                <span class="nav-link-text">Tagihan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/pembayaran">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-wallet"></i>
                <span class="nav-link-text">Pembayaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/about">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-map-marked-alt"></i>
                <span class="nav-link-text">Maps</span>
              </a>
            </li>
          </ul>
          @endif
          @if (Auth::user()->role !== 'Admin')
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link active" href="/dashboard">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-digital-tachograph"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/jadwal">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-calendar-alt"></i>
                <span class="nav-link-text">Jadwal Peminjaman</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/identitas">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-id-card-alt"></i>
                <span class="nav-link-text">Identitas Peminjam</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/tagihan">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-money-check-alt"></i>
                <span class="nav-link-text">Tagihan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/pembayaran">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-wallet"></i>
                <span class="nav-link-text">Pembayaran</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/about">
                <i class="ni ni-tv-2 text-primary"></i>
                <i class="fas fa-map-marked-alt"></i>
                <span class="nav-link-text">Maps</span>
              </a>
            </li>
          </ul>
          @endif
        </div>
      </div>
    </div>
  </nav>