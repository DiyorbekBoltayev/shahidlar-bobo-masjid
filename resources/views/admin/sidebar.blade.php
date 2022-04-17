<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-envelope"></i>
                        <p>Ehsonlar ro'yhati</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-envelope"></i>
                        <p>Ehson qo'shish</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.posts.index') ? 'active' : '' }} ">
                    <a href="{{route('shownews')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Yangiliklar ro'yhati</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('admin.posts.index') ? 'active' : '' }} ">
                    <a href="{{route('addnews')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Yangilik qo'shish</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-book"></i>
                        <p>Kitoblar ro'yhati</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                    <a href="">
                        <i class="fas fa-book"></i>
                        <p>Kitob qo'shish</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                    <a href="{{url('maqolalar')}}">
                        <i class="fas fa-bookmark"></i>
                        <p>Maqolalar ro'yhati</p>
                    </a>
                </li>

                <li class="nav-item {{  request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                    <a href="{{url('addmaqola')}}">
                        <i class="fas fa-bookmark"></i>
                        <p>Maqola qo'shish</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>


