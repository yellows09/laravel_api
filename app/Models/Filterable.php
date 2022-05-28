<?php

namespace App\Models;

//use IFilter;


use App\Http\Filter\IFilter;

trait Filterable
{
// name scopeFIlter() - filter()
    public function scopeFilter(\Illuminate\Database\Eloquent\Builder $builder, IFilter $filter): \Illuminate\Database\Eloquent\Builder
    {
        $filter->apply($builder);

        return $builder;
    }
}
