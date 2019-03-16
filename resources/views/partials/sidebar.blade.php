@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

             

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('quickadmin.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('quickadmin.roles.title')</span>
                        </a>
                    </li>@endcan
                    
                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('quickadmin.users.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan
            
            @can('blog_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>@lang('quickadmin.blog-section.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.categories.index') }}">
                            <i class="fa fa-book"></i>
                            <span>@lang('quickadmin.categories.title')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.blogs.index') }}">
                            <i class="fa fa-book"></i>
                            <span>@lang('quickadmin.blog.title')</span>
                        </a>
                    </li>
                </ul>
            </li>@endcan
            
            @can('event_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-trophy"></i>
                    <span>@lang('quickadmin.event-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('event_access')
                    <li>
                        <a href="{{ route('admin.events.index') }}">
                            <i class="fa fa-trophy"></i>
                            <span>@lang('quickadmin.events.title')</span>
                        </a>
                    </li>@endcan
                    
                </ul>
            </li>@endcan

            @can('tournament_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>@lang('quickadmin.tournament-section.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
		    @can('tournamentset_access')
                    <li>
                        <a href="{{ route('admin.tournamentsets.index') }}">
                            <i class="fa fa-calendar-alt"></i>
                            <span>@lang('quickadmin.tournamentsets.title')</span>
                        </a>
                    </li>@endcan
		    @can('tournament_access')
                    <li>
                        <a href="{{ route('admin.tournaments.index') }}">
                            <i class="fa fa-calendar-day"></i>
                            <span>@lang('quickadmin.tournaments.title')</span>
                        </a>
                    </li>
		    @endcan
                </ul>
            </li>@endcan

            @can('product_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>@lang('quickadmin.product-section.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.products.index') }}">
                            <i class="fa fa-calendar-alt"></i>
                            <span>@lang('quickadmin.products.title')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.product_subpages.index') }}">
                            <i class="fa fa-calendar-day"></i>
                            <span>@lang('quickadmin.product_subpages.title')</span>
                        </a>
                    </li>
                </ul>
            </li>@endcan

            @can('faqs_access')
            <li>
                <a href="{{ route('admin.faqs.index') }}">
                    <i class="fa fa-question"></i>
                    <span class="title">@lang('quickadmin.faqs.title')</span>
                </a>
            </li>@endcan
            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

