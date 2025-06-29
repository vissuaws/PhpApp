#!/bin/bash

# Check if composer is available
if ! command -v composer &> /dev/null; then
  echo "Installing Composer..."
  curl -sS https://getcomposer.org/installer | php
  mv composer.phar /usr/local/bin/composer
fi

# Run Composer install
composer install --no-dev
 


