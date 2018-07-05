<div class="sidebar" data-color="purple" data-image="{{ asset('backend/img/sidebar-1.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="{{route('admin.dashboard')}}" class="simple-text">
            TECHNICAL ADMIN
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/tutor*') ? 'active' : '' }}">
                <a href="{{ route('tutor.index') }}">
                    <i class="material-icons">person_pin</i>
                    <p>Tutors</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/student*') ? 'active' : '' }}">
                <a href="{{ route('student.index') }}">
                <i class="material-icons">assignment_ind</i>
                    <p>Students</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/pathway*') ? 'active': '' }}">
                <a href="{{ route('pathway.index') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Pathways</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/projects*') ? 'active': '' }}">
                <a href="{{ route('projects.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Projects</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/techadmin*') ? 'active': '' }}">
                <a href="{{ route('techadmin.index') }}">
                <i class="material-icons">account_circle</i>
                    <p>Technical Administrator</p>
                </a>
            </li>
        </ul>
    </div>
</div>