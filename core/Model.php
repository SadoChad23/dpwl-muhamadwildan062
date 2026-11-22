<?php
class Model
{
    protected $db;

    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "db_rental_mobil";
        $dbport = 3306;

        $this->db = new mysqli(
            $dbhost,
            $dbuser,
            $dbpass,
            $dbname,
            $dbport
        );

        if ($this->db->connect_error) {
            die("Koneksi database gagal: " . $this->db->connect_error);
        }
    }
}