<?php
//unable warnings
ini_set('display_errors','on');

class Connection
{
    public function __construct(string $host, string $user, string $password, string $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
    }

    public function getConnection() : mysqli
    {
        try {
            $conn = mysqli_connect($this->host, $this->user, $this->password, $this->db);
        } catch (Exception $exception) {
            $exception->getMessage();
        }

        return $conn;
    }

    public function getByRow(string $query, string $row): array {
        $mysqli = $this->getConnection();
        $mysqlResult = $mysqli->query($query);
        $response = [];

        while ($rows = mysqli_fetch_array($mysqlResult)) {
            if($rows[$row]) {
                $response[] = $rows[$row];
            }
        }

        return $response;
    }

    public function getRow(string $query): array {
        $mysqli = $this->getConnection();
        $mysqlResult = $mysqli->query($query);
        $response = [];

        while ($rows = mysqli_fetch_array($mysqlResult)) {
                $response[] = $rows;
        }

        return $response;
    }
}
