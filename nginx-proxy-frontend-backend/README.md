
## Getting Started

```bash
$ sudo vi /etc/hosts
```


### /etc/hosts

```bash
127.0.0.1 docker.sample api.docker.sample
```


### docker-compose up

```bash
# nginx-proxy
$ cd /path/to/docker-sample/nginx-proxy-frontend-backend/nginx-proxy
$ docker-compose up

# backend
$ cd /path/to/docker-sample/nginx-proxy-frontend-backend/backend
$ docker-compose up

# frontend
$ cd /path/to/docker-sample/nginx-proxy-frontend-backend/frontend
$ docker-compose up
```


## URL

### access

* http://docker.sample (frontend)
* http://api.docker.sample (backend)


### access to api.docker.sample from frontend via cURL

* http://docker_sample_api
