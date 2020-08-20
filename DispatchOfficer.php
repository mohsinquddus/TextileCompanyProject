<?php
require_once("login.php");

class DispatchOfficer extends login
{
    private $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = new PDO("mysql:localhost=host;dbname=TextileCompany",$username = "root",$password="");
    }
    public function loadAllDatafromFinance()
    {
        $sql = $this->conn->query("SELECT * FROM finance_send_detail_to_dispatch");
        $fetchingRow = $sql->fetchAll();
        return $fetchingRow;
    }
    public function updateDispatch($data)
    {
        $sql = $this->conn->prepare("UPDATE `finance_send_detail_to_dispatch` SET `dilevery_date` = ? WHERE `finance_send_detail_to_dispatch`.`order_id` = ?");
        $sql->execute($data);
    }
    public function updatecustomer($data)
    {
        $sql = $this->conn->prepare("UPDATE `customer` SET `delivery_date` = ? WHERE `customer`.`order_id` = ?");
        $sql->execute($data);
    }
    public function updatefinance($data)
    {
        $sql = $this->conn->prepare("UPDATE `manager_send_detail_to_finance` SET `dilevery_date` = ? WHERE `manager_send_detail_to_finance`.`order_id` = ?");
        $sql->execute($data);
    }

    public function dispatch_send_detail_to_gate_incharge($data)
    {
        $sql = $this->conn->prepare("INSERT INTO dispatch_send_detail_to_gate_incharge(customer_name,customer_address,quantity,order_status,payment_status) VALUES(?,?,?,?,?)");
        $sql->execute($data);
    }



}