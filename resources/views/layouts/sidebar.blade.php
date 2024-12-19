<div class="card">
    <div class="card-header">Menu</div>
    <div class="card-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('risks.create') }}">Add New Risk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('impact') }}">Impact Table</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('likelihood') }}">Likelihood Table</a>
            </li>
            @if(auth()->user()->isAdmin())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">User Management</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" 
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>

