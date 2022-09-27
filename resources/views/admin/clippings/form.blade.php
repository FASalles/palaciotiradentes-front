@extends('twill::layouts.form')

@section('contentFields')

    @formField('repeater', ['type' => 'clippings'])

    @formField('medias', [
    'name' => 'cover',
    'label' => 'Imagem',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px',
    ])
@stop
