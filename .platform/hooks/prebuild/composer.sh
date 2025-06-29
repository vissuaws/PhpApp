#!/bin/bash

# Safe Composer install and run
if ! command -v composer &> /dev/null; then
  echo "Installing Composer..."
  curl -sS https://getcomposer.org/installer | php
  sudo mv composer.phar /usr/local/bin/composer
fi

composer install --no-dev --prefer-dist --optimize-autoloader




