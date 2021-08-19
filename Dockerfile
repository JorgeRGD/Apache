FROM php:8.0-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
WORKDIR /var/www/html
COPY  /htdocs/login.php /htdocs/login_check.php /htdocs/realizar_registro.php /htdocs/registro.php /htdocs/DBInitializer.php /htdocs/compra.php  /htdocs/index.php /htdocs/transacción.php  /var/www/html/
COPY /htdocs/css /var/www/html/css
COPY /htdocs/flexslider /var/www/html/flexslider
COPY /htdocs/font /var/www/html/font
COPY /htdocs/images /var/www/html/images
COPY /htdocs/js /var/www/html/js
EXPOSE 80

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&\
    a2enmod rewrite &&\
    a2dissite 000-default &&\
    service apache2 restart
