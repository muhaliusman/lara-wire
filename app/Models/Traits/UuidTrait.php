<?php

namespace App\Models\Traits;
use Illuminate\Support\Str;

trait UuidTrait
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