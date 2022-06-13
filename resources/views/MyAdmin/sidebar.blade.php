<!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo text-white" href="{{route('admin.category.index')}}"> Admin Panel</a>
        <a class="sidebar-brand brand-logo-mini text-white " href="{{route('admin.category.index')}}">Admin Panel</a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>


        <li class="nav-item nav-category">
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                <span class="menu-title">Dashbord</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.category.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/product">
              <span class="menu-icon">
                <i class="mdi mdi mdi-laptop"></i>
              </span>
                <span class="menu-title">Products</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route("admin.comment.index")}}">
              <span class="menu-icon">
                <i class="mdi mdi mdi-comment-processing"></i>
              </span>
                <span class="menu-title">Comments</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route("admin.message.index")}}">
              <span class="menu-icon">
                <i class="mdi mdi-message-text"></i>
              </span>
                <span class="menu-title">Message</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route("admin.user.index")}}">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
                <span class="menu-title">Users</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-currency-btc"></i>
              </span>
                <span class="menu-title">Order</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/admin/order/new">New Order</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/order/accepted">Accepted Order</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/order/canceled">Canceled Order</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/order/shipped">Shipping Order</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/order/completed">Completed Orders</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/social">
              <span class="menu-icon">
                <i class="mdi mdi-facebook-box"></i>
              </span>
                <span class="menu-title">Social</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route("admin.faq.index")}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-question"></i>
              </span>
                <span class="menu-title">FOQ</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/setting">
              <span class="menu-icon">
                <i class="mdi mdi-account-question"></i>
              </span>
                <span class="menu-title">Settings</span>
            </a>
        </li>

    </ul>
</nav>
<!-- partial -->
