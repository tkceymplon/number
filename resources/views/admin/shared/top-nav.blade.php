<nav class="navbar topnavbar">
    <!-- START navbar header-->
    <div class="navbar-header">
        <a class="navbar-brand" href="#/">
            <div class="brand-logo">
              Trincomale Campus <!-- <img class="img-fluid" src="{{ asset('admin/img/logo.png') }}" alt="App Logo"> -->
            </div>
            <div class="brand-logo-collapsed">
           <!-- <img class="img-fluid" src="{{ asset('admin/img/logo-single.png') }}" alt="App Logo"> -->
            </div>
        </a>
    </div>
    <!-- END navbar header-->
    <!-- START Left navbar-->
    <ul class="navbar-nav mr-auto flex-row">
    <li class="nav-item">
        <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
        <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
        <em class="fas fa-bars"></em>
        </a>
        <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
        <a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
        <em class="fas fa-bars"></em>
        </a>
    </li>
    <!-- START User avatar toggle-->
    <li class="nav-item d-none d-md-block">
        <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
        <a class="nav-link" id="user-block-toggle" href="/viewuserdetail">
        <em class="icon-user"></em>
        </a>
    </li>
    <!-- END User avatar toggle-->
    <!-- START lock screen-->
    <li class="nav-item d-none d-md-block">
        <a class="nav-link" href="javascript:void(0)" title="Lock screen" onclick="$('.logout').submit()">
        <em class="icon-lock"></em>
        </a>
    </li>
    <!-- END lock screen-->
    </ul>
    <!-- END Left navbar-->
    <!-- START Right Navbar-->
    <ul class="navbar-nav flex-row">
    <!-- Search icon-->
    <li class="nav-item">
        <a class="nav-link" href="#" data-search-open="">
        <em class="icon-magnifier"></em>
        </a>
    </li>
    
    <!-- END Alert menu-->
    <!-- START Offsidebar button-->
   
    <!-- END Offsidebar menu-->
    </ul>
    <!-- END Right Navbar-->
    <!-- START Search form-->
    <form class="navbar-form" role="search" action="#">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Type and hit enter ...">
            <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
        </div>
        <button class="d-none" type="submit">Submit</button>
    </form>
    <!-- END Search form-->
</nav>
{{Form::open(['url'=>'logout','class'=>'logout'])}}

{{Form::close()}}