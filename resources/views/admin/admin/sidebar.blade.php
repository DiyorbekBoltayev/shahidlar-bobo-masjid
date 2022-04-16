<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Пользователь</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.posts.index') ? 'active' : '' }} ">
                    <a href="{{route('admin.posts.index')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Новости</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                    <a href="{{route('admin.messages.index')}}">
                        <i class="fas fa-envelope"></i>
                        <p>Сообщении</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.office.index') ? 'active' : '' }}">
                    <a href="{{route('admin.office.index')}}">
                        <i class="fas fa-building"></i>
                        <p>Офисы</p>
                    </a>
                </li>
                {{--<li class="nav-item {{  request()->routeIs('admin.solution.index') ? 'active' : '' }}">
                    <a href="{{route('admin.solution.index')}}">
                        <i class="fas fa-cog"></i>
                        <p>Решения</p>
                    </a>
                </li>--}}
                <li class="nav-item {{  request()->routeIs('admin.product.index') ? 'active' : '' }}">
                    <a href="{{route('admin.product.index')}}">
                        <i class="fas fa-project-diagram"></i>
                        <p>Продукты</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.category.index') ? 'active' : '' }}">
                    <a href="{{route('admin.category.index')}}">
                        <i class="fas fa-folder-open"></i>
                        <p>Категория</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


