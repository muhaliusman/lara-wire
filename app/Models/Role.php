<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as Model;
use App\Models\Traits\UuidTrait;

class Role extends Model
{
    use HasFactory, UuidTrait;

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
