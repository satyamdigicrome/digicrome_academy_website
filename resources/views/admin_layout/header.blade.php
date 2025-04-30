<!-- resources/views/layouts/header.blade.php -->
<header class="border-bottom shadow-sm bg-white">
    <div class="container py-2">
        <!-- Top Row -->
        <div class="d-flex justify-content-between align-items-center">
            <!-- Left: User Name -->
            <div class="text-muted font-weight-semibold">
                <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
            </div>

            <!-- Center: Small Logo -->
            <div class="text-center">
                <img src="{{ asset('assets/images/logo.webp') }}" alt="Logo" style="height: 30px;">
            </div>

            <!-- Right: Logout -->
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn-outline-dark border-0 bg-transparent">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bottom Row: Navigation -->
    <div class="bg-white border-top">
        <div class="container">
            <nav class="nav justify-content-center py-2">
                <a class="nav-link text-dark px-3" href="#"><i class="bi bi-house-door"></i> Home</a>
                <a class="nav-link text-dark px-3" href="#"><i class="bi bi-people"></i> Manage Users</a>

                <!-- Dropdown for Manage Courses -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark px-3" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-journal-text"></i> Manage Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.manage_courses') }}">All Courses</a></li>
                        <li><a class="dropdown-item" href="{{ route('keypoints.index') }}">Key Points Manage</a></li>
                        <li><a class="dropdown-item" href="{{ route('aparts.index') }}">Manage Aparts</a></li>
                        <li><a class="dropdown-item" href="{{ route('faqs.create') }}">Manage FAQ</a></li>


                    </ul>
                </div>

                <a class="nav-link text-dark px-3" href="#"><i class="bi bi-gear"></i> Settings</a>
            </nav>
        </div>
    </div>
</header>

<!-- Include Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
