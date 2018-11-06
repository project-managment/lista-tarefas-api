# API do Web App


## Como executar o projeto no PHP-Laravel

**Antes de iniciar**


Antes de continuar, certifique-se que o computador tem `docker-compose` instalado na sua máquina:

```sh
docker-compose --version
```

Se o computador não tem `docker-compose` instalado, utilize o script `install-docker-compose.sh`:

```sh
./install-docker-compose.sh
```

Feche e reabra seu terminal, e execute novamente:

```sh
docker-compose --version
```


**1. Primeiro, clone o repositório para sua máquina**

```sh
git clone https://github.com/project-managment/lista-tarefas-api/
```


**2. Execute a API da aplicação**

_execute antes da 1a execução_

```sh
./deploy.sh
```

_execute a API_

```sh
docker-compose up
```
**3. Possíveis erros**
 * Caso apresente erro ao tentar modificar o arquivo `storage/logs/lumen.log` remova esse arquivo para que o Docker crie novamente o arquivo com as permissões necessárias


**4. Como testar**
 *docker -compose exec app php artisan db:seed lista-tarefas-api
 *localhost:8000
