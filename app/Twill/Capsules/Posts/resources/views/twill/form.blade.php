@extends('twill::layouts.form')

@section('contentFields')

    @if (!empty($item->subject))
        @formField('wysiwyg', [
        'name' => 'subject',
        'label' => 'Notícia',
        'toolbarOptions' => [['header' => [1, 2, false]], 'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', ['indent' => '-1'], ['indent' => '+1']],
        'editSource' => true,
        ])
    @endIf

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Imagem',
    ])

    @formField('block_editor', [
        'withoutSeparator' => true,
        'label' => 'Notícia',
        'blocks' => ['paragraph', 'image', 'paragraph_image', 'quote'],
    ])

@stop
