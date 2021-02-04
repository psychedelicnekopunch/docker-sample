# https://hub.docker.com/_/nginx

# FROM nginx:latest
FROM nginx:1
# RUN cd /usr/share/nginx/html
# RUN mkdir prod
# RUN mkdir -p /usr/share/nginx/html/prod
# COPY . /usr/share/nginx/html/prod
RUN mkdir -p /var/www/html
COPY . /var/www/html
COPY nginx.conf /etc/nginx/conf.d/default.conf
