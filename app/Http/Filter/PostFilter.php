<?php

namespace App\Http\Filter;

class PostFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const DESCRIPTION = 'description';

    protected function getCallbacks(): array
    {
        // TODO: Implement getCallbacks() method.
        return [
            self::TITLE => [$this, 'title'],
            self::DESCRIPTION => [$this, 'description'],
        ];
    }

    public function title(\Illuminate\Database\Eloquent\Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function description(\Illuminate\Database\Eloquent\Builder $builder, $value)
    {
        $builder->where('description', 'like', "%{$value}%");
    }
}
