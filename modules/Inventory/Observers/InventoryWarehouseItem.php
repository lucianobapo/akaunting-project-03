<?php

namespace Modules\Inventory\Observers;

use Modules\Inventory\Models\WarehouseItem as Model;

class InventoryWarehouseItem
{
    /**
     * Listen to the created event.
     *
     * @param  Model $model
     *
     * @return void
     */
    public function created(Model $model)
    {
        cache()->tags(Model::class)->flush();
    }
    /**
     * Listen to the updated event.
     *
     * @param  Model $model
     *
     * @return void
     */
    public function updated(Model $model)
    {
        cache()->tags(Model::class)->flush();
    }

    /**
     * Listen to the deleted event.
     *
     * @param  Model $model
     *
     * @return void
     */
    public function deleted(Model $model)
    {
        cache()->tags(Model::class)->flush();
    }
}
