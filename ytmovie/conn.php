<?php
class connec{
    public $username = "root";
    public $password = "";
    public $server_name = "localhost";
    public $dbname = "movie_ticket_booking";

    public $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->server_name, $this->username, $this->password ,$this->dbname);
        if($this->conn->error)
        {
            die("connection failed");
        }
        /*else
        {
            echo "connected";
        }*/
    }
    function select_all($table_name)
    {
        $sql = "SELECT * FROM $table_name";
        $result = $this->conn->query($sql);
        return $result;
    }

    function select_movie($table_name, $date)
    {
        if($date == "comingsoon")
        {
        $sql = "SELECT * FROM $table_name where rel_date > now()";
        $result = $this->conn->query($sql);
        return $result;
        }
        else{
            $sql = "SELECT * FROM $table_name where rel_date <now()";
            $result = $this->conn->query($sql);
            return $result;
        }
    }


    function select($table_name, $id)
    {
        $sql = "SELECT * FROM $table_name where id = $id";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>