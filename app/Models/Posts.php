<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    use Filterable;
    protected $guarded = false;
    protected $fillable=['id','title','description'];
//    public function categories(){
//        return $this->belongsToMany(Categories::class);
//    }
}
