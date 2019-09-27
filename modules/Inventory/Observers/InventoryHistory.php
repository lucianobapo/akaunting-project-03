<?php

namespace Modules\Inventory\Observers;

use Modules\Inventory\Models\History;

class InventoryHistory
{

    /**
     * Listen to the deleted event.
     *
     * @param  Model $item
     *
     * @return void
     */
    public function deleted(History $item)
    {
        cache()->forget('histories_not_track2');
    }
}
