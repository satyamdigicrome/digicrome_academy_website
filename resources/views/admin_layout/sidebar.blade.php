<div class="cms-sidebar" id="cmsSidebar">
    <!-- Brand -->
    <div class="sidebar-brand">
        <img src="{{ asset('assets/images/logo.webp') }}" alt="Logo">
        <span class="sidebar-brand-text">Digi<span>Crome</span> CMS</span>
    </div>

    <nav class="sidebar-nav">
        @php $user = auth()->user(); @endphp

        <!-- Dashboard — always visible -->
        <div class="nav-section">Main</div>
        <a href="{{ route('dashboard') }}" class="nav-link-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <!-- ── Content ─────────────────────────────────────── -->
        @if (
            $user->hasModulePermission('blogs') ||
                $user->hasModulePermission('success-stories') ||
                $user->hasModulePermission('testimonials') ||
                $user->hasModulePermission('videos') ||
                $user->hasModulePermission('media-presence') ||
                $user->hasModulePermission('instructors'))
            <div class="nav-section">Content</div>

            @if ($user->hasModulePermission('blogs'))
                <a href="{{ route('blogs.index') }}"
                    class="nav-link-item {{ request()->routeIs('blogs.*') ? 'active' : '' }}">
                    <i class="bi bi-file-earmark-text"></i> Blogs
                </a>
            @endif

            @if ($user->hasModulePermission('success-stories'))
                <a href="{{ route('sucess_stories') }}"
                    class="nav-link-item {{ request()->routeIs('sucess_stories') ? 'active' : '' }}">
                    <i class="bi bi-trophy"></i> Success Stories
                </a>
            @endif

            @if ($user->hasModulePermission('linkedin-student-reviews'))
                <a href="{{ route('linkedin.student.reviews.index') }}"
                    class="nav-link-item {{ request()->routeIs('linkedin.student.reviews.*') ? 'active' : '' }}">
                    <i class="bi bi-trophy"></i> LinkedIn Student Reviews
                </a>
            @endif

            @if ($user->hasModulePermission('testimonials'))
                <a href="{{ route('testimonial') }}"
                    class="nav-link-item {{ request()->routeIs('testimonial') ? 'active' : '' }}">
                    <i class="bi bi-chat-quote"></i> Testimonials
                </a>
            @endif

            @if ($user->hasModulePermission('videos'))
                <a href="{{ route('videos.index') }}"
                    class="nav-link-item {{ request()->routeIs('videos.*') ? 'active' : '' }}">
                    <i class="bi bi-camera-video"></i> Videos
                </a>
            @endif

            @if ($user->hasModulePermission('media-presence'))
                <a href="{{ route('media.index') }}"
                    class="nav-link-item {{ request()->routeIs('media.*') ? 'active' : '' }}">
                    <i class="bi bi-newspaper"></i> Media Presence
                </a>
            @endif

            @if ($user->hasModulePermission('instructors'))
                <a href="{{ route('mentor') }}"
                    class="nav-link-item {{ request()->routeIs('mentor') ? 'active' : '' }}">
                    <i class="bi bi-person-badge"></i> Instructors
                </a>
            @endif
        @endif
        {{-- /Content --}}

        <!-- ── Courses ──────────────────────────────────────── -->
        @if ($user->hasModulePermission('courses') || $user->hasModulePermission('course-details'))
            <div class="nav-section">Courses</div>

            @if ($user->hasModulePermission('courses'))
                <a href="{{ route('admin.manage_courses') }}"
                    class="nav-link-item {{ request()->routeIs('admin.manage_courses') ? 'active' : '' }}">
                    <i class="bi bi-journal-bookmark"></i> All Courses
                </a>
            @endif

            @if ($user->hasModulePermission('course-details'))
                <div class="nav-accordion">
                    <button class="nav-accordion-toggle" data-bs-toggle="collapse" data-bs-target="#courseExtras"
                        aria-expanded="{{ request()->routeIs('keypoints.*') || request()->routeIs('aparts.*') || request()->routeIs('modules.*') || request()->routeIs('faqs.*') || request()->routeIs('casestudy.*') || request()->routeIs('project.*') || request()->routeIs('keyfeature.*') || request()->routeIs('extra.*') ? 'true' : 'false' }}">
                        <i class="bi bi-grid-3x3-gap main-icon"></i>
                        Course Details
                        <i class="bi bi-chevron-down chevron"></i>
                    </button>
                    <div class="collapse {{ request()->routeIs('keypoints.*') || request()->routeIs('aparts.*') || request()->routeIs('modules.*') || request()->routeIs('faqs.*') || request()->routeIs('casestudy.*') || request()->routeIs('project.*') || request()->routeIs('keyfeature.*') || request()->routeIs('extra.*') ? 'show' : '' }}"
                        id="courseExtras">
                        <div class="nav-sub-links">
                            <a href="{{ route('keypoints.index') }}"
                                class="nav-sub-link {{ request()->routeIs('keypoints.*') ? 'active' : '' }}">Key
                                Points</a>
                            <a href="{{ route('aparts.index') }}"
                                class="nav-sub-link {{ request()->routeIs('aparts.*') ? 'active' : '' }}">Manage
                                Apart</a>
                            <a href="{{ route('modules.create') }}"
                                class="nav-sub-link {{ request()->routeIs('modules.*') ? 'active' : '' }}">Modules</a>
                            <a href="{{ route('faqs.create') }}"
                                class="nav-sub-link {{ request()->routeIs('faqs.*') ? 'active' : '' }}">FAQs</a>
                            <a href="{{ route('casestudy.index') }}"
                                class="nav-sub-link {{ request()->routeIs('casestudy.*') ? 'active' : '' }}">Case
                                Studies</a>
                            <a href="{{ route('project.index') }}"
                                class="nav-sub-link {{ request()->routeIs('project.*') ? 'active' : '' }}">Projects</a>
                            <a href="{{ route('keyfeature.index') }}"
                                class="nav-sub-link {{ request()->routeIs('keyfeature.*') ? 'active' : '' }}">Key
                                Features</a>
                            <a href="{{ route('extra.index') }}"
                                class="nav-sub-link {{ request()->routeIs('extra.*') ? 'active' : '' }}">Extra</a>
                        </div>
                    </div>
                </div>
            @endif
        @endif
        {{-- /Courses --}}

        <!-- ── Marketing ─────────────────────────────────────── -->
        @if ($user->hasModulePermission('logos') || $user->hasModulePermission('placements'))
            <div class="nav-section">Marketing</div>

            @if ($user->hasModulePermission('logos'))
                <a href="{{ route('logos.index') }}"
                    class="nav-link-item {{ request()->routeIs('logos.*') ? 'active' : '' }}">
                    <i class="bi bi-images"></i> Logos & Partners
                </a>
            @endif

            @if ($user->hasModulePermission('placements'))
                <a href="{{ route('placement.index') }}"
                    class="nav-link-item {{ request()->routeIs('placement.*') ? 'active' : '' }}">
                    <i class="bi bi-briefcase"></i> Placements
                </a>
            @endif
        @endif
        {{-- /Marketing --}}

        <!-- ── Careers ────────────────────────────────────────── -->
        @if ($user->hasModulePermission('jobs') || $user->hasModulePermission('applications'))
            <div class="nav-section">Careers</div>

            @if ($user->hasModulePermission('jobs'))
                <a href="{{ route('jobs') }}" class="nav-link-item {{ request()->routeIs('jobs') ? 'active' : '' }}">
                    <i class="bi bi-bag-plus"></i> Job Postings
                </a>
            @endif

            @if ($user->hasModulePermission('applications'))
                <a href="{{ route('show_job') }}"
                    class="nav-link-item {{ request()->routeIs('show_job') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Applications
                </a>
            @endif
        @endif
        {{-- /Careers --}}

        <!-- ── Settings ───────────────────────────────────────── -->
        @if ($user->hasModulePermission('meta-tags') || $user->hasModulePermission('content'))
            <div class="nav-section">Settings</div>

            @if ($user->hasModulePermission('meta-tags'))
                <a href="{{ route('meta') }}" class="nav-link-item {{ request()->routeIs('meta') ? 'active' : '' }}">
                    <i class="bi bi-tags"></i> Meta Tags
                </a>
            @endif

            @if ($user->hasModulePermission('content'))
                <a href="{{ route('contant.index') }}"
                    class="nav-link-item {{ request()->routeIs('contant.*') ? 'active' : '' }}">
                    <i class="bi bi-file-lock"></i> Privacy / Terms
                </a>
            @endif
        @endif
        {{-- /Settings --}}

        <!-- ── Reports ────────────────────────────────────────── -->
        @if ($user->hasModulePermission('leads'))
            <div class="nav-section">Reports</div>
            <a href="{{ route('leed') }}" class="nav-link-item {{ request()->routeIs('leed') ? 'active' : '' }}">
                <i class="bi bi-graph-up"></i> Leads
            </a>
        @endif
        {{-- /Reports --}}

        <!-- ── Access Control — Super Admins only ─────────────── -->
        @if ($user->isSuperAdmin())
            <div class="nav-section">Access Control</div>
            <a href="{{ route('admin.users.index') }}"
                class="nav-link-item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <i class="bi bi-people-fill"></i> Users
            </a>
            <a href="{{ route('admin.roles.index') }}"
                class="nav-link-item {{ request()->routeIs('admin.roles.*') ? 'active' : '' }}">
                <i class="bi bi-shield-fill"></i> Roles & Permissions
            </a>
        @endif
        {{-- /Access Control --}}

    </nav>
</div>

<!-- Mobile overlay -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>
