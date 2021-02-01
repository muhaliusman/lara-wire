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

    public function authorizeCheck()
    {

    }

    public function hydrate()
    {
        return $this->needAuthenticated();
    }
}