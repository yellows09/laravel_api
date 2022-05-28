<?php

namespace App\Http\Filter;

use Illuminate\Database\Eloquent\Builder;

abstract class AbstractFilter implements \App\Http\Filter\IFilter
{
    /** @var array */
    private $queryParams = [];

    /**
     * AbstructionFilter
     * @param $queryParams
     */
    public function __construct($queryParams)
    {
        $this->queryParams = $queryParams;
    }

    abstract protected function getCallbacks(): array;

    public function apply(\Illuminate\Database\Eloquent\Builder $builder)
    {
        $this->before($builder);
        foreach ($this->getCallbacks() as $name => $callbacks) {
            if (isset($this->queryParams[$name])) {
                call_user_func($callbacks, $builder, $this->queryParams[$name]);
            }
        }
    }

    public function before(Builder $builder)
    {

    }

    public function getQueryParam(string $key, $defauilt = null)
    {
        return $this->queryParams[$key] ?? $defauilt;
    }

    protected function removeQueyParam(string ...$keys)
    {
        foreach ($keys as $key) {
            unset($this->queryParams[$key]);
        }
        return $this;
    }


}
