FROM golang:1 as golang
# RUN go mod init github.com/psychedelicnekopunch/docker-sample
RUN go get -u github.com/tockins/realize

FROM nginx:1

WORKDIR /var/www/html

COPY --from=golang /go /go
COPY --from=golang /usr/local/go /usr/local/go
COPY . /var/www/html
COPY nginx.conf /etc/nginx/conf.d/default.conf

# CMD [ "realize", "s" ]
CMD [ "bin/dev" ]
