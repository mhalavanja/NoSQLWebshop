# Upute za mongoDB

## Upute za instalaciju mongoDB na Ubuntu Bionic (mongoDB ver. 3.6.3)

Updateaj sve pakete:

```
$ sudo apt update && sudo apt upgrade -y
```

Instaliraj mongoDB:

```
$ sudo apt install mongodb
```

Provjeri instalaciju:

```
$ sudo systemctl status mongodb
```

## Upute za instalaciju PHP drivera za mongoDB

Instaliraj ekstenziju za PHP (potrebno za instalaciju PHP drivera za mongoDB):

```
$ sudo apt-get install php-pear
$ sudo apt install php-dev
```

Instaliraj PHP driver za mongoDB:

```
$ sudo pecl install mongodb
```

Dodaj ekstenziju u php.ini:

> > You should add "extension=mongodb.so" to php.ini

```
$ sudo gedit /etc/php/7.2/apache2/php.ini
```

```
$ php --ri mongodb | grep version
```

Trebali bi dobiti slican ispis:

```
MongoDB extension version => 1.9.1
libbson bundled version => 1.17.4
libmongoc bundled version => 1.17.4
libmongocrypt bundled version => 1.0.4
```

Restartaj apache2:

```
$ sudo systemctl restart apache2
```

## Upute za inicijalno punjenje lokalne mongoDB baze

Pokrenite skriptu `load_mongodb.php`. Skripta ce napuniti bazu sa hardcodiranim vrijednostima iz `documents.php`.
Ukpuno je 18 usera.
Sifre u plain textu za usere se mogu vidjeti u `documents.php` fileu.

### Kako provjeriti je li skripta napravila posao?

Iz terminala pokrenite lokalnu bazu:

```
$ mongo
```

Odaberite bazu `projekt`:

```
$ use projekt
```

Prikazite sve u kolekciji `users`:

```
$ db.users.find().pretty()
```

### Kako ponovo napuniti bazu sa nekim izmjenjenim vrijednostima?

Dropajte kolekciju `users` iz mongo shella:

```
$ db.users.drop()
```

Ponovo inicijalno napunite bazu prema gornjim uputama.


# Upute za Neo4j

## Upute za instalaciju Neo4j na Ubuntu 20.04 (Neo4j verzija 4.1)

Ažurirajte sve postojeće pakete

$ sudo apt update

Instalacija Neo4j:
$sudo apt install apt-transport-https ca-certificates curl software-properties-common

$curl -fsSL https://debian.neo4j.com/neotechnology.gpg.key | sudo apt-key add -

$sudo add-apt-repository "deb https://debian.neo4j.com stable 4.1"

$sudo apt install neo4j

$sudo systemctl enable neo4j.service

Provjeri instalaciju:

$ sudo systemctl status neo4j.service
 Trebalo bi ispis bit sličan ovome, ključno je da se pojave VELIKE riječi:

  neo4j.service - Neo4j Graph Database
     Loaded: loaded (/lib/systemd/system/neo4j.service; ENABLED; vendor preset: enabled)
     Active: active (RUNNING) since Fri 2020-08-07 01:43:00 UTC; 6min ago
   Main PID: 21915 (java)
      Tasks: 45 (limit: 1137)
     Memory: 259.3M
     CGroup: /system.slice/neo4j.service

Pokretanje u Neo4j u terminalu:

$ cypher-shell

Username i password su "neo4j" (bez navodnika) i pri prvom pokretanju mora se promijeniti password.

## Upute za instalaciju Composera

Za dohvačanje i pokretanje Clienta potreban je Composer.
Prvo dohvačamo fileove i zatim instaliramo naredbama:

$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

$ php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

$ php composer-setup.php

Na kraju uklonimo installer:

$ php -r "unlink('composer-setup.php');"

I provjerimo radi li naredbom

$composer

Na kraju dohvačamo Clienta (moramo vidjeti je li potreban ovaj korak ili može samo iz gita se preuzeti datoteka)

$composer require "graphaware/neo4j-php-client:^4.0"
