@extends('admin_layout.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

<style>
/* ── Stats Cards ── */
.stat-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(200px,1fr)); gap:16px; margin-bottom:28px; }
.stat-card { background:#fff; border-radius:14px; border:1px solid #e2e8f0; padding:20px; display:flex; align-items:center; gap:16px; box-shadow:0 1px 4px rgba(0,0,0,.04); transition:transform .15s,box-shadow .15s; text-decoration:none; color:inherit; }
.stat-card:hover { transform:translateY(-2px); box-shadow:0 6px 20px rgba(0,0,0,.08); color:inherit; }
.stat-icon { width:52px; height:52px; border-radius:12px; display:flex; align-items:center; justify-content:center; font-size:22px; flex-shrink:0; }
.stat-icon.blue   { background:#eff6ff; color:#3b82f6; }
.stat-icon.green  { background:#f0fdf4; color:#22c55e; }
.stat-icon.orange { background:#fff7ed; color:#f97316; }
.stat-icon.purple { background:#faf5ff; color:#a855f7; }
.stat-icon.teal   { background:#f0fdfa; color:#14b8a6; }
.stat-icon.red    { background:#fff1f2; color:#f43f5e; }
.stat-value { font-size:26px; font-weight:700; line-height:1; color:#1e293b; }
.stat-label { font-size:12px; color:#64748b; margin-top:3px; font-weight:500; }

/* ── Quick Actions ── */
.qa-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(170px,1fr)); gap:12px; }
.qa-btn { display:flex; flex-direction:column; align-items:center; justify-content:center; gap:8px; padding:18px 12px; background:#fff; border:1px solid #e2e8f0; border-radius:12px; text-decoration:none; color:#1e293b; font-size:12.5px; font-weight:500; transition:all .15s; text-align:center; }
.qa-btn i { font-size:20px; color:#3b82f6; }
.qa-btn:hover { background:#eff6ff; border-color:#bfdbfe; color:#1e40af; }
.qa-btn:hover i { color:#1d4ed8; }

/* ── Tables ── */
.mini-table { width:100%; border-collapse:collapse; font-size:13px; }
.mini-table th { padding:8px 12px; background:#f8fafc; color:#64748b; font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:.5px; border-bottom:1px solid #e2e8f0; }
.mini-table td { padding:10px 12px; border-bottom:1px solid #f1f5f9; color:#1e293b; vertical-align:middle; }
.mini-table tr:last-child td { border-bottom:none; }
.mini-table tr:hover td { background:#f8fafc; }
.badge-pub  { background:#dcfce7; color:#16a34a; padding:2px 8px; border-radius:20px; font-size:11px; font-weight:600; }
.badge-dft  { background:#fef9c3; color:#b45309; padding:2px 8px; border-radius:20px; font-size:11px; font-weight:600; }
.badge-none { background:#f1f5f9; color:#64748b; padding:2px 8px; border-radius:20px; font-size:11px; font-weight:600; }

/* ── Welcome Banner ── */
.welcome-banner { background:linear-gradient(135deg,#1e293b 0%,#1d4ed8 100%); border-radius:14px; padding:28px 32px; margin-bottom:28px; display:flex; align-items:center; justify-content:space-between; gap:20px; flex-wrap:wrap; }
.welcome-text h2 { color:#f1f5f9; font-size:22px; font-weight:700; margin:0 0 4px; }
.welcome-text p  { color:#94a3b8; margin:0; font-size:13.5px; }
.welcome-icon { font-size:56px; opacity:.15; color:#fff; flex-shrink:0; }
.welcome-quick { display:flex; gap:10px; flex-wrap:wrap; }
.welcome-quick a { padding:8px 16px; border-radius:8px; font-size:13px; font-weight:500; text-decoration:none; transition:all .15s; }
.wq-primary { background:#3b82f6; color:#fff; }
.wq-primary:hover { background:#2563eb; color:#fff; }
.wq-outline { background:rgba(255,255,255,.1); color:#f1f5f9; border:1px solid rgba(255,255,255,.2); }
.wq-outline:hover { background:rgba(255,255,255,.2); color:#fff; }
</style>

{{-- Welcome Banner --}}
<div class="welcome-banner">
    <div>
        <div class="welcome-text">
            <h2>Welcome back, {{ Auth::user()->name }}! 👋</h2>
            <p>Here's a snapshot of your CMS — everything is running smoothly.</p>
        </div>
        <div class="welcome-quick mt-3">
            <a href="{{ route('admin.manage_courses') }}" class="wq-primary"><i class="bi bi-plus-lg me-1"></i> Add Course</a>
            <a href="{{ route('blogs.create') }}" class="wq-outline"><i class="bi bi-pencil me-1"></i> Write Blog</a>
            <a href="{{ route('leed') }}" class="wq-outline"><i class="bi bi-graph-up me-1"></i> View Leads</a>
        </div>
    </div>
    <i class="bi bi-speedometer2 welcome-icon"></i>
</div>

{{-- Stats --}}
<div class="stat-grid">
    <a href="{{ route('admin.manage_courses') }}" class="stat-card">
        <div class="stat-icon blue"><i class="bi bi-journal-bookmark-fill"></i></div>
        <div>
            <div class="stat-value">{{ $stats['courses'] }}</div>
            <div class="stat-label">Total Courses</div>
        </div>
    </a>
    <a href="{{ route('blogs.index') }}" class="stat-card">
        <div class="stat-icon green"><i class="bi bi-file-earmark-text-fill"></i></div>
        <div>
            <div class="stat-value">{{ $stats['blogs'] }}</div>
            <div class="stat-label">Blog Posts</div>
        </div>
    </a>
    <a href="{{ route('leed') }}" class="stat-card">
        <div class="stat-icon orange"><i class="bi bi-graph-up-arrow"></i></div>
        <div>
            <div class="stat-value">{{ $stats['leads'] }}</div>
            <div class="stat-label">Leads Collected</div>
        </div>
    </a>
    <a href="{{ route('testimonial') }}" class="stat-card">
        <div class="stat-icon purple"><i class="bi bi-chat-quote-fill"></i></div>
        <div>
            <div class="stat-value">{{ $stats['testimonials'] }}</div>
            <div class="stat-label">Testimonials</div>
        </div>
    </a>
    <a href="{{ route('mentor') }}" class="stat-card">
        <div class="stat-icon teal"><i class="bi bi-person-badge-fill"></i></div>
        <div>
            <div class="stat-value">{{ $stats['mentors'] }}</div>
            <div class="stat-label">Instructors</div>
        </div>
    </a>
    <a href="{{ route('jobs') }}" class="stat-card">
        <div class="stat-icon red"><i class="bi bi-bag-fill"></i></div>
        <div>
            <div class="stat-value">{{ $stats['jobs'] }}</div>
            <div class="stat-label">Job Postings</div>
        </div>
    </a>
</div>

{{-- Two Columns: Quick Actions + Recent --}}
<div class="row g-4">

    {{-- Quick Actions --}}
    <div class="col-lg-5">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-lightning-charge-fill"></i> Quick Actions</h5>
            </div>
            <div class="cms-card-body">
                <div class="qa-grid">
                    <a href="{{ route('admin.manage_courses') }}" class="qa-btn"><i class="bi bi-journal-bookmark"></i>Courses</a>
                    <a href="{{ route('blogs.index') }}" class="qa-btn"><i class="bi bi-file-earmark-text"></i>Blogs</a>
                    <a href="{{ route('sucess_stories') }}" class="qa-btn"><i class="bi bi-trophy"></i>Stories</a>
                    <a href="{{ route('testimonial') }}" class="qa-btn"><i class="bi bi-chat-quote"></i>Testimonials</a>
                    <a href="{{ route('mentor') }}" class="qa-btn"><i class="bi bi-person-badge"></i>Instructors</a>
                    <a href="{{ route('videos.index') }}" class="qa-btn"><i class="bi bi-camera-video"></i>Videos</a>
                    <a href="{{ route('logos.index') }}" class="qa-btn"><i class="bi bi-images"></i>Logos</a>
                    <a href="{{ route('placement.index') }}" class="qa-btn"><i class="bi bi-briefcase"></i>Placements</a>
                    <a href="{{ route('jobs') }}" class="qa-btn"><i class="bi bi-bag-plus"></i>Jobs</a>
                    <a href="{{ route('show_job') }}" class="qa-btn"><i class="bi bi-people"></i>Applications</a>
                    <a href="{{ route('media.index') }}" class="qa-btn"><i class="bi bi-newspaper"></i>Media</a>
                    <a href="{{ route('leed') }}" class="qa-btn"><i class="bi bi-graph-up"></i>Leads</a>
                    <a href="{{ route('meta') }}" class="qa-btn"><i class="bi bi-tags"></i>Meta Tags</a>
                    <a href="{{ route('contant.index') }}" class="qa-btn"><i class="bi bi-file-lock"></i>Privacy/Terms</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Activity Column --}}
    <div class="col-lg-7">

        {{-- Recent Leads --}}
        <div class="cms-card mb-4">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-graph-up-arrow"></i> Recent Leads</h5>
                <a href="{{ route('leed') }}" class="btn-cms-secondary" style="padding:5px 12px;font-size:12px;">View All</a>
            </div>
            <div class="cms-card-body" style="padding:0;">
                @if($recentLeads->isEmpty())
                    <div class="empty-state"><i class="bi bi-inbox"></i><p>No leads yet</p></div>
                @else
                <table class="mini-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentLeads as $lead)
                        <tr>
                            <td><strong>{{ $lead->name ?? '—' }}</strong></td>
                            <td style="color:#64748b;">{{ $lead->email ?? '—' }}</td>
                            <td>{{ $lead->phone ?? '—' }}</td>
                            <td style="color:#94a3b8;font-size:12px;">{{ $lead->created_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>

        {{-- Recent Blogs --}}
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-file-earmark-text"></i> Recent Blogs</h5>
                <a href="{{ route('blogs.index') }}" class="btn-cms-secondary" style="padding:5px 12px;font-size:12px;">View All</a>
            </div>
            <div class="cms-card-body" style="padding:0;">
                @if($recentBlogs->isEmpty())
                    <div class="empty-state"><i class="bi bi-file-earmark-x"></i><p>No blogs yet</p></div>
                @else
                <table class="mini-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentBlogs as $blog)
                        <tr>
                            <td><strong>{{ Str::limit($blog->heading, 40) }}</strong></td>
                            <td>
                                @if($blog->status === 'published')
                                    <span class="badge-pub">Published</span>
                                @elseif($blog->status === 'draft')
                                    <span class="badge-dft">Draft</span>
                                @else
                                    <span class="badge-none">{{ ucfirst($blog->status) }}</span>
                                @endif
                            </td>
                            <td style="color:#94a3b8;font-size:12px;">{{ $blog->created_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>

    </div>
</div>

@endsection
