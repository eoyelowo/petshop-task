<?php

namespace App\Services\ModelFilters\UserFilters;

use App\Models\User;
use App\Services\ModelFilters\FilterModel;
use Illuminate\Contracts\Database\Eloquent\Builder as BuilderContract;

/**
 * @template TKey of array-key
 * @template TModel
 * @template TItem
 * */
final class FilterUser extends FilterModel
{
    /**
     * The first argument passed is from the request fields.
     *
     * The filter files generated should be based on the request field passed here
     *
     * @param array $filters
     * @return BuilderContract
     */
    public static function apply(array $filters): BuilderContract
    {
        $query = self::applyDecoratorFromRequest(
            $filters,
            (new User())->newQuery(),
            __NAMESPACE__
        );

        return self::getResults($query);
    }
}
