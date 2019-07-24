<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div>
                    <img src="images/users/2.jpg" alt="user-img" class="img-circle">
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                <a class="waves-effect waves-dark {{ request()->route()->getName() == 'admin.user' ? 'active' : "" }}" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-user"></i>
                        <span class="hide-menu">Khách hàng
                        </span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark {{ request()->route()->getName() == 'admin.token' ? 'active' : "" }}" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-key"></i>
                        <span class="hide-menu">Token</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark {{ request()->route()->getName() == 'admin.log' ? 'active' : "" }}" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-star"></i>
                        <span class="hide-menu">Lịch sử</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
