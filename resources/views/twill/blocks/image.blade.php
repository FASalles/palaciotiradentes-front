@twillBlockTitle('Bloco de imagem')
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
            'value' => 'left',
            'label' => 'Esquerda',
        ],
        [
            'value' => 'right',
            'label' => 'Direita',
        ],
        [
            'value' => 'center',
            'label' => 'Centralizado',
        ],
    ],
])

@formField('select', [
    'name' => 'image_width_desktop',
    'label' => 'Width on Desktop',
    'options' => [
        [
            'value' => '10',
            'label' => '10%',
        ],
        [
            'value' => '20',
            'label' => '20%',
        ],
        [
            'value' => '30',
            'label' => '30%',
        ],
        [
            'value' => '40',
            'label' => '40%',
        ],
        [
            'value' => '50',
            'label' => '50%',
        ],
        [
            'value' => '60',
            'label' => '60%',
        ],
        [
            'value' => '70',
            'label' => '70%',
        ],
        [
            'value' => '80',
            'label' => '80%',
        ],
        [
            'value' => '90',
            'label' => '90%',
        ],
        [
            'value' => '100',
            'label' => '100%',
        ]
    ],
])

@formField('select', [
    'name' => 'image_width_tablet',
    'label' => 'Width on Tablet',
'options' => [
[
'value' => '10',
'label' => '10%',
],
[
'value' => '20',
'label' => '20%',
],
[
'value' => '30',
'label' => '30%',
],
[
'value' => '40',
'label' => '40%',
],
[
'value' => '50',
'label' => '50%',
],
[
'value' => '60',
'label' => '60%',
],
[
'value' => '70',
'label' => '70%',
],
[
'value' => '80',
'label' => '80%',
],
[
'value' => '90',
'label' => '90%',
],
[
'value' => '100',
'label' => '100%',
]
],
    ],
])
