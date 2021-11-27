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
    <form action="auth.php" method="post">
      <div class="container">
        <div class="split left">
          <div class="message">
            <img src="images/new.png" alt="Image" />
            <h1>Welcome Back!</h1>
            <h2>Please login to access the world of magic!</h2>
          </div>
        </div>

        <div class="split right">
          <div class="information">
            <h1>Let's get started</h1>
            <p>
              In case you're new here, <a href="?link=1" name="link1" >&nbsp; Click Here </a> 
              <?php 
                if(isset($_GET['link'])){
                  header("Location: signup.php");
              }
              ?>  
            </p> 
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

              <button type="submit" name="signin">Sign In</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </body>
</html>
