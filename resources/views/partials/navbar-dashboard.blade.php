<li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
    <a href="/dashboard" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>

  <!-- Sirkulasi -->
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-layout"></i>
      <div data-i18n="Layouts">Sirkulasi</div>
    </a>

    <ul class="menu-sub">
      <li class="menu-item">
        <a href="/dashboard/sirkulasi/peminjaman-buku" class="menu-link">
          <div data-i18n="Without menu">Peminjaman Buku</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="/dashboard/sirkulasi/pengembalian-buku" class="menu-link">
          <div data-i18n="Without navbar">Pengembalian Buku</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="/dashboard/sirkulasi/penelusuran-katalog" class="menu-link">
          <div data-i18n="Container">Penelusuran Katalog</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="/dashboard/sirkulasi/bebas-pustaka" class="menu-link">
          <div data-i18n="Fluid">Bebas Pustaka</div>
        </a>
      </li>
    </ul>
  </li>

  <!-- Layanan -->
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-layout"></i>
      <div data-i18n="Layouts">Layanan</div>
    </a>

    <ul class="menu-sub">
      <li class="menu-item">
        <a href="/dashboard/layanan/keanggotaan" class="menu-link">
          <div data-i18n="Without menu">Keanggotaan</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="/dashboard/layanan/bibliography" class="menu-link">
          <div data-i18n="Without navbar">Bibliography</div>
        </a>
      </li>
    </ul>
  </li>

  <li class="menu-item">
    <a href="/dashboard/koleksi-digital" class="menu-link">
      <i class="menu-icon tf-icons bx bx-collection"></i>
      <div data-i18n="Basic">Koleksi Digital</div>
    </a>
  </li>

  <li class="menu-header small text-uppercase">
    <span class="menu-header-text">Pages</span>
  </li>
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-dock-top"></i>
      <div data-i18n="Account Settings">Account Settings</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item">
        <a href="pages-account-settings-account.html" class="menu-link">
          <div data-i18n="Account">Account</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="pages-account-settings-notifications.html" class="menu-link">
          <div data-i18n="Notifications">Notifications</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="pages-account-settings-connections.html" class="menu-link">
          <div data-i18n="Connections">Connections</div>
        </a>
      </li>
    </ul>
  </li>
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
      <div data-i18n="Authentications">Authentications</div>
    </a>
    <ul class="menu-sub">
      <li class="menu-item">
        <a href="auth-login-basic.html" class="menu-link" target="_blank">
          <div data-i18n="Basic">Login</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="auth-register-basic.html" class="menu-link" target="_blank">
          <div data-i18n="Basic">Register</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
          <div data-i18n="Basic">Forgot Password</div>
        </a>
      </li>
    </ul>
  </li>
  
