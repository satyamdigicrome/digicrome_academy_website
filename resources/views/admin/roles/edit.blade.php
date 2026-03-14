@extends('admin_layout.app')
@section('title', 'Edit Role — ' . $role->name)

@section('content')
<style>
  .form-page .page-header { display:flex; align-items:center; gap:14px; margin-bottom:28px; }
  .form-page .back-btn    { background:#f0f0f0; border:none; border-radius:8px; padding:8px 14px; color:#555; font-size:.85rem; text-decoration:none; display:inline-flex; align-items:center; gap:5px; }
  .form-page .back-btn:hover { background:#e0e0e0; color:#333; }
  .form-page .page-title  { font-size:1.4rem; font-weight:700; color:#1a237e; margin:0; }
  .form-page .form-card   { background:#fff; border-radius:12px; border:1px solid #e3e8f0; box-shadow:0 2px 12px rgba(26,35,126,.06); }
  .form-page .form-card-header { background:linear-gradient(135deg,#1a237e,#283593); color:#fff; padding:18px 24px; border-radius:12px 12px 0 0; font-weight:600; font-size:1rem; }
  .form-page .form-card-body  { padding:28px; }
  .form-page .form-label  { font-size:.82rem; font-weight:600; color:#444; margin-bottom:5px; }
  .form-page .form-control { border:1.5px solid #e0e0e0; border-radius:8px; padding:10px 14px; font-size:.9rem; transition:border-color .2s,box-shadow .2s; }
  .form-page .form-control:focus { border-color:#1a237e; box-shadow:0 0 0 3px rgba(26,35,126,.1); outline:none; }
  .form-page .toggle-wrap { display:flex; align-items:center; gap:12px; padding:12px 16px; border:1.5px solid #e0e0e0; border-radius:8px; cursor:pointer; margin-bottom:8px; }
  .form-page .toggle-wrap input { width:18px; height:18px; accent-color:#1a237e; cursor:pointer; }
  .form-page .btn-submit  { background:linear-gradient(135deg,#1a237e,#283593); color:#fff; border:none; padding:12px 30px; border-radius:8px; font-weight:700; font-size:.95rem; cursor:pointer; transition:opacity .2s; }
  .form-page .btn-submit:hover { opacity:.88; }
  .form-page .btn-cancel  { background:#f0f0f0; color:#555; border:none; padding:12px 24px; border-radius:8px; font-weight:600; font-size:.9rem; text-decoration:none; display:inline-block; }
  .form-page .btn-cancel:hover { background:#e0e0e0; color:#333; }
  .perm-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(210px,1fr)); gap:10px; }
  .perm-item { display:flex; align-items:center; gap:10px; padding:12px 14px; border:1.5px solid #e0e0e0; border-radius:8px; cursor:pointer; transition:border-color .15s,background .15s; user-select:none; }
  .perm-item:hover { border-color:#1a237e; background:#f4f7fc; }
  .perm-item.checked { border-color:#1a237e; background:#eef1fb; }
  .perm-item input[type=checkbox] { width:17px; height:17px; accent-color:#1a237e; cursor:pointer; flex-shrink:0; }
  .perm-item .perm-name { font-size:.85rem; font-weight:500; color:#333; }
  .super-notice { background:#fff8e1; border:1.5px solid #ffe082; border-radius:8px; padding:12px 16px; font-size:.85rem; color:#7b5800; margin-top:10px; display:none; }
</style>

<div class="form-page">
  <div class="page-header">
    <a href="{{ route('admin.roles.index') }}" class="back-btn"><i class="bi bi-arrow-left"></i> Back</a>
    <h1 class="page-title">Edit Role — {{ $role->name }}</h1>
  </div>

  <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="row g-4">
      <div class="col-lg-8">
        {{-- Basic Info --}}
        <div class="form-card mb-4">
          <div class="form-card-header"><i class="bi bi-shield-fill me-2"></i>Role Details</div>
          <div class="form-card-body">
            <div class="mb-3">
              <label class="form-label">Role Name <span class="text-danger">*</span></label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $role->name) }}" required>
              @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea name="description" class="form-control" rows="2">{{ old('description', $role->description) }}</textarea>
            </div>

            <label class="toggle-wrap">
              <input type="checkbox" name="is_super_admin" id="isSuperAdmin" value="1"
                {{ old('is_super_admin', $role->is_super_admin) ? 'checked' : '' }}
                onchange="toggleSuperAdmin(this)">
              <div>
                <div style="font-weight:700;font-size:.88rem">⭐ Super Admin Role</div>
                <div style="font-size:.75rem;color:#888">Grants unrestricted access to ALL modules</div>
              </div>
            </label>
            <div class="super-notice" id="superNotice">
              ℹ️ Super Admin roles have access to all modules. The permissions below are ignored.
            </div>
          </div>
        </div>

        {{-- Permissions --}}
        <div class="form-card" id="permissionsCard">
          <div class="form-card-header"><i class="bi bi-grid-3x3-gap-fill me-2"></i>Module Permissions</div>
          <div class="form-card-body">
            <p style="font-size:.85rem;color:#666;margin-bottom:16px;">
              Toggle the modules this role can access. Changes take effect immediately after saving.
            </p>
            <div class="d-flex gap-3 mb-4">
              <button type="button" class="btn btn-sm btn-outline-primary" onclick="toggleAll(true)">✅ Select All</button>
              <button type="button" class="btn btn-sm btn-outline-secondary" onclick="toggleAll(false)">☐ Clear All</button>
            </div>
            <div class="perm-grid" id="permGrid">
              @foreach($permissions as $perm)
              @php $isChecked = in_array($perm->id, old('permissions', $rolePermIds)); @endphp
              <label class="perm-item {{ $isChecked ? 'checked' : '' }}">
                <input type="checkbox" name="permissions[]" value="{{ $perm->id }}"
                  {{ $isChecked ? 'checked' : '' }}
                  onchange="this.closest('.perm-item').classList.toggle('checked', this.checked)">
                <span class="perm-name">{{ $perm->module_name }}</span>
              </label>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 d-flex gap-3 pt-2">
        <button type="submit" class="btn-submit"><i class="bi bi-save-fill me-2"></i>Save Changes</button>
        <a href="{{ route('admin.roles.index') }}" class="btn-cancel">Cancel</a>
      </div>
    </div>
  </form>
</div>

<script>
  function toggleSuperAdmin(cb) {
    document.getElementById('superNotice').style.display = cb.checked ? 'block' : 'none';
    document.getElementById('permissionsCard').style.opacity = cb.checked ? '.4' : '1';
    document.getElementById('permissionsCard').style.pointerEvents = cb.checked ? 'none' : 'auto';
  }
  function toggleAll(state) {
    document.querySelectorAll('#permGrid input[type=checkbox]').forEach(function(cb) {
      cb.checked = state;
      cb.closest('.perm-item').classList.toggle('checked', state);
    });
  }
  if (document.getElementById('isSuperAdmin').checked) toggleSuperAdmin(document.getElementById('isSuperAdmin'));
</script>
@endsection
