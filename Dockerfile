FROM hacklab/wordpress
MAINTAINER Rich Hildred <rhildred@wlu.ca>

COPY wp-config.php /var/www/html/wp-config.d
COPY do_chown.sh /docker-entrypoint-extra/
RUN mkdir -p /tmp/data
COPY 2021.zip /tmp/data
COPY enhanced-category-pages /var/www/html/wp-content/plugins/



