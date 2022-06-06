{{-- <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
    <a href="/dashboard" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li> --}}
{{-- 
  <!-- Sirkulasi -->
  <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle {{ Request::is('/dashboard/sirkulasi/*') ? 'active' : '' }}">
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
   --}}

   <nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
       
					<center><div class="main-menu py-3">
            <a href="/">
              <!-- ========   change your logo hear   ============ -->
              <img src="{{ asset('assets-dashboard/dist/assets/images/logo/logo-lptp.png') }}" height="38" alt="" class="logo"/>
              <img src="{{ asset('assets-dashboard/dist/assets/images/logo/User-Manual.png') }}" alt="" />
            </a>
					</div></center>
			
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
					    <label>Navigation</label>
					</li>
					<li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
					    <a href="/dashboard" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link {{ Request::is('dashboard/sirkulasi*') ? 'active' : '' }}"><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Sirkulasi</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="/dashboard/sirkulasi/peminjaman-buku" target="_blank">Peminjaman Buku</a></li>
					        <li><a href="/dashboard/sirkulasi/pengembalian-buku" target="_blank">Pengembalian Buku</a></li>
                  <li><a href="/dashboard/sirkulasi/penelusuran-katalog" target="_blank">Penelusuran Katalog</a></li>
                  <li><a href="/dashboard/sirkulasi/bebas-pustaka" target="_blank">Bebas Pustaka</a></li>
					    </ul>
					</li>
          <li class="nav-item pcoded-hasmenu">
            <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Layanan</span></a>
            <ul class="pcoded-submenu {{ Request::is('/dashboard/layanan*/') ? 'active' : '' }}">
                <li><a href="/dashboard/layanan/keanggotaan" target="_blank">Keanggotaan</a></li>
                <li><a href="/dashboard/layanan/bibliography" target="_blank">Bibliography</a></li>
            </ul>
        </li>
        <li class="nav-item">
          <a href="/dashboard/koleksi-digital" class="nav-link {{ Request::is('/dashboard/koleksi-digital') ? 'active' : '' }}"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Koleksi Digital</span></a>
        </li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Pages</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
					        <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
					    </ul>
					</li>
					<li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>

				</ul>
				
			</div>
		</div>
	</nav>