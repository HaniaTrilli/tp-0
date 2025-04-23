function validateForm() {
    var name = document.getElementById('name').value;
    var weight = document.getElementById('weight').value;
    var height = document.getElementById('height').value;
  
    if (name === ""|| weight === "" || height === "") {
      alert("All fields are required.");
      return false;
    }
  
    // لا نسمح بالفاصلة
    if (weight.includes(',') || height.includes(',')) {
      alert("Please use a dot (.) as the decimal separator, not a comma (,).");
      return false;
    }
  
    // التحقق من أن القيم أرقام
    if (isNaN(weight) || isNaN(height)) {
      alert("Weight and Height must be numbers.");
      return false;
    }
  
    return true;
  }