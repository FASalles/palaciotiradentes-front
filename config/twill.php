<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Twill Block Editor configuration
    |--------------------------------------------------------------------------
    |
    | This array allows you to provide the package with your configuration
    | for the Block editor field and Editor features.
    |
     */
    'locale' => 'pt-BR', // changing this will make your locale the default for all CMS users
    'fallback_locale' => 'en',
    'available_user_locales' => [
        // list of locales that CMS users can use, add your new locale here if you need another one
        'en',
        'pt-BR',
        'fr',
    ],
    'block_single_layout' => 'site.layouts.block', // layout to use when rendering a single block in the editor
    'block_views_path' => 'site.blocks', // path where a view file per block type is stored
    'block_views_mappings' => [], // custom mapping of block types and views
    'block_preview_render_childs' => true, // indicates if childs should be rendered when using repeater in blocks
    'block_presenter_path' => null, // allow to set a custom presenter to a block model
    // Indicates if blocks templates should be inlined in HTML.
    // When setting to false, make sure to build Twill with your all your custom blocks.
    'inline_blocks_templates' => true,
    'custom_vue_blocks_resource_path' => 'assets/js/blocks',
    'use_twill_blocks' => ['text', 'image'],
    'block_editor' => [
        'crops' => [
            'image' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'tablet' => [
                    [
                        'name' => 'tablet',
                        'ratio' => 4 / 3,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'default' => [
                    [
                        'name' => 'default',
                    ],
                ],
            ],
        ],
    ],
    'directories' => [
        'source' => [
            'blocks' => [
                [
                    'path' => base_path('vendor/area17/twill/src/Commands/stubs/blocks'),
                    'source' => A17\Twill\Services\Blocks\Block::SOURCE_TWILL,
                ],
                [
                    'path' => resource_path('views/admin/blocks'),
                    'source' => A17\Twill\Services\Blocks\Block::SOURCE_APP,
                ],
            ],
            'repeaters' => [
                [
                    'path' => resource_path('views/admin/repeaters'),
                    'source' => A17\Twill\Services\Blocks\Block::SOURCE_APP,
                ],
                [
                    'path' => base_path('vendor/area17/twill/src/Commands/stubs/repeaters'),
                    'source' => A17\Twill\Services\Blocks\Block::SOURCE_TWILL,
                ],
            ],
            'icons' => [
                base_path('vendor/area17/twill/frontend/icons'),
                resource_path('views/admin/icons'),
            ],
        ],
        'destination' => [
            'make_dir' => true,
            'blocks' => resource_path('views/admin/blocks'),
            'repeaters' => resource_path('views/admin/repeaters'),
        ],
    ],

    'capsules' => [
        'list' => [
            [
                'name' => 'Posts',
                'enabled' => true,
            ],
        ],
    ],

    'enabled' => [
        'buckets' => true,
    ],

    'buckets' => [
        'videos' => [
            'name' => 'Home',
            'buckets' => [
                'videos_feature' => [
                    'name' => 'Em destaque',
                    'bucketables' => [
                        [
                            'module' => 'videos',
                            'name' => 'videos',
                            'repository' => 'App\Repositories\VideoRepository',
                            'scopes' => ['published' => true],
                        ],
                    ],
                    'max_items' => 3,
                ],
            ],
        ],
        'posts' => [
            'name' => 'Home',
            'buckets' => [
                'posts_feature' => [
                    'name' => 'Em destaque',
                    'bucketables' => [
                        [
                            'module' => 'posts',
                            'name' => 'posts',
                            'repository' => 'App\Twill\Capsules\Posts\Repositories\PostRepository',
                            'scopes' => ['published' => true, 'orderByPublishedDate' => true],
                        ],
                    ],
                    'max_items' => 3,
                ],
            ],
        ],
    ],

    'media_library' => [
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env(
            'MEDIA_LIBRARY_IMAGE_SERVICE',
            'A17\Twill\Services\MediaLibrary\Imgix'
        ),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config(
            'twill.file_library.prefix_uuid_with_local_path',
            false
        ),
        'translated_form_fields' => false,
    ],

    'file_library' => [
        'disk' => 'twill_file_library',
        'endpoint_type' => env('FILE_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH', 'uploads/'),
        'file_service' => env('FILE_LIBRARY_FILE_SERVICE', 'A17\Twill\Services\FileLibrary\Disk'),
        'acl' => env('FILE_LIBRARY_ACL', 'public-read'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => [],
        'prefix_uuid_with_local_path' => false,
    ],
];
