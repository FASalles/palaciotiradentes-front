# Palacio tiradentes

## Migração da aplicação legado

Restore do banco da aplicação legado, supondo que o arquivo é `palacio_backup.sql` e o banco de dados no mysql seja `palacio_tiradentes_db`.

```
mysql -u root palacio_tiradentes_db < palacio_backup.sql
```

Após o banco da nova aplicação estiver populado, são necessários os seguintes passos 

- Rodar o comando `php artisan storage:link`
- Substituir a pasta `<projeto_antigo>/wp-content/uploads` pela pasta `<projeto_novo>/storage/app/public/uploads`

### Atualização

```
Executar, para o PALACIO TIRADENTES de produção, os itens (1), (2) e (3), sendo executado pelo usuário www-data. Caso seja executado por outro usuário, favor colocar "sudo -u www-data" antes de todos os comandos.

------------------------------------

(1) Executar o comando a partir da pasta de produção do PALACIO TIRADENTES para entrar em modo de manutenção

php artisan down

------------------------------------

(2) Atualizar a versão de produção do DOCIGP. Executar os comandos

Após o 'git pull', rodar os comandos:
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev
php artisan migrate --force
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

Dar permissionamento de owner para a pasta e todos os arquivos internos (Exemplo: sudo chown -R www-data:www-data palaciotiradentes/)

------------------------------------

(3) Executar o comando a partir da pasta de produção do PALACIO TIRADENTES para sair do modo de manutenção

php artisan up
```
