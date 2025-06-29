#!/bin/bash

# Exit immediately if a command exits with a non-zero status
set -e

echo "=== [Composer Hook] Starting prebuild hook ==="

# Install Composer if not already available
if ! command -v composer &> /dev/null; then
  echo "[Composer Hook] Composer not found. Installing..."
  curl -sS https://getcomposer.org/installer | php
  sudo mv composer.phar /usr/local/bin/composer
else
  echo "[Composer Hook] Composer is already installed at $(which composer)"
fi

# Ensure we're in the correct app directory
cd /var/app/staging

# Install PHP dependencies
echo "[Composer Hook] Running composer install..."
composer install --no-dev --prefer-dist --optimize-autoloader

echo "=== [Composer Hook] Completed successfully ==="



