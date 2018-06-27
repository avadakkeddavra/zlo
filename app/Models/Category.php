<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'title','description','parent_id'
    ];

    public function parent()
    {
        return $this->belongsTo(self::class,'parent_id','id');
    }

    public function children()
    {
        return $this->hasMany(self::class,'parent_id','id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class,'cat_id','id');
    }
}
