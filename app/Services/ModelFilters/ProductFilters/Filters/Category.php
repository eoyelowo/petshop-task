<?php

namespace App\Services\ModelFilters\ProductFilters\Filters;

use App\Services\Contracts\ModelFilter\Filter;
use Illuminate\Contracts\Database\Eloquent\Builder as BuilderContract;

final class Category implements Filter
{
    public static function apply(BuilderContract $builder, string $value): BuilderContract
    {
        return $builder->where('category_uuid', $value);
    }
}
