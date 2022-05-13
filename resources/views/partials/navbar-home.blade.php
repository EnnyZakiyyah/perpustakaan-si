<nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
    <div class="container"><a class="navbar-brand" href="index.html"><img src="{{asset('assets/img/logo/User-Manual.png')}}" height="47" alt="logo" /><img src="{{asset('assets/img/logo/logo-lptp.png')}}" height="38" alt="logo" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
      <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/sirkulasi" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sirkulasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/home/sirkulasi/peminjaman-buku">Peminjaman Buku</a></li>
              <li><a class="dropdown-item" href="/home/sirkulasi/pengembalian-buku">Pengembalian Buku</a></li>
              <li><a class="dropdown-item" href="/home/sirkulasi/penelusuran-katalog">Penelusuran Katalog</a></li>
              <li><a class="dropdown-item" href="/home/sirkulasi/bebas-pustaka">Bebas Pustaka</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/layanan" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/home/layanan/keanggotaan">Keanggotaan</a></li>
              <li><a class="dropdown-item" href="/home/layanan/bibliography">Bibliography</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" aria-current="page" href="/home/koleksi-digital/koleksi-digital">Koleksi Digital</a></li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/sirkulasi" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Koleksi Digital
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/home/koleksi-digital/buku">Buku</a></li>
              <li><a class="dropdown-item" href="/home/koleksi-digital/majalah">Majalah</a></li>
              <li><a class="dropdown-item" href="/home/koleksi-digital/booklet">Booklet</a></li>
              <li><a class="dropdown-item" href="/home/koleksi-digital/laporan-ta">Laporan TA</a></li>
              <li><a class="dropdown-item" href="/home/koleksi-digital/laporan-program">Laporan Program</a></li>
              <li><a class="dropdown-item" href="/home/koleksi-digital/softfile">Softfile</a></li>
            </ul>
          </li> --}}
        </ul>
        <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="/sign-in">Sign In</a><a class="btn btn-warning ms-3" href="/sign-up">Sign Up</a></div>
      </div>
    </div>
  </nav>