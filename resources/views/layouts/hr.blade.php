<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- BOOTSTRAP STYLES-->
    <link href={{asset('css/bootstrap.css')}} rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href={{asset('css/style.css')}} rel="stylesheet" />
    @yield('css')
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  class="navbar-brand" href={{url('hr')}}>{{ config('app.name', 'Laravel') }}

            </a>
        </div>
        <div class="notifications-wrapper">
            <ul class="nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href={{url('account',Auth::user()->id)}}><i class="fa fa-user-plus"></i> My Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                              onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav  class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src={{url('images',Auth::user()->photo ? Auth::user()->photo->file : 'No Photo' )}} class="img-circle" />
                    </div>
                </li>
                <li>
                    <a  href={{url('/hr')}}> <strong>{{Auth::user()->name}} {{Auth::user()->lastname}}</strong></a>
                </li>
                <li>
                    <a class="active-menu"  href={{url('hr')}}><i class="fa fa-dashboard "></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap "></i>Employee  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('search')}}"><i class="fa fa-search "></i>Search Users</a>
                        </li>
                        <li>
                            <a href="{{route('users.create')}}"><i class="fa fa-user "></i>Create Users</a>
                        </li>
                        <li>
                            <a href="{{url('inactive')}}"><i class="fa fa-wheelchair "></i>Inactive Users</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-newspaper-o "></i>Announcement <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('post.create')}}"><i class="fa fa-pencil-square-o "></i>Create Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-tasks "></i>Job Role <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('jobs.index')}}"><i class="fa fa-wrench "></i>Create Job Description</a>
                        </li>
                        <li>
                            <a href="{{route('status.index')}}"><i class="fa fa-warning "></i>Status</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-empire "></i>Department <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('department.index')}}"><i class="fa fa-sort-desc "></i>View Department</a>
                        </li>
                        <li>
                            <a href="{{route('department.create')}}"><i class="fa fa-file-archive-o "></i>Create Department</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-life-ring "></i>Attendance <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href={{url('report')}}><i class="fa fa-gears "></i>Generate Attendance Report</a>
                        </li>
                        <li>
                            <a href={{route('sched.index')}}><i class="fa fa-calendar "></i> Shift Schedule</a>
                        </li>
                        <li>
                            <a href={{route('createleave.index')}}><i class="fa fa-scissors "></i>Create Leave Type</a>
                        </li>
                        <li>
                            <a href={{url('events')}}><i class="fa fa-hand-o-up "></i>Manage Leave Request</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="ui.html"><i class="fa fa-venus "></i>UI Elements </a>
                </li>
                <li>
                    <a href="table.html"><i class="fa fa-bolt "></i>Data Tables </a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-code "></i>Forms</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#"><i class="fa fa-cogs "></i>Second  Link</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bullhorn "></i>Second Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third  Link</a>
                                </li>
                                <li>
                                    <a href="#">Third Link</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="blank.html"><i class="fa fa-dashcube "></i>Blank Page</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /. SIDEBAR MENU (navbar-side) -->
    <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">{{ config('app.name', 'Laravel') }}</h1>
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<footer >
    &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">{{ config('app.name', 'Laravel') }}</a>
</footer>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->

<script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
@yield('script')
{{--<script src={{asset('js/jquery-1.11.1.js')}}></script>--}}
<!-- BOOTSTRAP SCRIPTS -->
<script src={{asset('js/bootstrap.js')}}></script>

<!-- METISMENU SCRIPTS -->
<script src={{asset('js/jquery.metisMenu.js')}}></script>
<!-- CUSTOM SCRIPTS -->
<script src={{asset('js/custom.js')}}></script>
<script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
<script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>



</body>
</html>
