<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Exhibition extends Model
{
    use HasSlug, HasMedias, HasRevisions;

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (isset($model->attributes['event_date_timezone'])) {
                if ($model->attributes['event_date_timezone'] !== Carbon::create($model->event_date)->timezone('UTC')->toDateTimeString()) {
                    $model->event_date = Carbon::create($model->attributes['event_date_timezone'])->timezone(config('app.timezone'));
                }
                unset($model->attributes['event_date_timezone']);
            }
            if (isset($model->attributes['event_time_end_timezone'])) {
                if (Carbon::create($model->attributes['event_time_end_timezone'])->format('H:i') !== Carbon::create($model->event_time_end)->timezone('UTC')->format('H:i')) {
                    $model->event_time_end = Carbon::create($model->attributes['event_time_end_timezone'])->timezone(config('app.timezone'))->format('H:i');
                }
                unset($model->attributes['event_time_end_timezone']);
            }
        });

    }

    protected $fillable = [
        'published',
        'title',
        'text',
        'place',
        'event_date',
        'event_date_timezone',
        'event_time_end',
        'event_time_end_timezone',
        'publish_start_date',
        'publish_end_date',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    protected function eventTimeEndTimezone(): Attribute
    {
        return Attribute::make(
            get: function () {
                return Carbon::create($this->event_time_end)->timezone('UTC');
            },
        );
    }

    protected function eventDateTimezone(): Attribute
    {
        return Attribute::make(
            get: function () {
                return Carbon::create($this->event_date)->timezone('UTC');
            },
        );
    }
}
