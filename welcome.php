


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Log In</title>
</head>
<body>
    <form action="/welcome" method="post">
    <div class="container">
        <div class=" split left">
            <div class="message">
                <img src="images/new.png" alt="Image">
                <h1>Welcome Back!</h1>  
                <h2>Please login to access the world of magic!</h2>
            </div>
              
        </div>
        
        
        
        <div class=" split right">
            <div class="information">
                <h1 id="welcome"> 
    <?php 
    if(isset($_COOKIE["username"])){
        echo "Welcome " . " " . $_COOKIE["username"];
    }    
    ?> 
    </h1>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>

