<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'text','user_id','post_id','parent_id'
    ];

    public function parent()
    {
        return $this->belongsTo(self::class,'parent_id','id');
    }

    public function children()
    {
        return $this->hasMany(self::class,'parent_id','id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class,'post_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

}
