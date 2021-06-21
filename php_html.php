<!DOCTYPE html>
<html>
<head>
<title>PHP HTML Form</title>
</head>
<body>
<h1>PHP HTML Form</h1>
<?php
$nameError = "";
$fname = "";
    $lname = "";
    $presentadd="";
    $permanentadd="";
    $phone="";
    $email="";
    $web="";
    $uname="";
    $pass="";
    
 if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['Firstname'])) {
$nameError = "Value can't be empty";
}
else {
$fname = test_input($_POST['Firstname']);
}
}
    
        
 if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['Lastname'])) {
$nameError = "Value can't be empty";
}
else {
$lame = test_input($_POST['Lastname']);
}
}
    
     if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['presentaddress'])) {
$nameError = "Value can't be empty";
}
else {
$presentadd = test_input($_POST['presentaddress']);
}
}
    
    
   if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['Permanentaddress'])) {
$nameError = "Value can't be empty";
}
else {
$permanentadd = test_input($_POST['Permanentaddress']);
}
}
    
      if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['phone'])) {
$nameError = "Value can't be empty";
}
else {
$phone = test_input($_POST['phone']);
}
}
    
       if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['phone'])) {
$nameError = "Value can't be empty";
}
else {
$phone = test_input($_POST['phone']);
}
}
    
           if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['Email'])) {
$nameError = "Value can't be empty";
}
else {
$email = test_input($_POST['Email']);
}
}
    
         if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['Link'])) {
$nameError = "Value can't be empty";
}
else {
$web= test_input($_POST['Link']);
}
}
    
             if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['username'])) {
$nameError = "Value can't be empty";
}
else {
$uname=test_input($_POST['username']);
}
}
    
    
             if($_SERVER['REQUEST_METHOD'] === "POST") {
if(empty($_POST['password'])) {
$nameError = "Value can't be empty";
}
else {
$pass= test_input($_POST['password']);
}
}

 function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<fieldset>
        <legend>Basic Information</legend>
        <label for="fname">First Name</label>
        <input type="text" name="Firstname"required>
        <span style="color: red"><?php echo $nameError; ?></span><br>
        
        <label for="lname">Last Name</label>
        <input type="text" name="Lastname" required>
    <span style="color: red"><?php echo $nameError; ?></span><br>
        
        Gender:<br>
          <label>
    <input type="radio" name="gender" value="male" required>Male
  </label>
  <label>
    <input type="radio" name="gender" value="female">Female
  </label>
  <label>
    <input type="radio" name="gender" value="other">Other
  </label>
        <br>
        
        
        <label for="DOB">DOB</label>
		 <input type="date" name="DOB" required><br>

		 <label for="Religion">Select Religion</label><br>
			<select name="Religion" required> 
				<option value="islam" name="islam" >islam</option> 
				<option value="hindu" name="hindu" >hindu</option>
                <option value="khristan" name="hindu" >khristan</option>
                <option value="buddha" name="hindu" >buddha</option>
			</select>
			</fieldset>
        
        
			<br>




		<fieldset>
		<legend>Contact Information:</legend>
 

		<label for="presentaddress">Presentaddress:</label>
		<textarea id="presentaddress" name="presentaddress" rows="2" cols="25"></textarea>
             <span style="color: red"><?php echo $nameError; ?></span><br>

		<label for="Permanentaddress">Permanentaddress:</label>
		<textarea id="Permanentaddress" name="Permanentaddress" rows="2" cols="25"></textarea>
             <span style="color: red"><?php echo $nameError; ?></span><br>

		
	    <label for="phone">phone: </label>
		<input type="tel" id="phone" name="phone" >
            <span style="color: red"><?php echo $nameError; ?></span><br>

		<label for="Email">Email: </label>
		<input type="Email" name="Email" required>
            <span style="color: red"><?php echo $nameError; ?></span><br>

		<label for="Link">Personal Website link : </label>
		 <input type="Link" name="Link" >
            <span style="color: red"><?php echo $nameError; ?></span><br>
 
		</fieldset>
        <br>
        <fieldset>
		<legend>Account Information:</legend>
 
        <label for="uname">Username</label>
        <input type="text" name="username" required><br>
		<label for="password">Password</label>
        <input type="password" name="password" required><br>
  
		
 
		</fieldset>
        
        <center><input type="submit" value="submit"></center>
</form>
</body>
</html>