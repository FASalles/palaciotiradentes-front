@extends('twill::layouts.form')

@section('contentFields')


@formField('wysiwyg', [
'name' => 'subject',
'label' => 'Notícia',
'toolbarOptions' => [ [ 'header' => [1, 2, false] ],
'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', 'image',
[ 'indent' => '-1'], [ 'indent' => '+1' ] ],
'editSource' => true,
'maxlength' => 100000,
])

@formField('medias', [
'name' => 'cover',
'label' => 'Imagem',
])

@stop