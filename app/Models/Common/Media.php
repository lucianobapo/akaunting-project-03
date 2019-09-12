<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\SoftDeletes;
use Plank\Mediable\Media as PMedia;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Media extends PMedia
{
    use SoftDeletes;
    use Cachable;

    protected $dates = ['deleted_at'];

}
