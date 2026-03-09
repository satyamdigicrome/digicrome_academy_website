<!DOCTYPE html>
<html lang="en">
@include('admin_layout.head')

<body class="cms-body">
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

{{-- Sidebar --}}
@include('admin_layout.sidebar')

{{-- Main content --}}
<div class="cms-main" id="cmsMain">

    {{-- Topbar --}}
    <div class="cms-topbar">
        <div class="topbar-left">
            <button class="sidebar-toggle" onclick="openSidebar()">
                <i class="bi bi-list"></i>
            </button>
            <span class="topbar-page-title">@yield('page-title', 'Dashboard')</span>
        </div>
        <div class="topbar-right">
            <div class="topbar-user">
                <div class="user-avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="topbar-logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="d-none d-sm-inline">Logout</span>
                </button>
            </form>
        </div>
    </div>

    {{-- Content --}}
    <div class="cms-content">
        @if(session('success'))
            <div class="cms-alert cms-alert-success">
                <i class="bi bi-check-circle-fill"></i>
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="cms-alert cms-alert-danger">
                <i class="bi bi-exclamation-circle-fill"></i>
                {{ session('error') }}
            </div>
        @endif
        @if($errors->any())
            <div class="cms-alert cms-alert-danger">
                <i class="bi bi-exclamation-circle-fill"></i>
                <div>
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            </div>
        @endif

        @yield('content')
    </div>
</div>

@include('admin_layout.footer')
</body>
</html>
