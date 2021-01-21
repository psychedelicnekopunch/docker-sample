# FROM nginx:latest
FROM nginx:1
# RUN cd /usr/share/nginx/html
# RUN mkdir prod
# RUN mkdir -p /usr/share/nginx/html/prod
# COPY . /usr/share/nginx/html/prod
RUN mkdir -p /var/www/html/prod
COPY . /var/www/html/prod
COPY nginx.conf /etc/nginx/conf.d/default.conf
