## Para rodar o programa
<ul>
    <li>Instale o PHP 8 e o Composer</li>
    <li>Abra o aplicativo de linha de comando do seu sistema operacional</li>
    <li>Entre na pasta do projeto</li>
    <li>Configure o .env para seu banco de dados Mysql, SQLite ou Postgress</li>
    <li>Execute as linhas abaixo:</li>
</ul>
## Comandos
<ul>
    <li>php artisan migrate</li>
    <li>php artisan db:seed --class=UserSeeder^</li>
    <li>php artisan tinker</li>
    <li>Post::factory()->count(1000)->create()</li>
</ul>