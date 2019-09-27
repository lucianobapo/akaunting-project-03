<?php

namespace App\Observers;

use App\Models\Expense\BillItem as Model;


class BillItem
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