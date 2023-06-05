@extends('twill::layouts.form')

@section('contentFields')

    @formField('wysiwyg', [
        'name' => 'text',
        'label' => 'Texto',
        'toolbarOptions' => [['header' => [1, 2, 3, 5, 6, false]], 'bold', 'italic', 'underline', 'strike', 'link', 'image'],
        'maxlength' => 200,
        'editSource' => true,
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
