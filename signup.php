<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Log In</title>
  </head>
  <body>
    <form action="#" method="post">
      <div class="container">
        <div class="split left">
          <div class="message">
            <img src="images/new.png" alt="Image" />
            <h1>Welcome Back!</h1>
            <h2>Please SignUp to access the world of magic!</h2>
          </div>
        </div>

        <div class="split right">
          <div class="information">
            <h1>Let's get started</h1>
            <hr />

            <div class="details">
              <label for="username">Username</label><br />
              <input
                type="text"
                name="username"
                id="username"
                placeholder="Username"
              /><br /><br />

              <label for="password">Password</label><br />
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
              /><br /><br />

              <label for="cpassword">Confirm Password</label><br />
              <input
                type="password"
                name="cpassword"
                id="cpassword"
                placeholder="Confirm Password"
              /><br /><br />

              <button type="submit" name="signup">Sign Up</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
  <?php
  
    $con = mysqli_connect("localhost", "root", "", "project");

    if(isset($_POST["signup"])){
      $username = $_POST["username"];
      $password = $_POST["password"];
      $cpassword = $_POST["cpassword"];

      if($password == $cpassword){
        mysqli_query($con, "insert into data values('$username', '$password')");
        header("Location: login.php");
      } else {
        echo '<script>alert("Password Mismatch")</script>';
      }

      

    }

  ?>
</html>
