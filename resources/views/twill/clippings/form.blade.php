@extends('twill::layouts.form')

@section('contentFields')

    @formField('repeater', ['type' => 'clippings'])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Imagem',
    ])
@stop
