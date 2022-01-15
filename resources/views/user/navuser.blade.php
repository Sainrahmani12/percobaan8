        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="admin/assets/img/brand/white.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#mobil">Mobil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#supir">Supir</a></li>
                        <li class="nav-item"><a class="nav-link" href="#jadwal">Jadwal</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tagihan">Tagihan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pembayaran">Pembayaran</a></li>
                        <li class="nav-item"><a class="nav-link" href="#maps">Maps</a></li>
                        @if(isset(Auth::user()->role))
                        @if (Auth::user()->role !== 'User')
                        <li class="nav-item"><a class="nav-link" href="/pemesanan">Pemesanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="/dashboard">Admin</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                    @endif
                    @if (Auth::user()->role == 'User')
                    <li class="nav-item"><a class="nav-link" href="/pemesanan">Pemesanan</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endif
                    @else
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>