<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use App\Models\Traits\SetToFirstPositionOnCreate;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use A17\Twill\Services\MediaLibrary\ImageService;

class Video extends Model implements Sortable
{
    use HasSlug, HasMedias, HasRevisions, HasPosition, SetToFirstPositionOnCreate{
        SetToFirstPositionOnCreate::bootHasPosition insteadof HasPosition;
    }

    protected $fillable = [
        'published',
        'title',
        'link',
        'text',
        'position',
        'publish_start_date',
        'publish_end_date',
    ];

    public $slugAttributes = ['title'];

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

    public function defaultCmsImage($params = [])
    {
        $media = $this->medias->first();

        if ($media) {
            return $this->cmsImage('cover', 'mobile', $params) ??
                ImageService::getTransparentFallbackUrl($params);
        }

        return ImageService::getTransparentFallbackUrl($params);
    }
}
