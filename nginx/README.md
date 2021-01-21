
## Getting Started

```bash
$ cd /path/to/docker-sample/nginx
$ docker-compose up

ctl + c で終了
```


## Log in

```bash
$ docker-compose up
$ docker ps
CONTAINER ID   IMAGE         COMMAND                  CREATED        STATUS          PORTS                  NAMES
ae883db57be2   nginx_nginx   "/docker-entrypoint.…"   20 hours ago   Up 10 seconds   0.0.0.0:8080->80/tcp   nginx_nginx_1

# docker exec -it [NAMES] [choose command language]
$ docker exec -it nginx_nginx_1 /bin/bash
```


## Remove

### CONTAINER

```bash
$ docker ps  -a
CONTAINER ID   IMAGE         COMMAND                  CREATED         STATUS                     PORTS     NAMES
fc961249302f   nginx_nginx   "/docker-entrypoint.…"   8 seconds ago   Exited (0) 5 seconds ago             nginx_nginx_1

# docker rm [NAMES]
$ docker rm nginx_nginx_1
```

### IMAGES

```bash
$ docker images
REPOSITORY    TAG       IMAGE ID       CREATED              SIZE
nginx_nginx   latest    8f81c1e617ed   About a minute ago   133MB
nginx         1         f6d0b4767a6c   9 days ago           133MB

# docker rmi [REPOSITORY] -f
# -f force 強制的に
$ docker rmi nginx_nginx -f
```
