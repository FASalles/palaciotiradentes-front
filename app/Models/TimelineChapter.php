<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;
use A17\Twill\Models\Behaviors\HasPosition;

class TimelineChapter extends Model
{
    use HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'text',
        'publish_start_date',
        'position'
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
}
