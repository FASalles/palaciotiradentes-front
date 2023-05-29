@extends('twill::layouts.form')

@section('contentFields')

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Imagem',
    ])

    @formField('block_editor', [
        'withoutSeparator' => true,
        'label' => 'Notícia',
        'blocks' => ['quote', 'paragraph', 'paragraph_image'],
    ])

@stop