@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'credits',
        'label' => 'Créditos',
        'maxlength' => 100,
    ])

    @formField('wysiwyg', [
        'name' => 'text',
        'label' => 'Texto',
        'toolbarOptions' => [['header' => [1, 2, false]], 'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', ['indent' => '-1'], ['indent' => '+1']],
        'editSource' => true,
    ])

    @formField('medias', [
        'name' => 'slideshow',
        'label' => 'Fotos',
        'max' => 100,
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Imagem em destaque',
    ])
@stop
