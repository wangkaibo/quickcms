<!-- HEADER -->
<header id="header">
    <div id="logo-group">
        <span id="logo" style="height:25px;"> <img id="logo-img" style="height:100%;" src="{{ asset('loopeer/quickcms/img/logo.png') }}" alt="SmartAdmin"> </span>
    </div>



    <div class="pull-right">
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
                    <img src="{{ isset(Auth::admin()->get()->avatar) && Auth::admin()->get()->avatar != '' ? Auth::admin()->get()->avatar : asset('loopeer/quickcms/img/avatars/sunny.png') }}" alt="John Doe" class="online" style="height: 30px" />
                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i>&nbsp;全屏</a>
                    </li>
                    <li class="divider"></li>
		    <li>
			<a href="/admin/users/update" class="padding-10 padding-top-0 padding-bottom-0" data-action="userProfile"><i class="fa fa-child"></i>&nbsp;个人</a>
		    </li>
                    <li class="divider"></li>
                    <li>
			<a href="{{route('admin.logout')}}" class="padding-10 padding-top-0 padding-bottom-0" data-action="userLogout"><i class="fa fa-sign-out"></i>&nbsp;登出</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="{{route('admin.logout')}}" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>




    </div>
<div class="pull-right" style="padding-top:15px">
	<span>欢迎你，{{ Auth::admin()->get()->name }}</span>
</div>
</header>
