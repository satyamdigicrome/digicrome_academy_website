<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckModulePermission
{
    /**
     * Handle an incoming request.
     *
     * Usage in routes:  ->middleware('module:blogs')
     *
     * @param  string  $module  The module_slug to check against
     */
    public function handle(Request $request, Closure $next, string $module): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login');
        }

        if (!$user->is_active) {
            auth()->logout();
            return redirect()->route('login')->with('error', 'Your account has been deactivated.');
        }

        // Super admins bypass all permission checks
        if ($user->isSuperAdmin()) {
            return $next($request);
        }

        // Check module permission
        if (!$user->hasModulePermission($module)) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Forbidden. You do not have access to this module.'], 403);
            }
            return redirect()->route('dashboard')
                ->with('error', 'Access Denied: You do not have permission to access the "' . ucfirst($module) . '" module.');
        }

        return $next($request);
    }
}
