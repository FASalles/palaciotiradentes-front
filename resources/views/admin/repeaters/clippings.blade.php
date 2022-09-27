@twillRepeaterTitle('Recorte')
@twillRepeaterTrigger('Adicionar novo recorte')
@twillRepeaterGroup('app')

@formField('input', [
    'name' => 'name',
    'label' => 'Fonte',
    'required' => true,
])

@formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Texto',
    'required' => true,
])

@formField('input', [
    'name' => 'link',
    'label' => 'Link',
    'required' => true,
])