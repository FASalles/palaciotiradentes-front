@twillRepeaterTitle('Recorte')
@twillRepeaterTrigger('Adicionar novo recorte')
@twillRepeaterGroup('app')

@formField('input', [
    'name' => 'name',
    'label' => 'Nome do site',
    'required' => true,
])

@formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Notícia',
    'required' => true,
])

@formField('input', [
    'name' => 'link',
    'label' => 'Link da notícia',
    'required' => true,
])