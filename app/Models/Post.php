<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{

    use Notifiable,SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
      'title','cat_id','user_id','likes','views','latitude','longitude','description','additional','address'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function tags()
    {
        return $this->hasMany(Tag::class,'post_id','id');
    }

    public function files()
    {
        return $this->hasMany(File::class,'post_id','id');
    }
}
