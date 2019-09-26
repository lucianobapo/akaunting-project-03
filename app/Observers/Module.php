<?php

namespace App\Observers;

use App\Models\Module\Module as Model;


class Module
{
    /**
     * Listen to the created event.
     *
     * @param  Model  $company
     * @return void
     */
    public function created(Model $model)
    {
        cache()->forget('modules_pluck_alias');
    }

    /**
     * Listen to the deleted event.
     *
     * @param  Model  $company
     * @return void
     */
    public function deleted(Model $model)
    {
        cache()->forget('modules_pluck_alias');
    }

    public function updated(Model $model)
    {        
        cache()->forget('modules_pluck_alias');
    }

}