<?php

interface DB {

    public function connect($server, $username, $password);

    public function selectdb($database_name);

    public function close();

    public function error();
}

class dataBaseConnection implements DB {

    private $link;

    public function connect($server, $username, $password) {
        $this->link = mysql_connect($server, $username, $password);
    }

    public function selectdb($database_name) {
        $this->link = mysql_select_db($database_name);
    }

    public function close() {
        return mysql_close($this->link);
    }

    public function error() {
        return mysql_error($this->$link);
    }

}

$MysqlDB = new dataBaseConnection();
$MysqlDB->connect("tulik.home.pl", "tulik", "************************");
$MysqlDB->selectdb('tulik');
mysql_query("SET CHARSET utf8");
mysql_query("SET NAMES `utf8` COLLATE `utf8_polish_ci`");
?>
