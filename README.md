
# API-Rest-Laravel

Esse repositório é uma simples API REST desenvolvida com o framework PHP Laravel. Esta API fornece uma interface eficiente e escalável para interação entre sistemas, seguindo os princípios da arquitetura REST.



## Instalação


Clone o repositório:
```bash
  git clone https://github.com/MarcelSecco1/API-Rest-Laravel
```

Use e instale as dependências:
```bash
  composer install
```
Configure o seu .env seguindo o padrão da utilização, caso queira.
Depois, utilize:
```bash
  docker compose up -d
```


## API Endpoints
```markdown
GET /produtos - Retorna todos os produtos cadastrados.

POST /produtos - Cria um novo produtos.

GET /produtos/{id} - Retorna um produto específico.

PUT /produtos/{id} - Altera o produto.

DELETE /produtos/{id} - Deleta o produto.
```