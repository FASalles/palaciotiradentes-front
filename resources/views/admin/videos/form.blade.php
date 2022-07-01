@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'link',
        'label' => 'Link do vídeo',
    ])

    @formField('input', [
        'name' => 'text',
        'label' => 'Texto',
    ])

    @formField('medias', [
    'name' => 'cover',
    'label' => 'Cover image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
])
@stop
