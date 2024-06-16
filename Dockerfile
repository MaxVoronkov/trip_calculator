FROM php:8.0-cli

WORKDIR /app

# Встановлюємо необхідні інструменти
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    && apt-get clean

COPY . /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["php", "calculate.php"]
