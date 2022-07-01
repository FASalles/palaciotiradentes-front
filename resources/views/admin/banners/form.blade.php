@extends('twill::layouts.form')

@section('contentFields')
@formField('input', [
'name' => 'description',
'label' => 'Descrição',
'maxlength' => 100,
])

@formField('wysiwyg', [
'name' => 'text',
'label' => 'Texto',
'toolbarOptions' => [ [ 'header' => [1, 2, false] ],
'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered',
[ 'indent' => '-1'], [ 'indent' => '+1' ] ],
'editSource' => true,
])

@formField('color', [
'name' => 'text_color',
'label' => 'Cor do texto',
])

@formField('input', [
'name' => 'button_text',
'label' => 'Texto do botão',
])

@formField('input', [
'name' => 'button_link',
'label' => 'Link do botão',
])

@formField('medias', [
'name' => 'cover',
'label' => 'Banner',
'note' => 'Also used in listings',
'fieldNote' => 'Minimum image width: 1500px',
])

@stop