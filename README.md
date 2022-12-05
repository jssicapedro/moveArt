<h1>Instalação</h1>
<ol>
    <li>Deve ter o laragon instalado (tem de ter uma versão igual ou superior á versão 8);</li>
    <li>De seguida, descarregue o repositório e coloque a diretoria na pasta www do laragon;</li>
    <li>Abra o repositório num editor de texto;</li>
    <li>Faça uma cópia do ficheiro .env.example</li>
    <li>Atualize o nome e a palavra-passe da base de dados desse mesmo ficheiro. Guarde-o com o nome ".env" e sem extenção;</li>
    <li>Abra um terminal na pasta onde se encontra o projeto</li>
    <li>Execute "composer update"</li>
    <li>Depois da atualização execute "php artisan key:generate"</li>
</ol>

<h1>BASE DE DADOS</h1>
<p>Para obter a BD seja criada, escreva <pre>php artisan migrate:fresh</pre> (caso já tenha a base de dados criada e alguns utilizadores, para a atualizar deve escrever <pre>php artisan migrate</pre> )</p>


<h1>Login</h1>
<ol>
    <li>Deve instalar o ui do Laravel, para isso execute, no terminal</li>
    <pre>composer require laravel/ui</pre> 
    <li>De seguida deve </li>
    <pre>npm install</pre>
    <li>Depois </li>
    <pre>npm run build</pre>
    <li>E por ultimo </li>
    <pre>npm run dev</pre>
</ol>

<h1>Seeder</h1>
<p>| o Seeder serve para que todos os elementos da BD sejam possíveis de transferir de maquina para maquina. Assim, não é necessário a exportação diária de toda a base de dados</p>
<ol>
    <li>Para criar um Seeder </li>
    <pre>php artisan make:seeder <i>nome do ficheiro</i></pre> 
    <li>Deve então escrever o conteúdo no novo ficheiro criado</li>
    <li>Por fim deve ser chamado o Seeder novo no ficheiro <b>DatabaseSeeder.php</b> </li>
    <pre>public function run()<br>{<br>$this->call([<br>UsersSeeder::class,<br>]);<br>}</pre>
    <li>Para importar para a máquina</li>
    <pre>php artisan db:seed</pre>
</ol>