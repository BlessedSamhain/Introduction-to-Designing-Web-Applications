<?php
// PostgreSQL database credentials
    class DB{
        private $con;
        private $host = 'db';
        private $port = '5432';
        private $dbname = 'mydatabase';
        private $user = 'postgres';
        private $password = 'password';

        //using for creating connection between database
        public function __construct(){
            //database source name - dsn
            $dsn = "pgsql:host=".$this->host.";dbname=".$this->dbname;
            try {
                $this->con = new PDO($dsn, $this->user, $this->password);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "connection successfull";
            } catch(PDOException $e) {
                echo "Connection failed: ".$e->getMessage();
            }
    }
}
