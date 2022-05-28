<?php
namespace App\Http\Filter;
interface IFilter
{
    public function apply(\Illuminate\Database\Eloquent\Builder $builder);
}
