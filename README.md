# Sandbox PHP

Cet environnement **Docker** contient **PHP**, **MariaDB** et **PhpMyAdmin** est fonctionne grâce à [Dev Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers), une extension de Visual Studio Code.

La commande pour lancer le serveur interne de PHP (Déjà lancé par Dev Containers): 
```sh
php -S 0.0.0.0:8000 -t public
```

WWW : http://localhost:8000

PhpMyAdmin : http://localhost:8080
  - Serveur: laisser vide
  - Utilisateur : root
  - Mot de passe : mariadb

## Erreurs rencontrées

Dans la console, il y a le message :
```sh
Xdebug: [Step Debug] Could not connect to debugging client. Tried: localhost:9000 (through xdebug.client_host/xdebug.client_port).
```
