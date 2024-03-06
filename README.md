Titulo do Projeto : Loja estoque DomPixelShop

Descrição Do Projeto:  Um sistema de Armazenamento de estoque dos produtos, onde tem uma página inicial simples, apenas com uma foto, uma aba no menu cadastrar produto,  que pode cadastrar o nome do produto, a descrição, o preço e a quantidade do produto,  
Quando o produto é cadastrado ele vai para a página Catálogo de produtos, nesta página contém uma tabela onde fica armazenado todos os produtos cadastrados. Cada produto desta pagina contem 3 botões, um para ver o produto, onde mostra os detalhes , um para editar onde possa editar todos os campos do formulário e um para excluir o produto. No botão onde mostra os detalhes do produto pode-se excluir  por ali também .

Como executar o Projeto:
Para rodar o projeto, ele vai com um arquivo .env-example, deve-se tirar o example e deixar só o .env,

Depois tem que rodar o comando composer install, para ele instalar as dependências .

Configurar o nome do banco de dados  no arquivo .env igual ao criado no banco de dados no xampp ou outro.

Depois rodar o php artisan migrate, para ele fazer as migrações.

E por ultimo rodar o php artisan serve para rodar o projeto . 

