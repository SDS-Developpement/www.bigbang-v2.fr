## http://www.bigbang-v2.fr/

## Table des matières
1. [Serveur de base de données](#serveur-de-base-de-données)
2. [phpMyAdmin](#phpmyadmin)
3. [webserver](#webserver)
4. [Docker](#docker)


***
### Serveur de base de données
Image : mysql:5.7.42

```
MYSQL_ROOT_PASSWORD: motdepasseroot
MYSQL_DATABASE: bigbang_db
MYSQL_USER: bigbang_user
MYSQL_PASSWORD: luu2xZ9N0tBJW3b
```

***
# phpMyAdmin
Image : phpmyadmin:5.2.1
```
http://localhost:8180/
```

***
# webserver
Image : php:7.4.33-apache
```
http://localhost:8080/
```


***
# Docker

```
docker-compose -p "www_bigbang-v2_fr" up -d
docker-compose down
docker-compose build --no-cache 
```