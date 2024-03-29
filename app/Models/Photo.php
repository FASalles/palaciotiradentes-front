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

class Photo extends Model implements Sortable
{
    use HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition, SetToFirstPositionOnCreate {
        SetToFirstPositionOnCreate::bootHasPosition insteadof HasPosition;
    }

    protected $fillable = [
        'published',
        'title',
        'credits',
        'text',
        'position',
        'publish_start_date',
        'publish_end_date',
    ];

    public $slugAttributes = ['title'];

    public $mediasParams = [
        'slideshow' => [
            'default' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
            ],
        ],
        'cover' => [
            'default' => [
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
            ],
        ],
    ];
}
