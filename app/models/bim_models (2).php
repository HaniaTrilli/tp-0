<?php
class BmiModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function calculateBmi($weight, $height) {
        $heightInMeters = $height / 100;
        $bmi = $weight / ($heightInMeters * $heightInMeters);

        // حفظ النتيجة في قاعدة البيانات
        $stmt = $this->conn->prepare("INSERT INTO users_bmi (weight, height, bmi) VALUES (?, ?, ?)");
        $stmt->bind_param("ddd", $weight, $height, $bmi);
        $stmt->execute();
        $stmt->close();

        return $bmi;
    }

    public function __destruct() {
        $this->conn->close();
    }
}
?>
