@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
    'name' => 'description',
    'label' => 'Descrição',
    'maxlength' => 100
    ])

    @formField('wysiwyg', [
    'name' => 'text',
    'label' => 'Texto',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ],
    'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered',
    [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'editSource' => true,
    ])

    @formField('date_picker', [
    'name' => 'event_date',
    'label' => 'Data do evento',
    'minDate' => '2000-01-01 12:00',
    'maxDate' => '2100-12-31 12:00'
    ])

    @formField('medias', [
    'name' => 'cover',
    'label' => 'Imagem',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])
@stop