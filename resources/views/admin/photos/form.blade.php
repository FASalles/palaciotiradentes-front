@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 100
    ])

    @formField('medias', [
    'name' => 'slideshow',
    'label' => 'Slideshow',
    'max' => 20,
    'fieldNote' => 'Minimum image width: 1500px'
])
@stop