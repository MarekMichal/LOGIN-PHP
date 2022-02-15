<!DOCTYPE html>
<html>
  <style>
    h1 {color: rgb(197, 60, 5)}
    p{color:orangered}
    label{color:red;
      background-color:orange ;}
      body{background-color: rgb(219, 231, 109)}
    </style>
<body>
<form action="logincode.php" method="post">
   
    <div class="container">
      <h1>LOGIN</h1>
      <p><b>Please fill in this form to log in an account.</b></p>
      <hr>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
  
      
  
    
      <button type="submit" class="registerbtn">LOGIN</button>
    </div>
  
    <div class="container signin">
      <p><b>Dont have an account? <a href="REGISTER.html">Sign in</a></b>.</p>
    </div>
  </form>
</body>
</html>