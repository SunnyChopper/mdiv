<!--========== HEADER ==========-->
<header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
    <!-- Navbar -->
    <div class="s-header__navbar">
        <div class="s-header__container">
            <div class="s-header__navbar-row">
                <div class="s-header__navbar-row-col">
                    <!-- Logo -->
                    <div class="s-header__logo">
                        <a href="/" class="s-header__logo-link">
                            <img class="s-header__logo-img s-header__logo-img-default" src="{{ URL::asset('img/logo.png') }}" alt="New Age Startup Logo">
                            <img class="s-header__logo-img s-header__logo-img-shrink" src="{{ URL::asset('img/logo-dark.png') }}" alt="New Age Startup Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>
                <div class="s-header__navbar-row-col">
                    <!-- Trigger -->
                    <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                        <span class="s-header__trigger-icon"></span>
                        <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                            <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                        </svg>
                    </a>
                    <!-- End Trigger -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

    <!-- Overlay -->
    <div class="s-header-bg-overlay js__bg-overlay">
        <!-- Nav -->
        <nav class="s-header__nav js__scrollbar">
            <div class="container-fluid">
                @if(Auth::guest())
                    <!-- Menu List -->                                
                    <ul class="list-unstyled s-header__nav-menu">
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/">Home</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/blog">Blog</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/contact">Contact</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/public-courses">Public Courses</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/login">Login</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/register">Register</a></li>
                    </ul>
                    <!-- End Menu List -->
                @elseif(session()->has('admin_login'))
                    <!-- Menu List -->                                
                    <ul class="list-unstyled s-header__nav-menu">
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/admin/dashboard">Dashboard</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/admin/posts/view">Blog Posts</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/admin/public-courses/view">Public Courses</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/admin/logout">Logout</a></li>
                    </ul>
                    <!-- End Menu List -->
                @else
                    <!-- Menu List -->                                
                    <ul class="list-unstyled s-header__nav-menu">
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/members/dashboard">Dashboard</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/members/project-board/view">ProjectBoard</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/public-courses">Public Courses</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/profile/{{ Auth::user()->id }}">{{ Auth::user()->first_name }}</a></li>
                        <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="/members/logout">Logout</a></li>
                    </ul>
                    <!-- End Menu List -->
                @endif
            </div>
        </nav>
        <!-- End Nav -->
        

        <!-- Action -->
        <ul class="list-inline s-header__action s-header__action--rb">
            <li class="s-header__action-item">
                <a class="s-header__action-link" href="https://www.instagram.com/millionairedivision">
                    <i class="g-padding-r-5--xs ti-instagram"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                </a>

                <a class="s-header__action-link" href="https://www.twitter.com/newagestartup">
                    <i class="g-padding-r-5--xs ti-twitter"></i>
                    <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                </a>
            </li>
        </ul>
        <!-- End Action -->
    </div>
    <!-- End Overlay -->
</header>
<!--========== END HEADER ==========-->