<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Digicrome') }} — CMS</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('assets/images/fav-icon/icon.webp') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}" type="text/css" media="all">

<!-- jQuery (required by Summernote) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Summernote WYSIWYG Editor (Bootstrap 5) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs5.min.css">

<style>
:root{--sidebar-width:260px;--sidebar-bg:#0f172a;--sidebar-hover:#1e293b;--sidebar-active:#3b82f6;--sidebar-text:#94a3b8;--sidebar-text-active:#f1f5f9;--topbar-height:56px;--content-bg:#f1f5f9;--card-bg:#ffffff;--border-color:#e2e8f0;--text-primary:#1e293b;--text-muted:#64748b;--accent:#3b82f6;--accent-hover:#2563eb;}
*,*::before,*::after{box-sizing:border-box;}
body.cms-body{margin:0;padding:0;background:var(--content-bg);font-family:'Figtree',-apple-system,sans-serif;font-size:14px;color:var(--text-primary);}
/* SIDEBAR */
.cms-sidebar{width:var(--sidebar-width);background:var(--sidebar-bg);position:fixed;top:0;left:0;height:100vh;overflow-y:auto;overflow-x:hidden;z-index:1040;display:flex;flex-direction:column;transition:transform .3s ease;}
.cms-sidebar::-webkit-scrollbar{width:4px;}.cms-sidebar::-webkit-scrollbar-thumb{background:#334155;border-radius:2px;}
.sidebar-brand{padding:14px 20px;display:flex;align-items:center;gap:10px;border-bottom:1px solid #1e293b;min-height:var(--topbar-height);flex-shrink:0;}
.sidebar-brand img{height:28px;width:auto;}.sidebar-brand-text{color:#f1f5f9;font-weight:700;font-size:15px;letter-spacing:-.3px;white-space:nowrap;}.sidebar-brand-text span{color:var(--accent);}
.sidebar-nav{padding:8px 0 24px;flex:1;}
.nav-section{padding:14px 16px 4px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:1.5px;color:#475569;}
.nav-link-item{display:flex;align-items:center;gap:10px;padding:9px 16px;margin:1px 8px;color:var(--sidebar-text);text-decoration:none;font-size:13px;font-weight:500;border-radius:8px;transition:all .15s ease;}
.nav-link-item i{font-size:15px;width:20px;text-align:center;flex-shrink:0;}
.nav-link-item:hover{background:var(--sidebar-hover);color:var(--sidebar-text-active);}.nav-link-item.active{background:var(--accent);color:white;}
.nav-accordion-toggle{display:flex;align-items:center;gap:10px;padding:9px 16px;margin:1px 8px;color:var(--sidebar-text);background:none;border:none;width:calc(100% - 16px);text-align:left;font-size:13px;font-weight:500;border-radius:8px;cursor:pointer;transition:all .15s ease;}
.nav-accordion-toggle i.main-icon{font-size:15px;width:20px;text-align:center;flex-shrink:0;}.nav-accordion-toggle i.chevron{margin-left:auto;font-size:11px;transition:transform .2s;}
.nav-accordion-toggle:hover{background:var(--sidebar-hover);color:var(--sidebar-text-active);}
.nav-accordion-toggle[aria-expanded="true"]{color:var(--sidebar-text-active);}.nav-accordion-toggle[aria-expanded="true"] i.chevron{transform:rotate(180deg);}
.nav-sub-link{display:flex;align-items:center;padding:7px 16px 7px 46px;margin:1px 8px;color:#64748b;text-decoration:none;font-size:12.5px;border-radius:6px;transition:all .15s ease;position:relative;}
.nav-sub-link::before{content:'';width:4px;height:4px;background:#475569;border-radius:50%;flex-shrink:0;position:absolute;left:30px;}
.nav-sub-link:hover{background:var(--sidebar-hover);color:var(--sidebar-text-active);}.nav-sub-link:hover::before,.nav-sub-link.active::before{background:var(--accent);}
.nav-sub-link.active{color:var(--accent);}
/* MAIN */
.cms-main{margin-left:var(--sidebar-width);min-height:100vh;display:flex;flex-direction:column;}
.cms-topbar{height:var(--topbar-height);background:white;border-bottom:1px solid var(--border-color);display:flex;align-items:center;justify-content:space-between;padding:0 24px;position:sticky;top:0;z-index:999;gap:16px;}
.topbar-left{display:flex;align-items:center;gap:12px;}.topbar-right{display:flex;align-items:center;gap:12px;}
.topbar-page-title{font-size:15px;font-weight:600;color:var(--text-primary);}
.topbar-user{display:flex;align-items:center;gap:8px;font-size:13px;color:var(--text-muted);}
.user-avatar{width:32px;height:32px;background:var(--accent);border-radius:50%;display:flex;align-items:center;justify-content:center;color:white;font-size:12px;font-weight:700;}
.topbar-logout{display:flex;align-items:center;gap:6px;padding:6px 12px;border-radius:6px;border:1px solid var(--border-color);background:white;color:var(--text-muted);font-size:13px;cursor:pointer;transition:all .15s;text-decoration:none;}
.topbar-logout:hover{border-color:#ef4444;color:#ef4444;background:#fef2f2;}
.cms-content{padding:24px;flex:1;}
/* CARDS */
.cms-card{background:var(--card-bg);border-radius:12px;border:1px solid var(--border-color);box-shadow:0 1px 3px rgba(0,0,0,.05);overflow:hidden;margin-bottom:24px;}
.cms-card-header{padding:16px 20px;border-bottom:1px solid var(--border-color);display:flex;align-items:center;justify-content:space-between;background:white;}
.cms-card-title{font-size:15px;font-weight:600;color:var(--text-primary);margin:0;display:flex;align-items:center;gap:8px;}.cms-card-title i{color:var(--accent);}
.cms-card-body{padding:20px;}
/* PAGE HEADER */
.page-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:24px;flex-wrap:wrap;gap:12px;}
.page-title{font-size:22px;font-weight:700;color:var(--text-primary);margin:0;}
.page-subtitle{font-size:13px;color:var(--text-muted);margin:2px 0 0;}
/* TABLES */
.cms-table{width:100%;border-collapse:collapse;}
.cms-table thead th{background:#f8fafc;color:var(--text-muted);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.6px;padding:10px 14px;border-bottom:1px solid var(--border-color);white-space:nowrap;}
.cms-table tbody td{padding:12px 14px;border-bottom:1px solid #f1f5f9;color:var(--text-primary);font-size:13.5px;vertical-align:middle;}
.cms-table tbody tr:last-child td{border-bottom:none;}.cms-table tbody tr:hover td{background:#f8fafc;}
.cms-table-img{width:42px;height:42px;object-fit:cover;border-radius:6px;border:1px solid var(--border-color);}
/* BADGES */
.badge-status{display:inline-flex;align-items:center;padding:2px 10px;border-radius:20px;font-size:11px;font-weight:600;}
.badge-published{background:#dcfce7;color:#16a34a;}.badge-draft{background:#fef9c3;color:#b45309;}.badge-archived{background:#f1f5f9;color:#64748b;}
/* BUTTONS */
.btn-cms-primary{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;background:var(--accent);color:white;border:none;border-radius:8px;font-size:13px;font-weight:500;cursor:pointer;text-decoration:none;transition:all .15s;}
.btn-cms-primary:hover{background:var(--accent-hover);color:white;}
.btn-cms-edit{display:inline-flex;align-items:center;gap:4px;padding:5px 10px;background:#eff6ff;color:var(--accent);border:1px solid #bfdbfe;border-radius:6px;font-size:12px;font-weight:500;cursor:pointer;text-decoration:none;transition:all .15s;}
.btn-cms-edit:hover{background:var(--accent);color:white;border-color:var(--accent);}
.btn-cms-delete{display:inline-flex;align-items:center;gap:4px;padding:5px 10px;background:#fff5f5;color:#ef4444;border:1px solid #fecaca;border-radius:6px;font-size:12px;font-weight:500;cursor:pointer;transition:all .15s;}
.btn-cms-delete:hover{background:#ef4444;color:white;border-color:#ef4444;}
.btn-cms-secondary{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;background:#f8fafc;color:var(--text-muted);border:1px solid var(--border-color);border-radius:8px;font-size:13px;font-weight:500;cursor:pointer;text-decoration:none;transition:all .15s;}
.btn-cms-secondary:hover{background:#e2e8f0;color:var(--text-primary);border-color:#cbd5e1;}
.action-group{display:flex;align-items:center;gap:6px;flex-wrap:wrap;}
/* FORMS */
.form-label{font-size:13px;font-weight:500;color:var(--text-primary);margin-bottom:6px;}
.form-control,.form-select{font-size:13.5px;border-radius:8px;border:1px solid var(--border-color);padding:8px 12px;color:var(--text-primary);transition:border-color .15s;}
.form-control:focus,.form-select:focus{border-color:var(--accent);box-shadow:0 0 0 3px rgba(59,130,246,.1);outline:none;}
/* ALERTS */
.cms-alert{display:flex;align-items:center;gap:10px;padding:12px 16px;border-radius:8px;font-size:13.5px;margin-bottom:16px;}
.cms-alert-success{background:#f0fdf4;border:1px solid #bbf7d0;color:#166534;}
.cms-alert-danger{background:#fff5f5;border:1px solid #fecaca;color:#991b1b;}
/* EMPTY STATE */
.empty-state{text-align:center;padding:48px 24px;color:var(--text-muted);}
.empty-state i{font-size:48px;opacity:.3;margin-bottom:12px;display:block;}
.empty-state p{font-size:14px;margin:0;}
/* SUMMERNOTE — restore list styles reset by Tailwind Preflight */
.note-editable ul{list-style-type:disc;padding-left:2rem;margin:.5rem 0;}
.note-editable ol{list-style-type:decimal;padding-left:2rem;margin:.5rem 0;}
.note-editable li{display:list-item;}
.note-editable ul ul{list-style-type:circle;}
.note-editable ul ul ul{list-style-type:square;}
/* RESPONSIVE */
.sidebar-overlay{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.5);z-index:1039;}
.sidebar-toggle{display:none;background:none;border:none;padding:8px;cursor:pointer;color:var(--text-primary);font-size:20px;}
@media(max-width:991px){.cms-sidebar{transform:translateX(-100%)}.cms-sidebar.open{transform:translateX(0)}.cms-main{margin-left:0}.sidebar-toggle{display:flex}.sidebar-overlay.show{display:block}}
@media(max-width:576px){.cms-content{padding:16px}.cms-topbar{padding:0 16px}.page-title{font-size:18px}}
</style>

@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
