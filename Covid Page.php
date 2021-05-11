<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
    
    input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;

    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 40px;
    cursor: pointer;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  input[type=submit]:hover {
    background-color: #45a049;
    

  }
div {
  margin-top: 60px;
opacity: 1.0;

 border-radius: 20px;
 
 background-color: #f2f2f2;
 background-image: url('cool-background3.png');
 background-size: auto;
 padding: 20px;
}
.header {
  background-image: url('cool-background.png');
  width: 40%;
  font-family: 'Niconne';
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 border-radius: 20px;
 background-size: auto;
}
.fontstyle{
  width: 80%;
  font-size: 15rem;
      text-align: center;
      height:10%;
      line-height: 9vh;
      color: #fcedd8;
      background: #d52e3f;
      font-family: 'Niconne';
      font-weight: 70px;
      text-shadow: 5px 5px 0px #eb452b, 
                  10px 10px 0px #efa032, 
                  15px 15px 0px #46b59b, 
                  20px 20px 0px #017e7f, 
                  25px 25px 0px #052939, 
                  30px 30px 0px #c11a2b, 
                  35px 35px 0px #c11a2b, 
                  40px 40px 0px #c11a2b, 
                  45px 45px 0px #c11a2b;
}
body {
  background-image: url('cool.png');
  background-size: auto;
}
@media (max-width: 480px) {
    body {
        background-image: url('cool.png');
    }
}

@media (min-width: 481px) and (max-width: 1024px) {
    body {
        background-image: url('cool.png');
    }
}
</style>
</head>
<body>
<br>
<br>
<center>
  <div class="header"><h1>Covid19 Tracker</h1></div>

<div>

<h2>Get latest Updates of Covid19 about States and Union Territories of India</h2>

<form action="Covid live.php" method="post">
  <label for="cars"><strong> <h3>Choose  Location </h3> </strong></label>
  
  <select name="place">
    <option value="Maharashtra"><b>Maharashtra</b></option>
    <option value="Kerala">Kerala</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Delhi">Delhi</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="West Bengal">West Bengal</option>
    <option value="Odisha">Odisha</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Chhattisgarh">Chhattisgarh</option>
    <option value="Telangana">Telangana</option>
    <option value="Haryana">Haryana</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Bihar">Bihar</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Punjab">Punjab</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Goa">Goa</option>
    <option value="Puducherry">Puducherry</option>
    <option value="Tripura">Tripura</option>
    <option value="Manipur">Manipur</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Ladakh">Ladakh</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
    <option value="Lakshadweep">Lakshadweep</option>
        
  
  </select>
  
  <br> <br>
  <input type="submit" value="Check">
</form>
</div>
</center>
</body>
</html>
