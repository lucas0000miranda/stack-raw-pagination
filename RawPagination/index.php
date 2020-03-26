<?php

require_once('./DataBase/config.php');
require_once('./DataBase/Connection.php');

$connection = new Connection(HOST, USER, PASSWORD, DB);

if ($connection->getConnection())
{
    echo "Connection success!"."<br>";
}
    else {
        echo  "Connection Failed";
}

//$myChosenRow = $connection->getDataByRow('select * from bdr', 'email');
//foreach ($myChosenRow as $item) {
//        echo $item."<br>";
//    }

//$myRow = $connection->getRow('select * from bdr');
//foreach ($myRow as $item) {
//    echo $item['email']."<br>";
//}

