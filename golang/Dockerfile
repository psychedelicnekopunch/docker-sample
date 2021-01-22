FROM golang:1
RUN mkdir -p /var/www/html/prod
COPY . /var/www/html/prod

RUN go version
RUN go run /var/www/html/prod/main.go
