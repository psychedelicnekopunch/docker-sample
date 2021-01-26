# https://hub.docker.com/_/nginx
FROM nginx:alpine

WORKDIR /var/www/html

COPY . /var/www/html

RUN chmod 744 bin/sample

CMD [ "bin/sample" ]
