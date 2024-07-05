FROM php:8.1

ENV COMPOSER_ALLOW_SUPERUSER=1

# Install system dependencies
RUN apt-get update -y && apt-get install -y --no-install-recommends \
    openssl \
    zip \
    unzip \
    git \
    libpq-dev \
    libonig-dev \
    pkg-config \
    libonig5 \
    libzip-dev && \
    docker-php-ext-install pdo mbstring && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /app

# Copy application code
COPY . .

# Debug: List files in /app directory
RUN ls -la /app
RUN ls -la /app | grep composer.json

# Ensure composer.json exists
RUN if [ ! -f /app/composer.json ]; then echo "composer.json not found!"; exit 1; fi

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader --no-scripts

# Expose port and start the application
EXPOSE 8181

# Enable PHP error reporting for debugging
RUN echo "display_errors = On\nerror_reporting = E_ALL" >> /usr/local/etc/php/conf.d/docker-php-ext-error_reporting.ini

CMD php artisan serve --host=localhost --port=8181



