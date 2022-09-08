<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('comments.index') }}" class="nav-link {{ Request::is('comments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Comments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('courses.index') }}" class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Courses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('courseUsers.index') }}" class="nav-link {{ Request::is('courseUsers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Course Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('items.index') }}" class="nav-link {{ Request::is('items*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Items</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Payments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('views.index') }}" class="nav-link {{ Request::is('views*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Views</p>
    </a>
</li>
