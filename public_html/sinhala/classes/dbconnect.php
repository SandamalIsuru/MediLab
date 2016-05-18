<?php
class Database {

    private $link;
    private $host, $username, $password, $database;

    public function __construct($host, $username, $password, $database){
        $this->host        = $host;
        $this->username    = $username;
        $this->password    = $password;
        $this->database    = $database;

        $this->link = mysqli_connect($this->host, $this->username, $this->password, $this->database)
            OR die("There was a problem connecting to the database.");


        return true;
    }

    public function query($query) {
        $result = mysqli_query($this->link,$query);
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }
	
	public function insert($query) {
        return mysqli_query($this->link,$query)  ;//OR die(mysqli_error($this->link));
    }
	
	public function dbclose() {
        mysqli_close($this->link)
            OR die("There was a problem disconnecting from the database.");
    }

	public function err() {
        return mysqli_error($this->link)  ;
    }
   
}
?>
