@extends('admin_layout.app')
@section('title', 'Manage Users')

@section('content')
<style>
  .users-page .page-header { display:flex; align-items:center; justify-content:space-between; margin-bottom:28px; flex-wrap:wrap; gap:12px; }
  .users-page .page-title  { font-size:1.5rem; font-weight:700; color:#1a237e; margin:0; }
  .users-page .btn-add     { background:linear-gradient(135deg,#1a237e,#283593); color:#fff; border:none; padding:10px 22px; border-radius:8px; font-weight:600; font-size:0.9rem; text-decoration:none; display:inline-flex; align-items:center; gap:7px; transition:opacity .2s; }
  .users-page .btn-add:hover { opacity:.88; color:#fff; }

  .users-page .stats-bar   { display:flex; gap:16px; margin-bottom:24px; flex-wrap:wrap; }
  .users-page .stat-card   { background:#fff; border-radius:10px; padding:16px 22px; border:1px solid #e3e8f0; flex:1; min-width:150px; }
  .users-page .stat-card .num { font-size:1.8rem; font-weight:700; color:#1a237e; line-height:1; }
  .users-page .stat-card .lbl { font-size:0.78rem; color:#777; margin-top:4px; }

  .users-page .card-wrap   { background:#fff; border-radius:12px; border:1px solid #e3e8f0; overflow:hidden; box-shadow:0 2px 12px rgba(26,35,126,.06); }
  .users-page .card-wrap table { margin:0; }
  .users-page table thead  { background:#f4f7fc; }
  .users-page table th     { font-size:.78rem; font-weight:700; text-transform:uppercase; letter-spacing:.4px; color:#555; padding:13px 16px; border:none; white-space:nowrap; }
  .users-page table td     { padding:13px 16px; vertical-align:middle; border-color:#f0f0f0; font-size:.88rem; }
  .users-page .avatar      { width:36px; height:36px; border-radius:50%; background:linear-gradient(135deg,#1a237e,#f29c12); display:inline-flex; align-items:center; justify-content:center; color:#fff; font-weight:700; font-size:.85rem; flex-shrink:0; }
  .users-page .role-badge  { display:inline-block; padding:3px 11px; border-radius:20px; font-size:.72rem; font-weight:600; background:#e8eaf6; color:#1a237e; }
  .users-page .role-badge.super { background:#fff3e0; color:#e65100; }
  .users-page .role-badge.none  { background:#f5f5f5; color:#999; }
  .users-page .status-dot  { width:8px; height:8px; border-radius:50%; display:inline-block; margin-right:5px; }
  .users-page .status-dot.active   { background:#43a047; }
  .users-page .status-dot.inactive { background:#e53935; }
  .users-page .action-btn  { border:none; border-radius:6px; padding:5px 14px; font-size:.78rem; font-weight:600; cursor:pointer; text-decoration:none; display:inline-block; transition:all .15s; }
  .users-page .btn-edit    { background:#e8eaf6; color:#1a237e; }
  .users-page .btn-edit:hover { background:#1a237e; color:#fff; }
  .users-page .btn-delete  { background:#fce8e8; color:#c62828; margin-left:5px; }
  .users-page .btn-delete:hover { background:#c62828; color:#fff; }
  .users-page .empty-state { text-align:center; padding:60px 20px; color:#aaa; }
  .users-page .empty-state i { font-size:3rem; display:block; margin-bottom:12px; }
</style>

<div class="users-page">
  <div class="page-header">
    <h1 class="page-title"><i class="bi bi-people-fill me-2" style="color:#f29c12"></i>Manage Users</h1>
    <a href="{{ route('admin.users.create') }}" class="btn-add">
      <i class="bi bi-person-plus-fill"></i> Add New User
    </a>
  </div>

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif
  @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  {{-- Stats --}}
  <div class="stats-bar">
    <div class="stat-card">
      <div class="num">{{ $users->count() }}</div>
      <div class="lbl">Total Users</div>
    </div>
    <div class="stat-card">
      <div class="num" style="color:#43a047">{{ $users->where('is_active',true)->count() }}</div>
      <div class="lbl">Active</div>
    </div>
    <div class="stat-card">
      <div class="num" style="color:#e53935">{{ $users->where('is_active',false)->count() }}</div>
      <div class="lbl">Inactive</div>
    </div>
    <div class="stat-card">
      <div class="num" style="color:#e65100">{{ $users->filter(fn($u) => $u->role && $u->role->is_super_admin)->count() }}</div>
      <div class="lbl">Super Admins</div>
    </div>
  </div>

  {{-- Table --}}
  <div class="card-wrap">
    <table class="table table-hover mb-0">
      <thead>
        <tr>
          <th>#</th>
          <th>User</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status</th>
          <th>Joined</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($users as $i => $user)
        <tr>
          <td class="text-muted">{{ $i + 1 }}</td>
          <td>
            <div class="d-flex align-items-center gap-2">
              <div class="avatar">{{ strtoupper(substr($user->name,0,1)) }}</div>
              <span class="fw-semibold">{{ $user->name }}</span>
              @if($user->id === auth()->id())
                <span class="badge bg-secondary" style="font-size:.65rem">You</span>
              @endif
            </div>
          </td>
          <td class="text-muted">{{ $user->email }}</td>
          <td>
            @if($user->role)
              <span class="role-badge {{ $user->role->is_super_admin ? 'super' : '' }}">
                {{ $user->role->is_super_admin ? '⭐ ' : '' }}{{ $user->role->name }}
              </span>
            @else
              <span class="role-badge none">No Role</span>
            @endif
          </td>
          <td>
            <span class="status-dot {{ $user->is_active ? 'active' : 'inactive' }}"></span>
            {{ $user->is_active ? 'Active' : 'Inactive' }}
          </td>
          <td class="text-muted">{{ $user->created_at->format('d M Y') }}</td>
          <td>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="action-btn btn-edit">
              <i class="bi bi-pencil-fill"></i> Edit
            </a>
            @if($user->id !== auth()->id())
            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline">
              @csrf @method('DELETE')
              <button type="submit" class="action-btn btn-delete"
                onclick="return confirm('Delete user {{ addslashes($user->name) }}? This cannot be undone.')">
                <i class="bi bi-trash-fill"></i> Delete
              </button>
            </form>
            @endif
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="7">
            <div class="empty-state">
              <i class="bi bi-people"></i>
              No users found. <a href="{{ route('admin.users.create') }}">Add the first one</a>.
            </div>
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
