<!-- <!DOCTYPE html>
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

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/templatemo-digital-trend.css">

  <!-- BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <!-- MENU BAR -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <p class="navbar-brand" >
        E-Learning - Sign Up
      </p>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="/login-email" class="nav-link contact">Sign In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- CONTACT -->
  <section class="contact section-padding">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

          <h1 class="mb-4">Hey there, Let's <strong>talk</strong> about <strong>creative</strong> projects</h1>

          <p>or email us at <a >naufal.berlian.99@gmail.com</a></p>
          <p>Please follow our <a rel="nofollow" href="https://www.instagram.com/beeerlian/">social media</a> to
            <strong>setup</strong> the contact form.
          </p>
        </div>

        <div class="col-lg-8 mx-auto col-md-10 col-12">

          <form action="/register-user" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-lg-12 col-12">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
              </div>

              <div class="col-lg-6 col-12">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>

              <div class="col-lg-6 col-12">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>

              <div class="col-lg-12 col-12">
                <input type="text" name="phone" class="form-control" placeholder="Phone" onkeypress="validate(event)" required>
              </div>

              <div class="col-lg-12 col-12">
                <center>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="student" required>
                    <label class="form-check-label" for="inlineRadio1">Student</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="lecturer">
                    <label class="form-check-label" for="inlineRadio2">Lecturer</label>
                  </div>
                </center>
              </div>

              <div class="col-lg-5 mx-auto col-7">
                <button type="submit" class="form-control" id="submit-button" name="btn-input">Sign Up</button>
              </div>
            </div>

          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/input_filter.js"></script>

</body>

</html>