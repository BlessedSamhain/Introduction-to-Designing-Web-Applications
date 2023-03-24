FROM nginx:1.17.8-alpine

COPY . /app/
# Copy ścieżka_skąd ścieżka_dokąd
# Dzieki temu plik z konfiguracją zostanie przekopiowany na serwer
# nginx, który zostanie zainstalowany wewnątrz naszego kontera
COPY ./docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf
