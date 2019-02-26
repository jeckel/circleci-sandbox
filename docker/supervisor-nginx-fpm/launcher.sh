#!/usr/bin/env sh
# Create Symfony directory for generated files
mkdir -p /var/www/project/var/cache/prod && chmod 777 -R /var/www/project/var/cache
mkdir -p /var/www/project/var/log && chmod 777 -R /var/www/project/var/log
chmod 777 -R /var/www/project/public/document
chmod 777 -R /var/www/project/public/image

# Launch supervisor
/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
