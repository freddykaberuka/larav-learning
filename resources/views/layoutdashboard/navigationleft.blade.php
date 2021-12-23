
    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">Soccer <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading">Menu</li>
                <li class=" {{ Route::is('dashboard') ? 'active': ''}}  "><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li class="{{ Route::is('category') ? 'active': ''}}"><a href="{{route('category')}}"><i class="fa fa-dashboard"></i><span>category</span></a></li> 
                <li class="{{ Route::is('blog') ? 'active': ''}}"><a href="{{route('blog')}}"><i class="fa fa-dashboard"></i><span>blog</span></a></li> 
                </ul>
        </nav>        
    </div>