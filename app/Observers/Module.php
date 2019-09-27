<?php

namespace App\Observers;

use App\Models\Module\Module as Model;


class Module
{

    public function created(Model $model)
    {
        cache()->forget('modules_pluck_alias');
        cache()->tags(Model::class)->flush();
    }

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