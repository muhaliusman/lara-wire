<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as Model;
use App\Traits\Uuid;

class Permission extends Model
{
    use HasFactory, Uuid;

    /**
     * @var boolean
     */
    public $incrementing = false;

    /**
     *
     * @var string
     */
    protected $keyType = 'string';
}
