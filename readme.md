# Olá :D

1. Instalar as dependências do projeto com o comando: <br>
 `composer install` 

2. Dentro da pasta app no arquivo index.php, defina o valor das constantes <br> `MARVEL_API_KEY` e `MARVEL_PRIVATE_KEY`

3. Para executar o teste, é necessário definir as contantes <br> `MARVEL_API_KEY` e `MARVEL_PRIVATE_KEY` no método setUp

4. Execute o servidor PHP via linha de comando: <br>
 `php -S localhost:9002 -t ./app .htrouter.php`

5. Execute os testes <br>
`vendor\bin\phpunit tests`

