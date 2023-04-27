@twillBlockTitle('Bloco de texto com imagem')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('medias', [
    'name' => 'image',
    'label' => 'Imagem',
])

@formField('select', [
    'name' => 'image_alignment',
    'label' => 'Image Alignment',
    'unpack' => true,
    'options' => [
        [
            'value' => 'float-md-start pr-md-3',
            'label' => 'Esquerda',
        ],
        [
            'value' => 'float-md-end pl-md-3',
            'label' => 'Direita',
        ],
    ],
])

@formField('select', [
    'name' => 'image_width_desktop',
    'label' => 'Width on Desktop',
    'options' => [
        [
            'value' => 'col-lg-3',
            'label' => '25%',
        ],
        [
            'value' => 'col-lg-4',
            'label' => '33%',
        ],
        [
            'value' => 'col-lg-6',
            'label' => '50%',
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
            'value' => 'col-md-3',
            'label' => '25%',
        ],
        [
            'value' => 'col-md-4',
            'label' => '33%',
        ],
        [
            'value' => 'col-md-6',
            'label' => '50%',
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