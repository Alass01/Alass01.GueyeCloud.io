# Utilisez une image de base contenant PHP et Apache
FROM php:7.4-apache

# Installez les dépendances nécessaires
RUN apt-get update && \
    apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Activez les extensions PHP nécessaires
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copiez les fichiers de votre application dans le conteneur
COPY . /var/www/html

# Définissez les permissions sur les répertoires de votre application Laravel
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache

# Configurez le document root d'Apache
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Activez le module Apache mod_rewrite
RUN a2enmod rewrite

# Exposez le port 80 pour accéder à votre application Laravel
EXPOSE 80

# Démarrez le serveur Apache lorsque le conteneur est lancé
CMD ["apache2-foreground"]
