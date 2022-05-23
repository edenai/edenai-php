FROM php:7.4-cli 

WORKDIR /edenai-php
COPY . .

# Install Swagger Codegen
RUN apt update
RUN apt install -y default-jre wget
RUN wget https://repo1.maven.org/maven2/io/swagger/swagger-codegen-cli/2.4.27/swagger-codegen-cli-2.4.27.jar -O ../swagger-codegen-cli.jar

# Auto Generate new sdk
RUN java -jar ../swagger-codegen-cli.jar generate  -i swagger.json -c config.json -l php -o .

RUN apt install unzip
RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
RUN HASH=`curl -sS https://composer.github.io/installer.sig`
RUN php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Copy your swagger.json here
# write an edenai-php/edenai/test/Api/.env file

# Install dependencies and test
WORKDIR /edenai-php/edenai
RUN composer install
RUN echo "Run tests"
# RUN ./vendor/bin/phpunit
