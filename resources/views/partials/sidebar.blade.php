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

            @can('gestão_de_pedido_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>@lang('quickadmin.gestao-de-pedidos.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('order_access')
                    <li>
                        <a href="{{ route('admin.orders.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.orders.title')</span>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>@endcan

            @can('gestão_de_empresa_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>@lang('quickadmin.gestao-de-empresas.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('company_access')
                    <li>
                        <a href="{{ route('admin.companies.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.companies.title')</span>
                        </a>
                    </li>@endcan

                    @can('partner_access')
                    <li>
                        <a href="{{ route('admin.partners.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.partner.title')</span>
                        </a>
                    </li>@endcan

                    @can('partner_type_access')
                    <li>
                        <a href="{{ route('admin.partner_types.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.partner-type.title')</span>
                        </a>
                    </li>@endcan

                </ul>
            </li>@endcan

            @can('gestão_de_premiação_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>@lang('quickadmin.gestao-de-award.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('award_access')
                    <li>
                        <a href="{{ route('admin.awards.index') }}">
                            <i class="fa fa-gears"></i>
                            <span>@lang('quickadmin.award.title')</span>
                        </a>
                    </li>@endcan

                        @can('score_access')
                        <li>
                            <a href="{{ route('admin.scores.report') }}">
                                <i class="fa fa-asterisk"></i>
                                <span>@lang('quickadmin.score.report')</span>
                            </a>
                        </li>
                        @endcan

                    @can('score_access')
                    <li>
                        <a href="{{ route('admin.scores.index') }}">
                            <i class="fa fa-asterisk"></i>
                            <span>@lang('quickadmin.score.title')</span>
                        </a>
                    </li>@endcan

                </ul>
            </li>@endcan

            @can('cliente_access')
            <li>
                <a href="{{ route('admin.clientes.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('quickadmin.clientes.title')</span>
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

