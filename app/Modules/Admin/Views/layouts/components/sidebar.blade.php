<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    <img src="{{asset('admin/images/users/2.jpg')}}" alt="user-img" class="img-circle">
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                        data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">{{ auth()->user()->name}}
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i>
                            {{ __('Đăng xuất') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark {{ request()->route()->getName() == 'admin.user' ? 'active' : "" }}"
                        href="{{ route('admin.user') }}" aria-expanded="false">
                        <i class="ti-user"></i>
                        <span class="hide-menu">Khách hàng
                        </span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark {{ request()->route()->getName() == 'admin.token' ? 'active' : "" }}"
                        href="{{ route('admin.token') }}" aria-expanded="false">
                        <i class="ti-key"></i>
                        <span class="hide-menu">Token</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#"
                        {{ request()->is('admin/config') ? 'active' : "" }}" aria-expanded="false">
                        <i class="ti-settings"></i>
                        <span class="hide-menu">Config</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('admin.config.detail') }}">Danh sách </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.config.upload') }}">Upload </a>
                        </li>
                    </ul>
                </li>
                <li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
