<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JeagerPrimus - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
  <link href="assets/fontsawesome/css/all.css" rel="stylesheet">
  <script src="main.js"></script>
</head>

<body>
  <div class="container">


    <br>
    <h2>
      <center>LOG IN</center>
    </h2>
    <form action="login.php" class="" method="post">
      <p class="inputbox">
        <input type="text" name="username" class="name" required="" value="">
        <label class="username"><i class="fas fa-user"></i> Username</label>
      </p>
      <p class="inputbox">
        <input type="password" name="password" id="password" required="">
        <label class="username"><i class="fas fa-lock"></i> Password</label>
      </p>

      <p class="check">
        <input type="checkbox" onclick="myFunction()" id="showpass">Show Password
      </p>

      <p>

        <center><input type="submit" name="" value="Login"></center>
      </p>


  </div>
  </form>


</body>

</html>
<script>
  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function animasi() {
    document.getElementById("animasi").style.display = block;
  }
</script>