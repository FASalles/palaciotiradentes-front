<?php

namespace App\Models\Traits;

use A17\Twill\Facades\TwillCapsules;
use Illuminate\Support\Facades\DB;

trait SetToFirstPositionOnCreate
{
    protected static function bootHasPosition()
    {
        static::creating(function ($model) {
            $model->setToFirstPosition();
        });
    }

    protected function setToFirstPosition()
    {
        DB::table($this->getTable())->increment('position');
        $this->position = 1;
    }
}
