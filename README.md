# Palacio tiradentes

## Migração da aplicação legado

Restore do banco da aplicação legado, supondo que o arquivo é `palacio_backup.sql` e o banco de dados no mysql seja `palacio_tiradentes_db`.

```
mysql -u root palacio_tiradentes_db < palacio_backup.sql
```

Após o banco da nova aplicação estiver populado, são necessários os seguintes passos 

- Rodar o comando `php artisan storage:link`
- Substituir a pasta `<projeto_antigo>/wp-content/uploads` pela pasta `<projeto_novo>/storage/app/public/uploads`
