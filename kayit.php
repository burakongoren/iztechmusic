<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iytemuzik-members";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

class Student{
    protected $student_id;
    protected $department;
    protected $grade;
    protected $name;
    protected $phone_input;
    protected $receipt;
    protected $checkbox;

    public function __construct($student_id, $department, $grade, $name, $phone_input, $receipt, $checkbox)
    {
        $this->student_id = $student_id;
        $this->department = $department;
        $this->grade = $grade;
        $this->name = $name;
        $this->phone_input = $phone_input;
        $this->receipt = $receipt;
        $this->checkbox = $checkbox;
    }

    public function addStudent()
    {
        global $conn;
        $sql = "INSERT INTO members VALUES('$this->student_id', '$this->department', '$this->grade', '$this->name', '$this->phone_input', '$this->receipt', '$this->checkbox')";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.html");
            
        } else {
            echo "<script> alert('Bu öğrenci numarası zaten kayıtlı, lütfen öğrenci numaranızı kontrol edin.'); </script>";
        }
    }
}

if (isset($_POST["submit"])) {
    $student_id = $_POST["student_id"];
    $department = $_POST["department"];
    $grade = $_POST["grade"];
    $name = $_POST["name"];
    $phone_input = $_POST["phone_input"];
    $receipt = $_POST["receipt"];
    $checkbox = $_POST["checkbox"];
    $student = new Student($student_id, $department, $grade, $name, $phone_input, $receipt, $checkbox);
    $student->addStudent();
}
mysqli_close($conn);
?>