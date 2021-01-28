<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'name',
        'url',
        'icon',
        'order_index',
        'published'
    ];

    /**
     * Relation parent menu
     *
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\Menu', 'parent_id');
    }

    /**
     * Relation children menu
     *
     * @return \Illuminate\Database\Eloquent\Relations
     */
    public function children()
    {
        return $this->hasMany('App\Models\Menu', 'parent_id');
    }
}
