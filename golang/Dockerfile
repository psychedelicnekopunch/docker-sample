# https://hub.docker.com/_/golang
FROM golang:1

WORKDIR /var/www/html

COPY ./app /var/www/html

RUN go version
RUN go run main.go
