<?php
require_once("login.php");

class FinanceOfficer extends login
{
    private $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = new PDO("mysql:localhost=host;dbname=TextileCompany",$username = "root",$password="");
    }
    public function loadAllDatafromMnager()
    {
        $sql = $this->conn->query("SELECT * FROM manager_send_detail_to_finance");
        $fetchingRow = $sql->fetchAll();
        return $fetchingRow;
    }

    public function finance_send_detail_to_dispatch($data)
    {
        $sql = $this->conn->prepare("INSERT INTO finance_send_detail_to_dispatch(customer_name,customer_address,dilevery_date,quantity,order_status,payment_status) VALUES(?,?,?,?,?,?)");
        $sql->execute($data);
    }


}