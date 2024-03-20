<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use App\Models\Traits\SetToFirstPositionOnCreate;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Publication extends Model implements Sortable
{
    use HasSlug, HasMedias, HasFiles, HasPosition, SetToFirstPositionOnCreate{
        SetToFirstPositionOnCreate::bootHasPosition insteadof HasPosition;
    }

    protected $fillable = [
        'published',
        'title',
        'position',
        'text',
        'publish_start_date',
        'publish_end_date',
    ];

    public $filesParams = ['single_file'];
    
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
}
