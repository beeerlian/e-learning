<!DOCTYPE html>
<html lang="en">
<head>

     <title>Create Class</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
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

</head>
<body>

     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg">
       <div class="container">
           <p class="navbar-brand" >
             E-Learning | Create your class
           </p>

           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ml-auto">
                   
                   <li class="nav-item">
                       <a href={{ url('/login-email',) }} class="nav-link contact">Logout</a>
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

                      <h1 class="mb-4">Hey , Let's <strong>talk</strong> about <strong>creative</strong> projects</h1>

                      <p>or email us at <a href="mailto:hello@company.com">hello@company.com</a></p>
                      <p>Please follow our <a rel="nofollow" href="https://templatemo.com/contact">contact page</a> to <strong>setup</strong> the contact form.</p>
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    
                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->
                    
                      <form action="/add-event" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                            {{ csrf_field() }}
                            <div class="row">
                            
                          <div class="col-lg-12 col-12">
                                 <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>
                            
                            <div class="col-lg-12 col-12">
                                   <input type="text" class="form-control" name="link" placeholder="Link">
                            </div>

                            <div class="col-lg-12 col-12">
                                   <input type="text" class="form-control" name="time" placeholder="Time">
                              </div>
                              <div class="col-lg-12 col-12">
                                   <input type="hidden" class="form-control" name="lecturer" value={{$userId}}>
                              </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Create Class</button>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>