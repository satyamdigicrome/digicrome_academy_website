<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::withCount('users')->with('permissions')->orderBy('name')->get();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::orderBy('module_name')->get();
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required|string|max:255|unique:roles,name',
            'description'    => 'nullable|string|max:500',
            'is_super_admin' => 'boolean',
            'permissions'    => 'nullable|array',
            'permissions.*'  => 'exists:permissions,id',
        ]);

        $role = Role::create([
            'name'           => $request->name,
            'slug'           => Str::slug($request->name),
            'description'    => $request->description,
            'is_super_admin' => $request->boolean('is_super_admin'),
        ]);

        if (!$role->is_super_admin && $request->has('permissions')) {
            $role->permissions()->sync($request->permissions);
        }

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role created successfully.');
    }

    public function edit(Role $role)
    {
        $permissions    = Permission::orderBy('module_name')->get();
        $rolePermIds    = $role->permissions->pluck('id')->toArray();
        return view('admin.roles.edit', compact('role', 'permissions', 'rolePermIds'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'           => 'required|string|max:255|unique:roles,name,' . $role->id,
            'description'    => 'nullable|string|max:500',
            'is_super_admin' => 'boolean',
            'permissions'    => 'nullable|array',
            'permissions.*'  => 'exists:permissions,id',
        ]);

        $role->update([
            'name'           => $request->name,
            'slug'           => Str::slug($request->name),
            'description'    => $request->description,
            'is_super_admin' => $request->boolean('is_super_admin'),
        ]);

        if ($role->is_super_admin) {
            $role->permissions()->detach(); // Super admin = all access, no need to store
        } else {
            $role->permissions()->sync($request->permissions ?? []);
        }

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        if ($role->users()->count() > 0) {
            return redirect()->route('admin.roles.index')
                ->with('error', 'Cannot delete role — it is assigned to ' . $role->users()->count() . ' user(s). Reassign them first.');
        }

        $role->permissions()->detach();
        $role->delete();

        return redirect()->route('admin.roles.index')
            ->with('success', 'Role deleted successfully.');
    }
}
