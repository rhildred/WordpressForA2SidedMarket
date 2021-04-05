FROM hacklab/wordpress
MAINTAINER Rich Hildred <rhildred@wlu.ca>

COPY wp-config.php /var/www/html/wp-config.d
COPY do_chown.sh /docker-entrypoint-extra/



