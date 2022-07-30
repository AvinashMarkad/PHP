<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.form{
    text-align: center;
    border: 5px solid black;
    padding: 8px;
    width: 50vw;
    height: 98vh;
    position: relative;
    left: 22vw;

}
.fname{
    position: relative;
    left: -vw;
}
</style>
<?php

$fname=$lname=$mname=$mothername=$gender=$ContactNumber=$AlternateContactNumber=$email=$AdharCardNumber=$CollegeName=$Department=$Qualification=$Date="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $mname = test_input($_POST["mname"]);
    $mothername = test_input($_POST["mothername"]);
    $gender = test_input($_POST["gender"]);
    $ContactNumber = test_input($_POST["ContactNumber"]);
    $AlternateContactNumber = test_input($_POST["AlternateContactNumber"]);
    $email = test_input($_POST["email"]);
    $AdharCardNumber = test_input($_POST["AdharCardNumber"]);
    $CollegeName = test_input($_POST["CollegeName"]);
    $Department = test_input($_POST["Department"]);
    $Qualification = test_input($_POST["Qualification"]);
    $Date = test_input($_POST["Date"]);
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");

?>
<body>
    <div class="form">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div name="head"><h1>Attendance Form</h1></div>
        <div class="fname">
            <label for="fname">Full Name:-</label>
            <input type="text" placeholder="Enter your First Name" name="fname">
        </div>
        <br>
        <div class="fname">
         <label for="lname">Last Name:-</label>
        <input type="text" placeholder="Enter your Last Name" name="lname">
        </div>
    <br>
        <div class="mname">
            <label for="mname">Middle Name:-</label>
            <input type="text" placeholder="Enter your Middle Name" name="mname">
        </div>
        <br>
        <div class="mothername">
            <label for="mothername">Mother Name:-</label>
            <input type="text" placeholder="Enter your Mother Name" name="mothername">
        </div>
        <br>
        <div class="Gender">
            <label for="Gender">Gender:-</label>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
        </div>
        <br>
        <div class="ContactNumber">
        <label for="ContactNumber">Contact Number:-</label>
        <input type="text" placeholder="Enter your Contact Number" name="ContactNumber">
     </div>
     <br>
     <div class="AlternateContactNumber">
        <label for="AlternateContactNumber">Alternate Contact Number:-</label>
        <input type="text" placeholder="Enter your Alternate Contact Number" name="AlternateContactNumber">
     </div>
     <br>
     <div class="email">
        <label for="email">E-mail:-</label>
        <input type="text" placeholder="Enter your E-mail" name="email">
     </div>
     <br>
     <div class="AdharCardNumber">
        <label for="AdharCardNumber">Adhar Card Number:-</label>
        <input type="text" placeholder="Enter your Adhar Card Number" name="AdharCardNumber">
     </div>
     <br>
     <div class="CollegeName">
        <label for="CollegeName">College Name:-</label>
        <input type="text" placeholder="Enter your College Name" name="CollegeName">
     </div>
     <br>
     <div class=" Department">
        <label for=" Department"> Department:-</label>
        <input type="text" placeholder="Enter your  Department Name" name="Department">
     </div>
     <br>
     <div class=" Qualification">
        <label for=" Qualification"> Qualification:-</label>
        <input type="text" placeholder="Enter your  Qualification" name="Qualification">
     </div>
     <br>
     <div class=" Date">
        <label for=" Date"> Date:-</label>
        <input type="text" placeholder="Enter today  Date" name="Date">
     </div>
     <br>
     <div class="btn">
<button type="submit" value="SUBMIT">SUBMIT</button>
     </div>
    </form>
    </div>
    
    <?php
print "$fname <br>";
print "$lname<br>";
print "$mname<br>";
print "$mothername<br>";
print "$gender<br>";
print "$ContactNumber<br>";
print "$AlternateContactNumber<br>";
print "$email<br>";
print "$AdharCardNumber<br>";
print "$CollegeName<br>";
print "$Department<br>";
print "$Qualification<br>";
print  "$Date<br>";
?>

<script>

</script>
</body>
</html>