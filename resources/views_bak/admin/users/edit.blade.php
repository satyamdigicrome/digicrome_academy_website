@extends('admin_layout.app')
@section('title', 'Edit User — ' . $user->name)

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
  .form-page .form-control, .form-page .form-select { border:1.5px solid #e0e0e0; border-radius:8px; padding:10px 14px; font-size:.9rem; transition:border-color .2s,box-shadow .2s; }
  .form-page .form-control:focus, .form-page .form-select:focus { border-color:#1a237e; box-shadow:0 0 0 3px rgba(26,35,126,.1); outline:none; }
  .form-page .toggle-wrap { display:flex; align-items:center; gap:12px; padding:12px 16px; border:1.5px solid #e0e0e0; border-radius:8px; cursor:pointer; }
  .form-page .toggle-wrap input { width:18px; height:18px; accent-color:#1a237e; cursor:pointer; }
  .form-page .btn-submit  { background:linear-gradient(135deg,#1a237e,#283593); color:#fff; border:none; padding:12px 30px; border-radius:8px; font-weight:700; font-size:.95rem; cursor:pointer; transition:opacity .2s; }
  .form-page .btn-submit:hover { opacity:.88; }
  .form-page .btn-cancel  { background:#f0f0f0; color:#555; border:none; padding:12px 24px; border-radius:8px; font-weight:600; font-size:.9rem; text-decoration:none; display:inline-block; }
  .form-page .btn-cancel:hover { background:#e0e0e0; color:#333; }
  .form-page .help-text   { font-size:.75rem; color:#888; margin-top:4px; }
</style>

<div class="form-page">
  <div class="page-header">
    <a href="{{ route('admin.users.index') }}" class="back-btn"><i class="bi bi-arrow-left"></i> Back</a>
    <h1 class="page-title">Edit User — {{ $user->name }}</h1>
  </div>

  <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="row g-4">
      {{-- Left column --}}
      <div class="col-lg-8">
        <div class="form-card">
          <div class="form-card-header"><i class="bi bi-person-fill me-2"></i>User Information</div>
          <div class="form-card-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                  value="{{ old('name', $user->name) }}" required>
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                  value="{{ old('email', $user->email) }}" required>
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">New Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                  placeholder="Leave blank to keep current">
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                <p class="help-text">Only fill this if you want to change the password.</p>
              </div>
              <div class="col-md-6">
                <label class="form-label">Confirm New Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat new password">
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Right column --}}
      <div class="col-lg-4">
        <div class="form-card">
          <div class="form-card-header"><i class="bi bi-shield-lock-fill me-2"></i>Role & Status</div>
          <div class="form-card-body">
            <div class="mb-3">
              <label class="form-label">Assign Role</label>
              <select name="role_id" class="form-select @error('role_id') is-invalid @enderror">
                <option value="">— No Role —</option>
                @foreach($roles as $role)
                  <option value="{{ $role->id }}" {{ old('role_id', $user->role_id) == $role->id ? 'selected' : '' }}>
                    {{ $role->is_super_admin ? '⭐ ' : '' }}{{ $role->name }}
                  </option>
                @endforeach
              </select>
              @error('role_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <label class="form-label">Account Status</label>
            <label class="toggle-wrap">
              <input type="checkbox" name="is_active" value="1" {{ old('is_active', $user->is_active) ? 'checked' : '' }}>
              <div>
                <div style="font-weight:600;font-size:.88rem">Active Account</div>
                <div style="font-size:.75rem;color:#888">User can log in when active</div>
              </div>
            </label>
          </div>
        </div>

        {{-- Info card --}}
        <div class="form-card mt-4">
          <div class="form-card-body" style="font-size:.82rem;color:#666;">
            <div class="d-flex justify-content-between mb-1">
              <span>Joined:</span>
              <strong>{{ $user->created_at->format('d M Y') }}</strong>
            </div>
            <div class="d-flex justify-content-between">
              <span>Last updated:</span>
              <strong>{{ $user->updated_at->format('d M Y') }}</strong>
            </div>
          </div>
        </div>
      </div>

      {{-- Actions --}}
      <div class="col-12 d-flex gap-3 pt-2">
        <button type="submit" class="btn-submit"><i class="bi bi-save-fill me-2"></i>Save Changes</button>
        <a href="{{ route('admin.users.index') }}" class="btn-cancel">Cancel</a>
      </div>
    </div>
  </form>
</div>
@endsection
