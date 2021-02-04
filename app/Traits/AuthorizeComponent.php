<?php

namespace App\Traits;

trait AuthorizeComponent
{
    public function needAuthenticated()
    {
        if (property_exists($this, 'auth')) {
            if ($this->auth === true) {
                if (!auth()->check()) {
                    return redirect(config('larawire.redirect_if_unauthenticated'));
                }
            }
        }
    }

    public function authorizeCheck($permission = null)
    {
        if (!auth()->check()) {
            return redirect(config('larawire.redirect_if_unauthenticated'));
        }

        $user = auth()->user();

        if (!$permission) {
            if (property_exists($this, 'permissions')) {
                if (is_array($this->permissions)) {
                    if (!$user->hasAllPermissions($this->permissions)) {
                        abort(403);
                    }
                }
            }
        } else {
            if (is_array($permission)) {
                if (!$user->hasAllPermissions($permission)) {
                    abort(403);
                }
            } else {
                if (!$user->hasPermissionTo($permission)) {
                    abort(403);
                }
            }
        }
    }

    public function hydrate()
    {
        $this->needAuthenticated();
        $this->authorizeCheck();
    }
}