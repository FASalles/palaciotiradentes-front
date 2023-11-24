@extends('twill::layouts.form')

@section('contentFields')

    @formField('wysiwyg', [
        'name' => 'text',
        'label' => 'Texto',
        'toolbarOptions' => [['header' => [1, 2, false]], 'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', ['indent' => '-1'], ['indent' => '+1']],
        'editSource' => true,
    ])

    @formField('input', [
        'name' => 'place',
        'label' => 'Local',
    ])

    @formField('date_picker', [
        'name' => 'event_date_timezone',
        'label' => 'Data e hora do evento',
        'minDate' => '2000-01-01 12:00',
        'maxDate' => '2100-12-31 12:00',
        'time24Hr' => true
    ])

    @formField('time_picker', [
        'name' => 'event_time_end',
        'label' => 'Horário de Encerramento',
        'time24Hr' => true,
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Imagem',
    ])
@stop
