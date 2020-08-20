<?php


class login
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:localhost=host;dbname=TextileCompany",$username = "root",$password="");

    }

    public function login($username,$password)
    {
        $sql = $this->conn->prepare("SELECT user_id FROM login WHERE username='$username' AND password = '$password'");
        $sql->execute();
        if($sql->rowCount()>0)
        {
            $row = $sql->fetch();
            return $row[0];
        }
        else{
            return false;
        }
    }


    public function signup($username,$password)
    {
        $sql = $this->conn->prepare("INSERT INTO login(username,password) VALUES('$username','$password')");
        $sql->execute();
    }


}

?>