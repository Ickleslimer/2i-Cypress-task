<?php
# Include HTML static file nav.html
include ( 'nav.html' ) ;


# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();

  # Check for a first name.
  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  { $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

  # Check for a last name.
  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name.' ; }
  else
  { $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }

  # Check for an email address:
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

  # Check for an age.
  if (empty( $_POST[ 'age' ] ) )
  { $errors[] = 'Please enter your age.' ; }
  else
  { $age = mysqli_real_escape_string( $link, trim( $_POST[ 'age' ] ) ) ; }

    # Check for an address.
    if (empty( $_POST[ 'address' ] ) )
    { $errors[] = 'Please enter your address.' ; }
    else
    { $address = mysqli_real_escape_string( $link, trim( $_POST[ 'address' ] ) ) ; }

      # Check for a contact number.
  if (empty( $_POST[ 'phone' ] ) )
  { $errors[] = 'Please enter a contact number.' ; }
  else
  { $phone = mysqli_real_escape_string( $link, trim( $_POST[ 'phone' ] ) ) ; }


  # On success register user inserting into 'users' database table.
  if ( empty( $errors ) ) 
  {
    $sql = "INSERT INTO 2itask (`first_name`, `last_name`, `email`, `age`, `address`, `contact_number`) VALUES ('$fn', '$ln', '$e', '$age', '$address', '$phone');";
    $result = @mysqli_query ( $link, $sql ) ;
    if ($result)
    { echo '<script type="text/javascript">
        window.onload = function () { alert("Data recieved.") } 
         </script>'; }
  
    # Close database connection.
    mysqli_close($link); 

    exit();
  }
  # Or report errors.
  else 
  {
    echo '<div class="alert alert-secondary" role="alert">
			<h4 class="alert-heading" id="err_msg">The following error(s) occurred:</h4>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo '</div>';
    # Close database connection.
    mysqli_close( $link );
  }  
}
?>
  
<html lang="en">
<head>
  <style>
        .center {
        margin: auto;
        width: 60%;
        padding: 10px;
        text-align:center;
        float:center;
        }
    </style>
</head>
<body>
  <div class = "center">
    <h1>Cypress Task data form</h1>
	<h2>Fill the boxes below</h2>
<form action="webform.php" method="post">
<p>
<label>First Name:</label> <br> <input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"><br>
<label>Last Name: </label> <br> <input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"><br>
<label>Email Address: </label> <br> <input type="text" name="email" size="20" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"><br>
<label>Age </label> <br> <input type="text" name="age" size="20" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>"><br>
<label>Address: </label> <br> <input type="text" name="address" size="20" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>"><br>
<label>Contact number: </label> <br> <input type="text" name="phone" size="20" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>"><br>
<input type="submit" value="Register">
</p>
      </div>

</body>
</html>