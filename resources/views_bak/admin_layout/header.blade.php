<!-- Admin Top Navigation Header -->
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
                <a class="nav-link text-dark px-3" href="{{ route('dashboard') }}"><i class="bi bi-house-door"></i> Home</a>
                <a class="nav-link text-dark px-3" href="{{ route('sucess_stories') }}"><i class="bi bi-trophy"></i> Manage Stories</a>
                <a class="nav-link text-dark px-3" href="{{ route('testimonial') }}"><i class="bi bi-chat-quote"></i> Testimonial</a>
                <a class="nav-link text-dark px-3" href="{{ route('blogs.index') }}"><i class="bi bi-file-earmark-text"></i> Blogs</a>

                <!-- Dropdown for Manage Courses -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark px-3" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-journal-text"></i> Manage Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.manage_courses') }}">All Courses</a></li>
                        <li><a class="dropdown-item" href="{{ route('keypoints.index') }}">Key Points</a></li>
                        <li><a class="dropdown-item" href="{{ route('aparts.index') }}">Manage Apart</a></li>
                        <li><a class="dropdown-item" href="{{ route('modules.create') }}">Modules</a></li>
                        <li><a class="dropdown-item" href="{{ route('extra.index') }}">Extra</a></li>
                        <li><a class="dropdown-item" href="{{ route('casestudy.index') }}">Case Studies</a></li>
                        <li><a class="dropdown-item" href="{{ route('project.index') }}">Projects</a></li>
                        <li><a class="dropdown-item" href="{{ route('keyfeature.index') }}">Key Features</a></li>
                        <li><a class="dropdown-item" href="{{ route('faqs.create') }}">Manage FAQ</a></li>
                    </ul>
                </div>

                <!-- Dropdown for More Pages -->
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark px-3" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-journal-text"></i> More Pages
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('mentor') }}"><i class="bi bi-person-badge me-1"></i> Instructor</a></li>
                        <li><a class="dropdown-item" href="{{ route('placement.index') }}"><i class="bi bi-briefcase me-1"></i> Placement</a></li>
                        <li><a class="dropdown-item" href="{{ route('logos.index') }}"><i class="bi bi-images me-1"></i> Logo</a></li>
                        <li><a class="dropdown-item" href="{{ route('contant.index') }}"><i class="bi bi-file-lock me-1"></i> Privacy Policy</a></li>
                        <li><a class="dropdown-item" href="{{ route('meta') }}"><i class="bi bi-tags me-1"></i> Meta Section</a></li>
                        <li><a class="dropdown-item" href="{{ route('videos.index') }}"><i class="bi bi-camera-video me-1"></i> Videos</a></li>
                        <li><a class="dropdown-item" href="{{ route('media.index') }}"><i class="bi bi-newspaper me-1"></i> Media</a></li>
                        <li><a class="dropdown-item" href="{{ route('leed') }}"><i class="bi bi-graph-up me-1"></i> Leads</a></li>
                        <li><a class="dropdown-item" href="{{ route('jobs') }}"><i class="bi bi-bag-plus me-1"></i> Add Job</a></li>
                        <li><a class="dropdown-item" href="{{ route('show_job') }}"><i class="bi bi-people me-1"></i> Show Jobs</a></li>
                    </ul>
                </div>

                <a class="nav-link text-dark px-3" href="{{ route('meta') }}"><i class="bi bi-gear"></i> Settings</a>
            </nav>
        </div>
    </div>
</header>
