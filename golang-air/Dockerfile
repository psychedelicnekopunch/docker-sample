# https://hub.docker.com/_/golang
FROM golang:1.19

# WORKDIR /var/www/html

# ENV export GO111MODULE=on
# RUN export GO111MODULE=on

RUN go install github.com/cosmtrek/air@latest

# COPY ./app /var/www/html

# RUN go version
# RUN go run main.go

CMD ["air", "-c", ".air.toml"]
