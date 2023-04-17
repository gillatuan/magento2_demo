Configure vhost for Apache
- /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
- /Applications/MAMP/conf/apache/original/extra/httpd-vhosts.conf

1. Download magento repo at https://github.com/magento/magento2/tree/2.4.3-patch-34528

2. Run command: 
  - composer install
  - composer config repositories.data-migration-tool git https://github.com/magento/data-migration-tool
  - composer require magento/data-migration-tool:dev-2.4-develop
  - bin/magento setup:install \
    --base-url="http://magento2.local:8888" \
    --db-host="localhost" \
    --db-name="magento2" \
    --db-user="root" \
    --db-password="root" \
    --admin-firstname="admin" \
    --admin-lastname="admin" \
    --admin-email="admin@admin.com" \
    --admin-user="admin" \
    --admin-password="admin123" \
    --language="en_US" \
    --currency="USD" \
    --timezone="America/Chicago" \
    --use-rewrites="1" \
    --search-engine="elasticsearch7" \
    --elasticsearch-host="127.0.0.1" \
    --elasticsearch-port="9200"
