FROM mysql:5.7

ENV MYSQL_ROOT_PASSWORD=root

COPY ./base/nba_store.sql /docker-entrypoint-initdb.d/nba_store.sql
RUN /entrypoint.sh mysqld & sleep 30
EXPOSE 3060




