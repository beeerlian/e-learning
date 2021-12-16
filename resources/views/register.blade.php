<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body>
  <form action="/register-user" method="post">
       {{ csrf_field() }}
       Nama : <input type="text" name="nama"> <br>
       Email : <input type="text" name="email"> <br>
       Phone : <input type="text" name="phone"> <br>
       Password: <input type="text" name="password"> <br>
       Status: <input type="text" name="status"> <br>
    <input type="submit" value="Register" name="btn-input"> <br> <br>
  </form>

</body>

</html>