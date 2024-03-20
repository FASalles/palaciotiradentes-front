@twillBlockTitle('Bloco de texto')
@twillBlockIcon('text')
@twillBlockGroup('app')

@formField('wysiwyg', [
    'name' => 'paragraph',
    'label' => 'Notícia',
'toolbarOptions' => [['header' => [1, 2, 3, 4, false]], 'clean', 'bold', 'link', 'italic', 'list-ordered', 'list-unordered', ['indent' => '-1'], ['indent' => '+1']],
])
