@extends('twill::layouts.form')

@section('contentFields')

    @formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Texto',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ],
    'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered',
    [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'editSource' => true,
    ])

    @formField('input', [
    'name' => 'button_text',
    'label' => 'Texto do botão',
    ])

    @formField('input', [
    'name' => 'button_link',
    'label' => 'Link do botão',
    ])

    @formField('select', [
    'name' => 'layout_position',
    'label' => 'Layout da imagem e texto',
    'unpack' => true,
    'options' => [
    [
    'value' => 'left',
    'label' => 'Texto à esquerda'
    ],
    [
    'value' => 'center',
    'label' => 'Texto no centro'
    ],
    [
    'value' => 'right',
    'label' => 'Texto à direita'
    ],
    ]
    ])

    @formField('medias', [
    'name' => 'cover',
    'label' => 'Banner',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px',
    ])

@stop
