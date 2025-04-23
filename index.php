<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculator</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js" defer></script>
</head>
<body>
  <div class="container">
    <h1>BMI Calculator</h1>
    <form action="calculate.php" method="post" onsubmit="return validateForm();">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" required placeholder="Enter your weight">
      </div>
      <div class="form-group">
        <label for="height">Height (m):</label>
        <input type="text" id="height" name="height" required placeholder="Enter your height">
      </div>
      <input type="submit" value="Calculate">
    </form>
  </div>
</body>
</html>
