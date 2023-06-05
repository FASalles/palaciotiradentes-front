<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use App\Models\Traits\SetToFirstPositionOnCreate;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Banner extends Model implements Sortable
{
    use HasMedias, HasRevisions, HasPosition, SetToFirstPositionOnCreate{
        SetToFirstPositionOnCreate::bootHasPosition insteadof HasPosition;
    }

    protected $fillable = [
        'published',
        'title',
        'text',
        'button_text',
        'button_link',
        'position',
        'layout_position',
        'publish_start_date',
        'publish_end_date',
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
