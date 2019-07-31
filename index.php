<!DOCTYPE html>
<html>
<head>
<title>Register form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
      <form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>REGISTER FORM</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <h1>PERSONAL DETAILS</h1>

    <label for="email"><b>First Name </b></label>
    <input type="text" placeholder="First Name" name="first name" required>

    <label for="email"><b>Last Name </b></label>
    <input type="text" placeholder="Last Name" name="last name" required>

    <label for="date of birth"><b>Date Of Birth</b></label>
    <input type="date" placeholder="date of Birth" name="date of birth" required>

    <label for="address"><b>Address </b></label>
    <input type="text" placeholder="address" name="address" required>

    <label for="Phone Number"><b>Phone Number </b></label>
    <input type="int" placeholder="Phone Number" name="Phone Number" required>

    <label for="Gender"><b>Gender</b></label>
    <input type="text" placeholder="Gender" name="Gender" required>

    <label for="State"><b>State</b></label>
    <input type="text" placeholder="State" name="State" required>

    
    </label>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>



  