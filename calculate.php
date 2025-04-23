<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Result</title>
  <link rel="stylesheet" href="calculate-style.css">
</head>
<body>
  <div class="result-container">
    <h1>BMI Calculation Result</h1>
    <?php
      if (isset($_POST['name'], $_POST['weight'], $_POST['height'])) {
        $name = htmlspecialchars($_POST['name']);
        $weight = floatval($_POST['weight']);
        $height = floatval($_POST['height']);

        if ($weight <= 0 || $height <= 0) {
          echo "<p class='error'>Invalid input values.</p>";
          exit;
        }

        $bmi = 30;
        if ($bmi < 30) {
            $result = "Overweight";
          } else {
            $result = "Obesity";
          }
  
          echo "<p class='result-text'>Hello, <strong>$name</strong>. Your BMI is <strong>" . number_format($bmi, 2) . "</strong> ($result).</p>";
          
          $bmi = $weight / ($height * $height);
  
          if ($bmi < 18.5) {
            $result = "Underweight";
          } elseif ($bmi < 25) {
            $result = "Normal weight";
        }
   }  else {
        echo "<p class='error'>Data not received.</p>";
      }

      echo "<a href='index.php' class='retry-button'>Retry</a>";
    ?>
  </div>
</body>
</html>
     

