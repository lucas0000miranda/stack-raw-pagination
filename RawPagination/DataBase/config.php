<?php
/*
 *  This file is where you set your DATA BASE credentials
 *
 * Run docker inspect command for check the MYSQL CONTAINER HOST
 *
 * Recommended: Set password empty
 *
 * WARNING: Always set USER as root
 */

const HOST = '172.28.0.2'; //This changes when you run the docker-compose
const USER = 'root';
const PASSWORD = '';
const DB = 'my_db';
