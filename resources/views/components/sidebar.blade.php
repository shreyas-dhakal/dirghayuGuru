<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button class="toggle-btn" type="button">
                <x-application-logo />
            </button>
            <div class="sidebar-logo">
                <a href="{{route('dashboard')}}">Dashboard</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="{{ route('department.index') }}" class="sidebar-link">
                    <i class="fa-solid fa-table-columns"></i>
                    <span>Departments</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('doctor.index') }}" class="sidebar-link">
                    <i class="fa-solid fa-user-doctor"></i>
                    <span>Doctors</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('package.index') }}" class="sidebar-link">
                    <i class="fa-solid fa-rectangle-list"></i>
                    <span>Packages</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('slider.index') }}" class="sidebar-link">
                    <i class="fa-solid fa-sliders"></i>
                    <span>Sliders Info</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('testimonial.index') }}" class="sidebar-link">
                    <i class="fa-solid fa-users-gear"></i>
                    <span>Testimonials</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('sitesetting.index') }}" class="sidebar-link">
                    <i class="fa-solid fa-gear"></i>
                    <span>Site Settings</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('appointment.index') }}" class="sidebar-link">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span>Appointments</span>
                </a>
            </li>
            <li><a href="{{ route('user.index') }}" class="sidebar-link">
                <i class="fa-solid fa-user"></i>
                <span>Users</span>
            </a></li>
        </ul>
    </aside>
    <div class="main p-3">
        <div class="text-center">
            <h1>
            </h1>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="script.js"></script>