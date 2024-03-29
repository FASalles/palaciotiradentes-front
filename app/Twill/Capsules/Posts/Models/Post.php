<?php

namespace App\Twill\Capsules\Posts\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use A17\Twill\Services\MediaLibrary\ImageService;

class Post extends Model
{
    use HasSlug, HasMedias, HasRevisions, HasBlocks;

    protected $fillable = [
        'published',
        'title',
        'subject',
        'wp_content',
        'plain_content',
        'publish_start_date',
        'publish_end_date',
    ];

    public $slugAttributes = ['title'];

    protected $dates = ['publish_start_date', 'publish_end_date'];

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

    public function scopeOrderByPublishedDate($query)
    {
        return $query->orderBy("{$this->getTable()}.publish_start_date", 'DESC');
    }

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
