<?php


class  MyDb {


    private $connection;

    function __construct()
    {
        $this->open_connection();
    }

    public function open_connection()
    {


        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$this->connection) {
            die("Database connection failed:" . mysqli_error($this->connection));


        } else {

            $db_select = mysqli_select_db($this->connection, DB_NAME);
            if (!$db_select) {
                die("Database selection failed:" . mysqli_error($this->connection));
            }
        }
    }

    public function close_connection()
    {
        if (isset($this->connection)) {
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }

    public function query($sql)
    {

        $result = mysqli_query($this->connection, $sql);
        $this->confirm_query($result);
        return $result;
    }

    public function fetch_assoc($result)
    {
        return mysqli_fetch_assoc($result);
    }

    public function affected_rows()
    {
        return mysqli_affected_rows($this->connection);
    }

    public function confirm_query($result)
    {
        if (!$result) {
            die("db query failed:" . mysqli_error($this->connection));
        }
        return $result;
    }

}

$db = new MyDb();
//$db->close_connection();
//$db-> open_connection; ///step we don't need it as we define up function construct







?>