<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prototype for PT. Berkat Cipta Logistik</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<script>
function validateForm() {
  var phone_number = document.getElementById("phone_number").value;
  if (phone_number == "") {
    alert("Phone Number must be filled out");
    return false;
  }else{
      var element = document.getElementById("result");
      var number_substr = phone_number.substr(1);
      var link = "https://api.whatsapp.com/send?phone=";
      var format_ind = "62"
      var combo = link + format_ind + number_substr;
      
      element.style.display = "block";
      document.getElementById("link").innerHTML = combo;
  }
}
</script>
<body>
 
<div class="container">
  <h2>Convert Phone Number into Whatsapp Link</h2>
  <div class="card">
    <div class="card-header bg-primary text-white">Header</div>
    <div class="card-body">
        
          <div class="form-group">
            <label for="nama">Phone Number:</label>
            <input type="number" class="form-control" name="phone_number" id="phone_number">
          </div>
          <button type="button" onclick="validateForm()" class="btn btn-primary">Submit</button>
        
        <hr>
        <div id="result" style="display:none;">
            <p>Your Whatsapp Link :</p>
            <p id="link"></p>
        </div>
    </div> 
    <div class="card-footer">
        <p>Name : Feri Andriyanto Sandika</p>
        <p>My Whatsapp : <a href="https://api.whatsapp.com/send?phone=6289668730345">089668730345</a></p>
        <p>Email : <a href="emailto:andikaferi10@gmail.com">andikaferi10@gmail.com</a></p>
    </div>
  </div>
</div>

</body>
</html>
