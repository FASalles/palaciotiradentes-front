@extends('twill::layouts.form')

@section('contentFields')

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Imagem',
    ])

    @formField('block_editor', [
        'withoutSeparator' => true,
        'label' => 'Notícia',
        'blocks' => ['paragraph', 'image', 'paragraph_image', 'quote'],
    ])

@stop
