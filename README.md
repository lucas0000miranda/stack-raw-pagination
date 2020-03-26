# stack-raw-pagination
This is a stack pagination. It's RAW. That means that it does not use any frameworks.

## Setup

### Pre-requisites:

* Docker
* docker-compose

#### About Docker

Install Docker for your platform.

* Mac: https://store.docker.com/editions/community/docker-ce-desktop-mac
* Windows: https://store.docker.com/editions/community/docker-ce-desktop-windows
* Linux: Please see your distributions package management system

#### About docker-compose

Install docker-compose for your platform.

* Mac: Included with Docker
* Windows: Included with Docker
* Linux: Please see your distributions package management system

> **Note:** _If the file already exists, add the missing keys._

> **Note:** _Make sure you your have the variables $COMPOSER_HOME and $GITHUB_TOKEN exported in your CLI of your preference._

### Installation

First we need to clone the project.

```bash
cd ~/code # or whatever directory you keep your projects in

git clone git@github.com:lucas0000miranda/stack-docker-apache.git
cd stack-docker-apache
```

Next we up the project:

```bash
docker-compose up
```

Then we copy the IpAddress from MySql container, to it you can type:

```bash
docker ps
docker inspect container_id | grep -i IPAddress
```

Set the ip address in the config in ```stack-raw-pagination/RawPagination/DataBase/config.php```

```bash
const HOST = ipAddress from mysql;
const USER = 'root';
const PASSWORD = '';
const DB = 'my_db';
```

Run the following sql queries:
```bash
CREATE TABLE `bdr` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(12) NOT NULL,
    `picture` VARCHAR(100),
    PRIMARY KEY (`id`)
) COLLATE='utf8_general_ci' ENGINE=InnoDB;

INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Lucas', 'lucas.dev@em.com.br', '76512953632', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Talita', 'Talita.wifw@em.com.br', '4283929383', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Nalva', 'nalva.mom@em.com.br', '5674342323', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Elias', 'elias.dad@em.com.br', '9803434123', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Wilson', 'wilson.inlaw@em.com.br', '5432432400', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Wanderlea', 'dona.wandi@em.com.br', '2623653624', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Tiago Domingos', 'dom.mir@em.com.br', '35473563665', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Tadeu Elias', 'tadeu.elias@em.com.br', '425352345325', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Aline Oliveira', 'aline.nevisc@em.com.br', '252352526', '');

 INSERT INTO `bdr` (`name`, `email`, `phone`, `picture`)
 VALUES ('Carolina ', 'vovo.carol@krol.com.br', '42352352352', '');

```

You are already to run in the browser!

```bash
http://localhost:8000/pagination.php
```
