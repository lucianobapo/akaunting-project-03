<?php

namespace App\Observers;

use App\Models\Setting\Currency as Model;


class Currency
{
    /**
     * Listen to the created event.
     *
     * @param  Model  $company
     * @return void
     */
    public function created(Model $model)
    {
        cache()->forget('currencies');
    }

    /**
     * Listen to the deleted event.
     *
     * @param  Model  $company
     * @return void
     */
    public function deleted(Model $model)
    {
        cache()->forget('currencies');
    }

    public function updated(Model $model)
    {        
        cache()->forget('currencies');
    }

}