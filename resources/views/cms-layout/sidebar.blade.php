<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Efektifpro</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">ePro</a>
        </div>
        <ul class="sidebar-menu">
            {{-- <li class="{{ Request::is('') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-fist-raised"></i><span>Skills</span></a></li> --}}
            <li class="{{ Request::is('experience*') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-briefcase"></i> <span>Experience</span></a></li>
            <li class="{{ Request::is('project*') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-globe-asia"></i> <span>Project</span></a></li>
            <li class="{{ Request::is('visitor*') ? 'active' : '' }}"><a class="nav-link" href=""><i class="fas fa-users"></i> <span>Visitors</span></a></li>
        </ul>
    </aside>
</div>