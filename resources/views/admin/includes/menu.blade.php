<div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
        <p class="app-sidebar__user-name">John Doe</p>
        <p class="app-sidebar__user-designation">Frontend Developer</p>
    </div>
</div>
<ul class="app-menu">
    <li><a class="app-menu__item active" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon far fa-mobile fa-lg"></i><span class="app-menu__label">Mobile Recharge</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('recharge.create') }}"><i class="icon fa fa-circle-o"></i>
                    Recharge</a>
            </li>
        </ul>
    </li>

    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon far fa-mobile fa-lg"></i><span class="app-menu__label">Color Game</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('add-fund.create') }}"><i class="icon fa fa-circle-o"></i>
                    new game</a>
            </li>
        </ul>

        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('add-fund.index') }}"><i class="icon fa fa-circle-o"></i>
                    Dom</a>
            </li>
        </ul>
    </li>


    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="{{ route('my-account') }}"><i class="icon fa fa-circle-o"></i>
                    My Account</a>
            </li>
            <li>
                <a class="treeview-item" href="{{ route('profile-update') }}"><i class="icon fa fa-circle-o"></i>
                    Update Profile</a>
            </li>
        </ul>
    </li>



{{--    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa --}}
{{--    fa-edit"></i><span class="app-menu__label">My Account</span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
{{--        <ul class="treeview-menu">--}}
{{--            <li><a class="treeview-item" href="form-components.html"><i class="icon fa fa-circle-o"></i> Form Components</a></li>--}}
{{--        </ul>--}}
{{--    </li>--}}
</ul>
