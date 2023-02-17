<?php
include "server.php";
class Product
{
    private $conn;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->conn = new mysqli($servername, $username, $password, $dbname);
    }

    public function delete($selected)
    {
        foreach ($selected as $student_id) {
            $sql = "DELETE FROM member WHERE student_id='".$student_id."'";
            $result = $this->conn->query($sql);
        }

        $this->conn->close();
    }
}

if (isset($_POST['delete'])) {
    $product = new Product($servername, $username, $password, $dbname);
    $selected = $_POST['selected'];
    $product->delete($selected);
}

header("Location:memberlist.php");
?>
