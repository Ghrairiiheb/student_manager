<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body background="test2.jpg">
  <h1>Welcome</h1>
  <center>
  <div class="form_deg">
    <form class="login_form" action="login_check.php" method="POST">
      <div>
      <label class="label_deg">UserName</label>
      <input type="text" name="username">
      </div>
      <div>
      <label class="label_deg">Password</label>
      <input type="Password" name="password">
      </div>
      <div><input class="btn btn-primary" type="submit" name="submit" value="Login"></div>
    </form>
  </div>
  </center>
</body>
</html>