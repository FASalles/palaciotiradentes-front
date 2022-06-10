@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Descrição',
        'maxlength' => 10000
    ])

@section('contentFields')
    @formField('input', [
        'name' => 'link',
        'label' => 'Link do vídeo',
        'maxlength' => 10000
    ])

    @formField('medias', [
    'name' => 'cover',
    'label' => 'Cover image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
])
@stop
