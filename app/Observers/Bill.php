<?php

namespace App\Observers;

use App\Models\Expense\Bill as Model;


class Bill
{
    public function created(Model $model)
    {
        cache()->tags(Model::class)->flush();
    }

    public function deleted(Model $model)
    {
        cache()->tags(Model::class)->flush();
    }

    public function updated(Model $model)
    {        
        cache()->tags(Model::class)->flush();
    }

}