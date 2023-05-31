@twillBlockTitle('Bloco de texto com imagem')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('medias', [
    'name' => 'block_img',
    'label' => 'Imagem',
])

@formField('select', [
    'name' => 'image_alignment',
    'label' => 'Image Alignment',
    'unpack' => true,
    'options' => [
        [
            'value' => 'left',
            'label' => 'Esquerda',
        ],
        [
            'value' => 'right',
            'label' => 'Direita',
        ],
    ],
])

@formField('select', [
    'name' => 'image_width_desktop',
    'label' => 'Width on Desktop',
    'options' => [
        [
            'value' => 'col-lg-1',
            'label' => '1%',
        ],
        [
            'value' => 'col-lg-2',
            'label' => '2%',
        ],
        [
            'value' => 'col-lg-3',
            'label' => '25%',
        ],
        [
            'value' => 'col-lg-4',
            'label' => '33%',
        ],
        [
            'value' => 'col-lg-5',
            'label' => '5%',
        ],
        [
            'value' => 'col-lg-6',
            'label' => '50%',
        ],
        [
            'value' => 'col-lg-7',
            'label' => '7%',
        ],
        [
            'value' => 'col-lg-8',
            'label' => '66%',
        ],
        [
            'value' => 'col-lg-9',
            'label' => '75%',
        ],
        [
            'value' => 'col-lg-10',
            'label' => '25%',
        ],
        [
            'value' => 'col-lg-11',
            'label' => '25%',
        ],
        [
            'value' => 'col-lg-12',
            'label' => '100%',
        ],
    ],
])

@formField('select', [
    'name' => 'image_width_tablet',
    'label' => 'Width on Tablet',
    'options' => [
        [
            'value' => 'col-md-1',
            'label' => '25%',
        ],
        [
            'value' => 'col-md-2',
            'label' => '25%',
        ],
        [
            'value' => 'col-md-3',
            'label' => '25%',
        ],
        [
            'value' => 'col-md-4',
            'label' => '33%',
        ],
        [
            'value' => 'col-md-5',
            'label' => '25%',
        ],
        [
            'value' => 'col-md-6',
            'label' => '50%',
        ],
        [
            'value' => 'col-md-7',
            'label' => '25%',
        ],
        [
            'value' => 'col-md-8',
            'label' => '66%',
        ],
        [
            'value' => 'col-md-9',
            'label' => '75%',
        ],
        [
            'value' => 'col-md-10',
            'label' => '25%',
        ],
        [
            'value' => 'col-md-11',
            'label' => '25%',
        ],
        [
            'value' => 'col-md-12',
            'label' => '100%',
        ],
    ],
])

@formField('wysiwyg', [
    'name' => 'subject',
    'label' => 'Notícia',
    'toolbarOptions' => [['header' => [1, 2, false]], 'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', ['indent' => '-1'], ['indent' => '+1']],
])
