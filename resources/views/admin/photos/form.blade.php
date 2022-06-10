@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'credits',
        'label' => 'Créditos',
        'maxlength' => 100
    ])

    @formField('medias', [
    'name' => 'slideshow',
    'label' => 'Fotos',
    'max' => 20,
    'fieldNote' => 'Minimum image width: 1500px'
])
@stop