spa-angularjs-phalcon
=====================

Single Page Application with AngularJS and Phalcon Micro Framework

Branch -master is an empty boilerplate

To start code
1. Install Phalcon Framework in http://phalconphp.com/en/download

2. Copy paste virtual host definition in vhost-example under files directory or below

<VirtualHost *:80>
        DocumentRoot "/var/www/spa_angular/public"
        ServerName spa_angular
        <Directory /var/www/spa_angular/public>
            Options Indexes FollowSymLinks MultiViews
            # changed from None to FileInfo
            AllowOverride All
            Order allow,deny
            allow from all
            RewriteEngine On

            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteCond %{REQUEST_URI} !/api/
            RewriteRule !\.(js|html|ico|gif|jpg|png|css)$ /index.html

            RewriteCond %{REQUEST_FILENAME} !-fi
            RewriteCond %{REQUEST_URI} /api/
            RewriteRule ^api/(.*)$ api/index.php?_url=/$1 [QSA,L]
        </Directory>
</VirtualHost>

3. Clone repository

Dependencies
Phalcon microframework - http://phalconphp.com/en/download
AngularJS - http://angularjs.org