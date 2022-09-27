@extends('twill::layouts.form')

@section('contentFields')

    @formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Texto',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ],
    'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered',
    [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'editSource' => true,
    ])

    @formField('files', [
    'name' => 'single_file',
    'label' => 'Arquivo',
    'note' => 'Add one file (per language)'
    ])

    @formField('medias', [
    'name' => 'cover',
    'label' => 'Imagem',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])


@stop
