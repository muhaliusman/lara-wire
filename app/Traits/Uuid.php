<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Uuid
{
    /**
     *  Set uuid in creating model
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}