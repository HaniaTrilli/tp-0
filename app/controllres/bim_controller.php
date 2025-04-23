<?php
require_once __DIR__ .  '/../models/BmiModel.php';

class BmiController {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            
            $model = new BmiModel();
            $bmi = $model->calculateBmi($weight, $height);
            
            require_once __DIR__ .  '/../views/bmi_result.php';
        } else {
            require_once __DIR__ .  '/../views/bmi_form.php';
        }
    }
}
?>