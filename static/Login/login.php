<!DOCTYPE html>
<html>

<head>
    <title>Book Recommendation Engine</title>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
   

</head>
<body>
    <div class = "App">
        <div class="bodytitle">
            Book Recommendation Engine
        </div>
        <div>
 
          <div class = "bg-modal" >
            <div class = "modalContentSignup">
              <form action ="../signup.php" method="post" class = "signupForm">
                <input type = "text" placeholder = "Username" name="username" required/>
                <input type = "email" placeholder = "Email" name="email" required/>
                <input type = "password" placeholder = "Password" name="pass" required/>
                <input type = "password" placeholder = "Confirm Password" name="cpass" required/>
                <input type = "submit" class ="loginButton" value="Register"/>
              </form>
              
              <div class = "or"><hr />OR <hr /></div>
             
    
              
              <!-- <div>
                   <span>Log In With Facebook</span> 
                  <button class = "fb">
                    <img src = "../assets/fb.png"></img> 
                    Log In With Facebook
                  </button>
                <button class = "google">
                  <img src = "../assets/fb.png"></img>
                  Log In With Google
                </button>
              </div> -->
              
          <div class = "modalContentLogin">
            <form  action="../authenticate.php" method="post" class = "signupForm" >
              <input type = "text" placeholder = "Username" name="username" required/>
              <input type = "password" placeholder = "Password" name="pass" required/>
              <input type = "submit" class ="loginButton" value="Login"/>
            </form>
        </div>
        </div>
    </div>

</body>
</html>
