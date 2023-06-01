@twillBlockTitle('Bloco de texto com imagem')
@twillBlockIcon('text')
@twillBlockGroup('app')

@php
    $options_lg = [];

    for ($i = 1; $i <= 12; $i++) {
        $options_lg[] = [
            'value' => 'col-lg-' . $i,
            'label' => round(($i / 12) * 100) . '%',
        ];
    }

    $options_md = [];

    for ($i = 1; $i <= 12; $i++) {
        $options_md[] = [
            'value' => 'col-md-' . $i,
            'label' => round(($i / 12) * 100) . '%',
        ];
    }
@endphp

@formField('medias', [
    'name' => 'block_img',
    'label' => 'Imagem',
])

@formField('select', [
    'name' => 'image_alignment',
    'label' => 'Alinhamento da imagem',
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
    'label' => 'Largura em Desktop',
    'options' => $options_lg
])

@formField('select', [
    'name' => 'image_width_tablet',
    'label' => 'Largura em Tablet',
    'options' => $options_md
])

@formField('wysiwyg', [
    'name' => 'subject',
    'label' => 'Notícia',
    'toolbarOptions' => [['header' => [1, 2, 3, 4, false]], 'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', ['indent' => '-1'], ['indent' => '+1']],
])
