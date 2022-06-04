{{-- <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('assets-dashboard/assets/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <form action="/logout" method="POST">
                        @csrf
                        <a class="dropdown-item">
                          <i class="bx bx-power-off me-2"></i>
                          <button class="align-middle bg-transparent border-0 text-secondary" type="submit">Log Out</button>
                        </a>
                      </form>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav> --}}

          <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
            <div class="m-header">
              <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
              <a href="/" class="b-brand" style="font-weight: bold">
                <!-- ========   change your logo hear   ============ -->
                LPTP SURAKARTA
              </a>
              <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
              </a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                  <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li>
                  <div class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                    <div class="dropdown-menu dropdown-menu-right notification">
                      <div class="noti-head">
                        <h6 class="d-inline-block m-b-0">Notifications</h6>
                        <div class="float-right">
                          <a href="#!" class="m-r-10">mark as read</a>
                          <a href="#!">clear all</a>
                        </div>
                      </div>
                      <ul class="noti-body">
                        <li class="n-title">
                          <p class="m-b-0">NEW</p>
                        </li>
                        <li class="notification">
                          <div class="media">
                            <img class="img-radius" src="{{ asset('assets-dashboard/dist/assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image">
                            <div class="media-body">
                              <p><strong>Enny</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                              <p>New ticket Added</p>
                            </div>
                          </div>
                        </li>
                        <li class="n-title">
                          <p class="m-b-0">EARLIER</p>
                        </li>
                        <li class="notification">
                          <div class="media">
                            <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                              <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                              <p>Prchace New Theme and make payment</p>
                            </div>
                          </div>
                        </li>
                        <li class="notification">
                          <div class="media">
                            <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                              <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                              <p>currently login</p>
                            </div>
                          </div>
                        </li>
                        <li class="notification">
                          <div class="media">
                            <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                              <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                              <p>Prchace New Theme and make payment</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="noti-footer">
                        <a href="#!">show all</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                      <div class="pro-head">
                        <img src="{{ asset('assets-dashboard/dist/assets/images/user/avatar-1.jpg') }}" class="img-radius" alt="User-Profile-Image">
                        <span>John Doe</span>
                        <form action="/logout" method="POST">
                          @csrf
                          <a class="dud-logout" title="Logout">
                            <button class="align-middle bg-transparent border-0 text-secondary" type="submit" ><i class="feather icon-log-out" style="color: white"></i></button>
                          </a>
                        </form>
                      </div>
                      <ul class="pro-body">
                        <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                        <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                        <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            
          
      </header>