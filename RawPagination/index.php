<?php

require_once('./DataBase/config.php');
require_once('./DataBase/Connection.php');

$connection = new Connection(HOST, USER, PASSWORD, DB);
