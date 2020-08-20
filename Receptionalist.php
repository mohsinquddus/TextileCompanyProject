<?php
require_once("login.php");

class Receptionalist extends login
{
    private $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = new PDO("mysql:localhost=host;dbname=TextileCompany",$username = "root",$password="");
    }
    public function loadAllData()
    {
        $sql = $this->conn->query("SELECT * FROM productsample");
        $fetchingRow = $sql->fetchAll();
        return $fetchingRow;
    }

    public function addSample($data)
    {
        $sql = $this->conn->prepare("INSERT INTO productsample(sample_type,sample_catagory,sample_date,sample_img) VALUES(?,?,?,?)");
        $sql->execute($data);
    }
    public function deletedSample($id)
    {
        $sql = $this->conn->prepare("DELETE FROM productsample WHERE sample_id = ?");
        $sql->execute(array($id));
    }


    public function updatSample($data)
    {
        $sql = $this->conn->prepare("UPDATE productsample SET sample_type = ?,sample_catagory=?,sample_date=?,sample_img=? WHERE sample_id=?");
        $sql->execute($data);
    }
    public function recep_send_detail_to_manager($data)
    {
        $sql = $this->conn->prepare("INSERT INTO recep_send_detail_to_manager(sample_type,sample_catagory,sample_date,sample_image) VALUES(?,?,?,?)");
        $sql->execute($data);
    }


}
?>