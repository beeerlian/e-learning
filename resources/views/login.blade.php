<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <form action="/login" method="post">
       {{ csrf_field() }}
    Email : <input type="text" name="email"> <br>
    Password: <input type="text" name="password"> <br>
    <input type="submit" value="Input nilai" name="btn-input"> <br> <br>
  </form>

</body>

</html>