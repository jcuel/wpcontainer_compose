# wpcontainer_compose
## Wordpress container with compose

### this time we will make the same task as in wordpress_containers, but awesomely fast using Docker-Compose!.
### here is some refferenceo of the commands to fillup the yaml.

_Refference:_ https://devhints.io/docker-compose

## Create yaml file
```
root@containerhost:/home/instructor/projects/wpcontainer_compose# nano docker-compose.yml

```
## Launch docker compose

```
root@containerhost:/home/instructor/projects/wpcontainer_compose# docker-compose up -d
Building with native build. Learn about native build in Compose here: https://docs.docker.com/go/compose-native-build/
Creating network "wpcontainer_compose_backend-net" with the default driver
Creating network "wpcontainer_compose_frontend-net" with the default driver
Pulling db (mariadb:)...
latest: Pulling from library/mariadb
83ee3a23efb7: Pull complete
db98fc6f11f0: Pull complete
f611acd52c6c: Pull complete
aa2333e25466: Pull complete
f53ac4b825fd: Pull complete
c20afcf9b055: Pull complete
54c5dc6dcf19: Pull complete
b1c71d744483: Pull complete
863a8cc01d1c: Pull complete
ea6c59f9e205: Pull complete
6aa441240c22: Pull complete
c1fee6e1dead: Pull complete
Digest: sha256:a13b01d9af44097efeca7a3808a524c8052870e59a1eeef074857ba01e70c1f2
Status: Downloaded newer image for mariadb:latest
Pulling backend (adminer:)...
latest: Pulling from library/adminer
ba3557a56b15: Pull complete
4ccf1c569cdb: Pull complete
ec65deac30f6: Pull complete
0a32b6dca15d: Pull complete
c08e12ee6bd8: Pull complete
9606d3207760: Pull complete
7fa05ab621d4: Pull complete
8b3133c328f3: Pull complete
0b7052c04711: Pull complete
58750e9a4300: Pull complete
c0d6ad862f7b: Pull complete
72eaf755091d: Pull complete
70e1deae3eb5: Pull complete
8fd1b11c6a41: Pull complete
f2142adba370: Pull complete
Digest: sha256:a71089fb10f9b130acdaa61cc0b7ff698028534667c6e6a5494e2e5d945cd34a
Status: Downloaded newer image for adminer:latest
Pulling frontend (wordpress:)...
latest: Pulling from library/wordpress
45b42c59be33: Pull complete
a48991d6909c: Pull complete
935e2abd2c2c: Pull complete
61ccf45ccdb9: Pull complete
27b5ac70765b: Pull complete
5638b69045ba: Pull complete
0fdaed064166: Pull complete
e932cec09ced: Pull complete
fbe190145b1c: Pull complete
f747612094ef: Pull complete
300f68c220b1: Pull complete
efd583fc4f80: Pull complete
011e53c9540e: Pull complete
90d05db0a960: Pull complete
5faae26e6219: Pull complete
7bf1209c35d8: Pull complete
527f0104274c: Pull complete
435b4e30e1cf: Pull complete
e3e9c13fe04e: Pull complete
f5bce9c529a8: Pull complete
Digest: sha256:583894369838ecd5fee59532059600b2fbd854b856ee45f8ef220397d8090c64
Status: Downloaded newer image for wordpress:latest
Creating wpcontainer_compose_db_1      ... done
Creating wpcontainer_compose_backend_1 ... done
Creating wpcontainer_compose_frontend_1 ... done

```
## Validate running instances with docker ps
```
root@containerhost:/home/instructor/projects/wpcontainer_compose# docker ps
CONTAINER ID   IMAGE       COMMAND                  CREATED              STATUS              PORTS                    NAMES
e09ce43ecdc8   wordpress   "docker-entrypoint.s…"   About a minute ago   Up About a minute   0.0.0.0:8081->80/tcp     wpcontainer_compose_frontend_1
3373dfb34196   adminer     "entrypoint.sh docke…"   About a minute ago   Up About a minute   0.0.0.0:8080->8080/tcp   wpcontainer_compose_backend_1
24900e7f9e14   mariadb     "docker-entrypoint.s…"   About a minute ago   Up About a minute   3306/tcp                 wpcontainer_compose_db_1

```
## Now let's use docker-compose ps to understand what they really are.

```
root@containerhost:/home/instructor/projects/wpcontainer_compose# docker-compose ps
             Name                           Command               State           Ports
------------------------------------------------------------------------------------------------
wpcontainer_compose_backend_1    entrypoint.sh docker-php-e ...   Up      0.0.0.0:8080->8080/tcp
wpcontainer_compose_db_1         docker-entrypoint.sh mysqld      Up      3306/tcp
wpcontainer_compose_frontend_1   docker-entrypoint.sh apach ...   Up      0.0.0.0:8081->80/tcp
root@containerhost:/home/instructor/projects/wpcontainer_compose#

```
