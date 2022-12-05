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

<h1>Login</h1>
<ol>
    <li>Deve instalar o ui do Laravel, para isso escreva <pre>composer require laravel/ui</pre> no terminal</li>
    <li>De seguida deve <pre>npm install</pre></li>
    <li>Depois <pre>npm run build</pre></li>
    <li>E por ultimo <pre>npm run dev</pre></li>
</ol>

<h1>BASE DE DADOS</h1>
<p>Para obter a BD seja criada, escreva <pre>php artisan migrate:fresh</pre> (caso já tenha a base de dados criada e alguns utilizadores, para a atualizar deve escrever <pre>php artisan migrate</pre> )</p>