@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'link',
        'label' => 'Link do vídeo',
    ])

    @formField('wysiwyg', [
        'name' => 'text',
        'label' => 'Texto',
        'toolbarOptions' => [['header' => [1, 2, false]], 'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', ['indent' => '-1'], ['indent' => '+1']],
        'editSource' => true,
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Cover image',
    ])
@stop
