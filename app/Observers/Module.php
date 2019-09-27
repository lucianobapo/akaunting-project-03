<?php

namespace App\Observers;

use App\Models\Module\Module as Model;


class Module
{
    protected $cache_tag = 'App\Models\Module\Module';
    /**
     * Listen to the created event.
     *
     * @param  Model  $company
     * @return void
     */
    public function created(Model $model)
    {
        cache()->forget('modules_pluck_alias');
        cache()->tags(Model::class)->flush();
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
        cache()->tags(Model::class)->flush();
    }

    public function updated(Model $model)
    {        
        cache()->forget('modules_pluck_alias');
        cache()->tags(Model::class)->flush();
    }

}