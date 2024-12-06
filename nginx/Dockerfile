FROM nginx:latest

COPY ./hosts/php1c.local.conf /etc/nginx/conf.d/php1c.local.conf

WORKDIR /data  

VOLUME /data  

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]