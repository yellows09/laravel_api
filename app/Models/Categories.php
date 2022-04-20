<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['id','category_name'];
    public function posts(){
        return $this->belongsToMany(Posts::class,'category_post','category_id','post_id');
    }

//    public static function boot() {
//        parent::boot();
//
//        static::deleting(function($user) { // before delete() method call this
//            $user->posts()->delete();
//            // do the rest of the cleanup...
//        });
//    }
}
