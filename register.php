<?php
session_start();
include 'config.php';

if(isset($_POST['register'])) {
  $uname = $_POST['uname'];
  $psw = $_POST['psw'];
  $conpsw = $_POST['conpsw'];

  if(empty($uname) || empty($psw) || empty($conpsw)) {
    header("Location:register.php?Empty=Please fill out blanks fields");
  } else {
    if($psw !== $conpsw) {
      header("Location:register.php?Mismatch=Passwords do not match");
    } else {
      $sql = "select * from log_reg where uname='$uname';";
      $result = mysqli_query($connect, $sql);
      if(mysqli_fetch_assoc($result)) {
        header("Location:register.php?Exist=Username already exists");
      } else {
        $sql = "insert into log_reg(uname, password, confirmpass) values('$uname', '$psw', '$conpsw');";
        $result = mysqli_query($connect, $sql);
        if($result) {
          header("Location:register.php?Register=You have successfully registered");
        } else {
          echo "Registration failed " . mysqli_error($connect);
        }
      }
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
body {
  margin-top: 15%;
  font-family: Arial, Helvetica, sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
}

form {
  border: 3px solid #f1f1f1;
  width: 50%;
  
}

form h2 {
  text-align: center;
  padding: 10px 15px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;

}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  padding: 10px 18px;
  background-color: #f44336;
}
button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
</head>
<body>
  
  <form action="" method="post">
    <h2>Registration Form</h2>
    <?php
      if(@$_GET['Empty']) {
    ?>
    <div style="color: red; text-align:center;"><?php echo $_GET['Empty']; ?></div>
    <?php
      }
    ?>

  <?php
      if(@$_GET['Mismatch']) {
    ?>
    <div style="color: red; text-align:center;"><?php echo $_GET['Mismatch']; ?></div>
    <?php
      }
    ?>

  <?php
      if(@$_GET['Exist']) {
    ?>
    <div style="color: red; text-align:center;"><?php echo $_GET['Exist']; ?></div>
    <?php
      }
    ?>

  <?php
      if(@$_GET['Register']) {
    ?>
    <div style="color: blue; text-align:center;"><?php echo $_GET['Register']; ?></div>
    <?php
      }
    ?>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">
      
      <label for="psw"><b>Confirmed Password</b></label>
        <input type="password" placeholder="Confirm Password" name="conpsw">

      <button type="submit" name="register">Register</button>
      <p>Already have an account? <a href="loginform.php">Login here</a></p>
    </div>
  </form>

</body>
</html>
