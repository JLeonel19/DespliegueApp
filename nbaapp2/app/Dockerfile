FROM ubuntu

RUN apt update && apt upgrade -y
RUN DEBIAN_FRONTEND="noninteractive" TZ="America/New_York" apt install -y tzdata 
RUN apt install -y apache2 php supervisor libapache2-mod-php php-mysql wget supervisor unzip

RUN mkdir -p /var/www/web/NBASTORE.com
RUN chmod -R 755 /var/www/web/NBASTORE.com

COPY apache.conf /etc/apache2/sites-available/NBASTORE.conf
COPY /NBASTORE /var/www/html/NBASTORE.com
COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN /bin/sh -c a2ensite NBASTORE.conf
RUN /bin/sh -c a2dissite 000-default.conf

EXPOSE 80

CMD ["/usr/bin/supervisord"]



