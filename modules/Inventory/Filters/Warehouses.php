<?php

namespace Modules\Inventory\Filters;

use EloquentFilter\ModelFilter;

class Warehouses extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relatedModel => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function search($query)
    {
        $model = $this->where('name', 'LIKE', '%' . $query . '%');

        $or_fields = ['email', 'phone', 'address'];

        foreach ($or_fields as $or_field) {
            $model->orWhere($or_field, 'LIKE', '%' . $query . '%');
        }

        return $model;
    }
}
