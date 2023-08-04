#!/bin/bash

# Atualiza a lista de pacotes disponíveis
sudo apt-get update

# Instala as extensões PHP necessárias para o banco de dados
sudo apt-get install -y php-mysql php-pgsql

# Habilita as extensões no php.ini
sudo sed -i 's/;extension=mysqli/extension=mysqli/' /opt/php/8.2.8/ini/php.ini
sudo sed -i 's/;extension=pdo_mysql/extension=pdo_mysql/' /opt/php/8.2.8/ini/php.ini
sudo sed -i 's/;extension=pdo_pgsql/extension=pdo_pgsql/' /opt/php/8.2.8/ini/php.ini

# Reinicia o servidor PHP
sudo service php8.2-fpm restart