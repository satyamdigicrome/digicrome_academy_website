@extends('admin_layout.app')
@section('title', 'Roles & Permissions')

@section('content')
<style>
  .roles-page .page-header { display:flex; align-items:center; justify-content:space-between; margin-bottom:28px; flex-wrap:wrap; gap:12px; }
  .roles-page .page-title  { font-size:1.5rem; font-weight:700; color:#1a237e; margin:0; }
  .roles-page .btn-add     { background:linear-gradient(135deg,#1a237e,#283593); color:#fff; border:none; padding:10px 22px; border-radius:8px; font-weight:600; font-size:.9rem; text-decoration:none; display:inline-flex; align-items:center; gap:7px; transition:opacity .2s; }
  .roles-page .btn-add:hover { opacity:.88; color:#fff; }

  .roles-page .roles-grid  { display:grid; grid-template-columns:repeat(auto-fill,minmax(340px,1fr)); gap:20px; }
  .roles-page .role-card   { background:#fff; border-radius:12px; border:1px solid #e3e8f0; box-shadow:0 2px 12px rgba(26,35,126,.06); overflow:hidden; transition:transform .2s,box-shadow .2s; }
  .roles-page .role-card:hover { transform:translateY(-3px); box-shadow:0 8px 24px rgba(26,35,126,.12); }
  .roles-page .role-card-top { padding:20px 22px 16px; border-bottom:1px solid #f0f0f0; }
  .roles-page .role-icon   { width:42px; height:42px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.2rem; margin-bottom:12px; }
  .roles-page .role-name   { font-size:1.05rem; font-weight:700; color:#1a237e; margin:0 0 4px; }
  .roles-page .role-desc   { font-size:.8rem; color:#888; margin:0; }
  .roles-page .super-badge { display:inline-block; background:#fff3e0; color:#e65100; font-size:.72rem; font-weight:700; padding:3px 10px; border-radius:20px; margin-top:8px; }
  .roles-page .role-card-mid { padding:14px 22px; background:#fafbff; border-bottom:1px solid #f0f0f0; }
  .roles-page .perm-chips  { display:flex; flex-wrap:wrap; gap:6px; }
  .roles-page .perm-chip   { background:#e8eaf6; color:#1a237e; font-size:.72rem; font-weight:600; padding:3px 10px; border-radius:20px; }
  .roles-page .all-access  { background:#e8f5e9; color:#1b5e20; font-size:.72rem; font-weight:600; padding:4px 14px; border-radius:20px; }
  .roles-page .no-perm     { color:#aaa; font-size:.8rem; font-style:italic; }
  .roles-page .role-card-bot { padding:14px 22px; display:flex; align-items:center; justify-content:space-between; }
  .roles-page .user-count  { font-size:.8rem; color:#777; }
  .roles-page .action-btn  { border:none; border-radius:6px; padding:6px 16px; font-size:.78rem; font-weight:600; cursor:pointer; text-decoration:none; display:inline-block; transition:all .15s; }
  .roles-page .btn-edit    { background:#e8eaf6; color:#1a237e; }
  .roles-page .btn-edit:hover { background:#1a237e; color:#fff; }
  .roles-page .btn-delete  { background:#fce8e8; color:#c62828; margin-left:6px; }
  .roles-page .btn-delete:hover { background:#c62828; color:#fff; }
  .roles-page .empty-state { text-align:center; padding:60px 20px; color:#aaa; }
  .roles-page .empty-state i { font-size:3rem; display:block; margin-bottom:12px; }
</style>

<div class="roles-page">
  <div class="page-header">
    <h1 class="page-title"><i class="bi bi-shield-fill me-2" style="color:#f29c12"></i>Roles & Permissions</h1>
    <a href="{{ route('admin.roles.create') }}" class="btn-add">
      <i class="bi bi-plus-circle-fill"></i> Create New Role
    </a>
  </div>

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-4">
      <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif
  @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show mb-4">
      <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  @if($roles->isEmpty())
    <div class="empty-state">
      <i class="bi bi-shield-exclamation"></i>
      No roles yet. <a href="{{ route('admin.roles.create') }}">Create the first role</a>.
    </div>
  @else
  <div class="roles-grid">
    @foreach($roles as $role)
    <div class="role-card">
      <div class="role-card-top">
        <div class="role-icon" style="background:{{ $role->is_super_admin ? '#fff3e0' : '#e8eaf6' }}">
          @if($role->is_super_admin) ⭐ @else 🛡️ @endif
        </div>
        <p class="role-name">{{ $role->name }}</p>
        <p class="role-desc">{{ $role->description ?: 'No description provided.' }}</p>
        @if($role->is_super_admin)
          <span class="super-badge">⭐ Super Admin — Full Access</span>
        @endif
      </div>

      <div class="role-card-mid">
        <div style="font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.4px;color:#888;margin-bottom:8px;">Module Access</div>
        @if($role->is_super_admin)
          <span class="all-access">✅ All Modules</span>
        @elseif($role->permissions->isEmpty())
          <span class="no-perm">No modules assigned</span>
        @else
          <div class="perm-chips">
            @foreach($role->permissions as $perm)
              <span class="perm-chip">{{ $perm->module_name }}</span>
            @endforeach
          </div>
        @endif
      </div>

      <div class="role-card-bot">
        <span class="user-count"><i class="bi bi-people-fill me-1"></i>{{ $role->users_count }} user{{ $role->users_count !== 1 ? 's' : '' }}</span>
        <div>
          <a href="{{ route('admin.roles.edit', $role->id) }}" class="action-btn btn-edit">
            <i class="bi bi-pencil-fill"></i> Edit
          </a>
          <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button type="submit" class="action-btn btn-delete"
              onclick="return confirm('Delete role \'{{ addslashes($role->name) }}\'? This cannot be undone.')">
              <i class="bi bi-trash-fill"></i> Delete
            </button>
          </form>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @endif
</div>
@endsection
