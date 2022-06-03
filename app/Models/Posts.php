<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    use Filterable;

    protected $guarded = false;
    protected $fillable = ['id', 'title', 'description'];
    /**
     * Получить title.
     *
     * @param  string  $value
     * @return string
     */
    protected function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
//    public function categories(){
//        return $this->belongsToMany(Categories::class);
//    }
}
