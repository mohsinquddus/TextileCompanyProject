<?php
require_once("login.php");

class Managerr extends login
{
    private $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = new PDO("mysql:localhost=host;dbname=TextileCompany",$username = "root",$password="");
    }
    public function loadAllData()
    {
        $sql = $this->conn->query("SELECT * FROM recep_send_detail_to_manager");
        $fetchingRow = $sql->fetchAll();
        return $fetchingRow;
    }
    public function loadAllDataCustomer()
    {
        $sql = $this->conn->query("SELECT * FROM customer");
        $fetchingRow = $sql->fetchAll();
        return $fetchingRow;
    }
    public function addCustomer($data)
    {
        $sql = $this->conn->prepare("INSERT INTO customer(customer_name,customer_address,delivery_date,quantity,
    advance_amount,total_price,remaining_amount,order_status,payment_status) VALUES(?,?,?,?,?,?,?,?,?)");
        $sql->execute($data);
    }

    public function deletedOrder($id)
    {
        $sql = $this->conn->prepare("DELETE FROM customer WHERE order_id = ?");
        $sql->execute(array($id));
    }

    public function updateOrder($data)
    {
        $sql = $this->conn->prepare("UPDATE customer SET customer_name = ?,customer_address=?,delivery_date=?,quantity=?
 ,advance_amount=?,total_price=?,remaining_amount=?,order_status=?,payment_status=? WHERE order_id=?");
        $sql->execute($data);
    }

    public function manager_send_detail_to_finance($data)
    {
        $sql = $this->conn->prepare("INSERT INTO manager_send_detail_to_finance(customer_name,customer_address,dilevery_date,quantity,
    advance_amount,total_price,remaining_amount_source,order_status,payment_status) VALUES(?,?,?,?,?,?,?,?,?)");
        $sql->execute($data);
    }
    public function loadAllDataForGateIncharge()
    {
        $sql = $this->conn->query("SELECT * FROM dispatch_send_detail_to_gate_incharge");
        $fetchingRow = $sql->fetchAll();
        return $fetchingRow;
    }
    public function givePermit($id){
        $sql = $this->conn->prepare("UPDATE dispatch_send_detail_to_gate_incharge SET Permit_Out = 'Given'  WHERE order_id =?");
        $sql->execute(array($id));
    }
}
?>