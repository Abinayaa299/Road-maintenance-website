<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  width: 100%;
  align: center;
}

* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.content {
  max-width: 500px;
  margin: auto;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form name="comp" action="complaintconnect.php" method="POST">
<div class="content">
  <div class="container">
    <h1>COMPLAINT DETAILS</h1>
    <p>Please fill in this form to give a complaint.</p>
    <hr>

    <label for="compid"><b>Complaint id</b></label>
    <input type="text" placeholder="Enter id" name="compid" required>
    <label for="street name"><b>Street Name</b></label>
    <input type="text" placeholder="Enter street Name" name="Street_Name" required>
    <label for="Area Name"><b>Area Name</b></label>
    <input type="text" placeholder="Enter Area Name" name="Area_Name" required>
    <label for="District"><b>District Name</b></label><br>
    <input type="text" placeholder="Enter District Name" name="District_Name" required>
	<label for="State"><b>State Name</b></label><br><br>
	<select name="stateslist">
<option value="">Select State</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select><br><br>
    <label for="Zip code"><b>Zip code</b></label>
    <input type="text" placeholder="Enter zip code" name="zip_code" required><br>
	<label for="Complaint type"><b>Complaint type</b></label><br><br>
	<select name="comp_type">
  <option value="Improper Construction">Improper Construction</option>
  <option value="Holes">Holes</option>
  <option value="Need of 2 Way Roads">Need of 2 Way Roads</option>
  <option value="Electrical Problems">Electrical Problems</option>
  <option value="Drains & Gullies">Drains & Gullies</option>
  <option value="Street Lighting">Street Lighting</option>
  <option value="Trees & Plantation">Trees & Plantation</option>
  <option value="Road & Street Signs">Road & Street Signs</option>
  <option value="Traffic Lights & Crossings">Traffic Lights & Crossings</option>
  <option value="Fences and Barriers">Fences and Barriers</option>
  <option value="Faded surface markings">Faded surface markings</option>
  <option value="Dust Bins">Dust Bins</option> 
  </select><br><br>
    <label for="Complaint descrip"><b>Complaint description</b></label><br><br>
     <input type="text" placeholder="Explain your complaint" name="Complaint_description" required>
    <button type="submit" class="registerbtn">Submit</button>
    <button type="reset" class="registerbtn">Cancel</button>
  </div>
  </div>
</form>

</body>
</html>
