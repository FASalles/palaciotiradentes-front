@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
        'name' => 'title',
        'label' => 'Título',
    ])
    
    @formField('wysiwyg', [
        'name' => 'text',
        'label' => 'Descrição',
        'toolbarOptions' => [['header' => [1, 2, false]], 'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', ['indent' => '-1'], ['indent' => '+1']],
        'editSource' => true,
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Imagem',
    ])


@stop
