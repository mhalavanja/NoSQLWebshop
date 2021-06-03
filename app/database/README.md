## Upute za instalaciju mongoDB na Ubuntu Bionic (mongoDB ver. 3.6.3)

Updateaj sve pakete:
$ sudo apt update && sudo apt upgrade -y

Instaliraj mongoDB:
$ sudo apt install mongodb

Provjeri instalaciju:
$ sudo systemctl status mongodb


## Upute za instalaciju PHP drivera za mongoDB
Instaliraj ekstenziju za PHP (potrebno za instalaciju PHP drivera za mongoDB):
$ sudo apt-get install php-pear
$ sudo apt install php-dev

Instaliraj PHP driver za mongoDB:
$ sudo pecl install mongodb

Dodaj ekstenziju u php.ini:

> > You should add "extension=mongodb.so" to php.ini
> > $ sudo gedit /etc/php/7.2/apache2/php.ini

$ php --ri mongodb | grep version
MongoDB extension version => 1.9.1
libbson bundled version => 1.17.4
libmongoc bundled version => 1.17.4
libmongocrypt bundled version => 1.0.4

Restartaj apache2:
$ sudo systemctl restart apache2


##Upute za inicijalno punjenje lokalne mongoDB baze

Pokrenite skriptu load_mongodb.php. Skripta ce napuniti bazu sa hardcodiranim vrijednostima iz documents.php.
Ukpuno je 10 usera.
Sifre u plain textu za usere se mogu vidjeti u documents.php fileu.
