<div class="d-flex">
    <button class="toggle-btn" type="button">
        <img src="../img/logo.png" alt="" width="30">
    </button>
    <div class="sidebar-logo">
        <a href="#">Dentaire</a>
    </div>
</div>
<ul class="sidebar-nav">
    <li class="sidebar-item">
        <a href="#" class="sidebar-link">
            <i class="lni lni-user"></i>
            <span>Profile</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="#" class="sidebar-link">
            <i class="lni lni-agenda"></i>
            <span>Task</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
            <i class="lni lni-protection"></i>
            <span>Auth</span>
        </a>
        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">Login</a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">Register</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
            data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
            <i class="lni lni-layout"></i>
            <span>Multi Level</span>
        </a>
        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                    data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                    Two Links
                </a>
                <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Link 1</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Link 2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a href="#" class="sidebar-link">
            <i class="lni lni-popup"></i>
            <span>Notification</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="#" class="sidebar-link">
            <i class="lni lni-cog"></i>
            <span>Setting</span>
        </a>
    </li>
</ul>
<div class="sidebar-footer">
    <a href="{{route('logout')}}" class="sidebar-link sidebarlink">
        <i class="lni lni-exit"></i>
        <span>Se Déconnecter</span>
    </a>
</div>
