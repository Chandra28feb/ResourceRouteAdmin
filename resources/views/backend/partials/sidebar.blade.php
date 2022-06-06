<div class="sidebar" data-color="orange">

    <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->

    <div class="logo">

        <a href="{{route('admin.dashboard')}}" class="simple-text logo-mini">{{ mb_substr(env('APP_NAME'),0,1)}}</a>

        <a href="{{route('admin.dashboard')}}" class="simple-text logo-normal">{{ env('APP_NAME')}}</a>

        <div class="navbar-minimize">

            <button id="minimizeSidebar" class="btn btn-outline-white btn-icon btn-round">

                <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>

                <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>

            </button>

        </div>

    </div>

    <div class="sidebar-wrapper" id="sidebar-wrapper">

        <div class="user">

            <div class="photo">

                <img src="{{ asset('backend/avatar/'.auth()->user()->avatar) }}">

            </div>

            <div class="info">

                <a data-toggle="collapse" href="#collapseExample" class="collapsed">

                    <span>{{ auth()->user()->name }}<b class="caret"></b></span>

                </a>

                <div class="clearfix"></div>

                <div class="collapse" id="collapseExample">

                    <ul class="nav">

                        <li>

                            <a href="{{route('admin.profile')}}">

                                <span class="sidebar-mini-icon">MP</span>

                                <span class="sidebar-normal">My Profile</span>

                            </a>

                        </li>

                        <li>

                            <a href="{{route('admin.profile.edit')}}">

                                <span class="sidebar-mini-icon">EP</span>

                                <span class="sidebar-normal">Edit Profile</span>

                            </a>

                        </li>

                        <li>

                            <a href="{{route('admin.password.edit')}}">

                                <span class="sidebar-mini-icon">EP</span>

                                <span class="sidebar-normal">Change Password</span>

                            </a>

                        </li>

                        <li>

                            <a href="{{route('admin.logout')}}">

                                <span class="sidebar-mini-icon">L</span>

                                <span class="sidebar-normal">Logout</span>

                            </a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

        <ul class="nav">

            <li class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">

                <a href="{{ route('admin.dashboard') }}">

                    <i class="now-ui-icons design_app"></i>

                    <p>Dashboard</p>

                </a>

            </li>
            <li class="{{ Route::currentRouteName() == 'company.index' ? 'active' : '' }}">

                <a href="{{ route('company.index') }}">

                    <i class="now-ui-icons design_app"></i>

                    <p>Company</p>

                </a>

            </li>
            <li>





                <a data-toggle="collapse" href="#pagesExamples"

                    aria-expanded="{{ Route::currentRouteName() == 'admin.users' ? 'true' : 'false' }}"

                    class="{{ Route::currentRouteName() == 'admin.users' ? '' : 'colapsed' }}"

                    style="{{ Route::currentRouteName() == 'admin.users' ? 'background-color: hsla(0,0%,100%,.1)' : '' }}">



                    <i class="now-ui-icons users_circle-08"></i>



                    <p>

                        Users <b class="caret"></b>

                    </p>

                </a>



                <div class="{{ Route::currentRouteName() == 'admin.users' ? 'collapse show' : 'collapse' }} "

                    id="pagesExamples">

                    <ul class="nav">



                        <li class="{{ Route::currentRouteName() == 'admin.users' ? 'active' : '' }}">

                            <a href="{{ route('admin.users') }}">

                                <span class="sidebar-mini-icon">A U</span>

                                <span class="sidebar-normal">All Users</span>

                            </a>

                        </li>

                    </ul>

                </div>

            </li>

        </ul>

    </div>

</div>

